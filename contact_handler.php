<?php
/**
 * Contact Form Handler
 * Handles form submissions, stores them in JSON file, and sends Google Chat notifications
 */

// Load environment configuration
require_once __DIR__ . '/config/env.php';

header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = isset($_POST['NAME']) ? trim($_POST['NAME']) : '';
$email = isset($_POST['EMAIL']) ? trim($_POST['EMAIL']) : '';
$subject = isset($_POST['SUBJECT']) ? trim($_POST['SUBJECT']) : '';
$message = isset($_POST['MESSAGE']) ? trim($_POST['MESSAGE']) : '';

// Validate required fields
if (empty($name) || empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name and Email are required']);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Sanitize input
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Create contact entry
$contactEntry = [
    'id' => uniqid('contact_'),
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
];

// Path to JSON file
$jsonFile = __DIR__ . '/data/contacts.json';

// Read existing data
$jsonData = ['contacts' => []];
if (file_exists($jsonFile)) {
    $existingData = file_get_contents($jsonFile);
    if ($existingData !== false) {
        $decoded = json_decode($existingData, true);
        if (is_array($decoded)) {
            $jsonData = $decoded;
        }
    }
}

// Add new contact
$jsonData['contacts'][] = $contactEntry;

// Save to file
$result = file_put_contents($jsonFile, json_encode($jsonData, JSON_PRETTY_PRINT));

if ($result === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to save contact']);
    exit;
}

// Send Google Chat notification
sendGoogleChatNotification($contactEntry);

// Success response
echo json_encode([
    'success' => true,
    'message' => 'Thank you for your message! I will get back to you soon.',
]);

/**
 * Send notification to Google Chat
 */
function sendGoogleChatNotification($contact) {
    // Check if notifications are enabled
    if (!env('ENABLE_NOTIFICATIONS', false)) {
        return false;
    }

    $webhookUrl = env('GOOGLE_CHAT_WEBHOOK_URL');
    
    // Skip if webhook URL is not configured or is placeholder
    if (empty($webhookUrl) || $webhookUrl === 'your_google_chat_webhook_url_here') {
        return false;
    }

    // Create the message card for Google Chat
    $chatMessage = [
        'cards' => [
            [
                'header' => [
                    'title' => '📬 New Contact Form Submission',
                    'subtitle' => 'Portfolio Website',
                    'imageUrl' => 'https://i.ibb.co/zRsTj3p/Frame-1-37.png',
                    'imageStyle' => 'AVATAR'
                ],
                'sections' => [
                    [
                        'widgets' => [
                            [
                                'keyValue' => [
                                    'topLabel' => 'From',
                                    'content' => $contact['name'],
                                    'icon' => 'PERSON'
                                ]
                            ],
                            [
                                'keyValue' => [
                                    'topLabel' => 'Email',
                                    'content' => $contact['email'],
                                    'icon' => 'EMAIL'
                                ]
                            ],
                            [
                                'keyValue' => [
                                    'topLabel' => 'Subject',
                                    'content' => $contact['subject'] ?: '(No subject)',
                                    'icon' => 'DESCRIPTION'
                                ]
                            ],
                            [
                                'keyValue' => [
                                    'topLabel' => 'Time',
                                    'content' => $contact['timestamp'],
                                    'icon' => 'CLOCK'
                                ]
                            ]
                        ]
                    ],
                    [
                        'header' => 'Message',
                        'widgets' => [
                            [
                                'textParagraph' => [
                                    'text' => $contact['message'] ?: '(No message provided)'
                                ]
                            ]
                        ]
                    ],
                    [
                        'widgets' => [
                            [
                                'buttons' => [
                                    [
                                        'textButton' => [
                                            'text' => 'REPLY VIA EMAIL',
                                            'onClick' => [
                                                'openLink' => [
                                                    'url' => 'mailto:' . $contact['email'] . '?subject=Re: ' . urlencode($contact['subject'] ?: 'Your Portfolio Contact')
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];

    // Send to Google Chat
    $ch = curl_init($webhookUrl);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($chatMessage),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=UTF-8'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => true
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode === 200;
}
