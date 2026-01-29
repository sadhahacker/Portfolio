<?php
/**
 * Dynamic Content Configuration
 * This file contains all the dynamic content for the portfolio website
 */

return [
    // Site Meta Information
    'site' => [
        'title' => 'Sadhasivam Sekar',
        'favicon' => 'https://i.ibb.co/zRsTj3p/Frame-1-37.png',
        'copyright_year' => date('Y'),
    ],

    // Personal Information
    'personal' => [
        'name' => 'Sadhasivam Sekar',
        'greeting' => "Hi I'm",
        'tagline' => 'Associate Software Engineer',
        'profile_image' => 'files/pass.png',
        'signature_image' => 'files/signaturecropped.png',
        'resume_file' => 'files/sadhasivam_resume.pdf',
        'email' => 'sadha30102001@gmail.com',
    ],

    // About Section
    'about' => [
        'title' => 'About Me',
        'description' => [
            'Performance-driven Backend Developer with 2 years of experience architecting scalable web applications within the Laravel ecosystem. Experienced in implementing robust API services, optimizing database performance, and writing clean, testable code following SOLID principles.',
            'Skilled in building high-availability systems, leveraging advanced Eloquent ORM strategies and caching mechanisms to reduce latency and improve server efficiency.',
            'Dedicated to maintaining codebase integrity through rigorous unit testing, ensuring seamless deployments and long-term project maintainability.',
        ],
        'details' => [
            'Name' => 'Sadhasivam Sekar',
            'From' => 'India',
            'Email' => 'sadha30102001@gmail.com',
            'Availability' => 'Fulltime',
            'Experience' => '2 years',
        ],
    ],

    // Social Links
    'social_links' => [
        [
            'icon' => 'fa fa-envelope',
            'url' => 'mailto:sadha30102001@gmail.com',
            'title' => 'Email',
        ],
        [
            'icon' => 'fa-brands fa-github',
            'url' => 'https://github.com/sadhahacker',
            'title' => 'GitHub',
        ],
        [
            'icon' => 'fa-brands fa-linkedin',
            'url' => 'https://www.linkedin.com/in/sadhasivam-sekar/',
            'title' => 'LinkedIn',
        ],
    ],

    // Navigation Menu
    'navigation' => [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Experience', 'href' => '#experience'],
        ['label' => 'Education', 'href' => '#education'],
        ['label' => 'Projects', 'href' => '#projects'],
        ['label' => 'Skills', 'href' => '#skills'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],

    // Education
    'education' => [
        [
            'title' => 'B. Tech Information Technology',
            'institution' => 'University College of Engineering Anna University (BIT Campus)',
            'period' => '2019 – 2023',
        ],
        [
            'title' => 'Higher Secondary (Class 12) & SSLC (Class 10)',
            'institution' => 'Dawn Matric Hr Sec School',
            'period' => '2016 – 2019',
        ],
    ],

    // Work Experience
    'experience' => [
        [
            'title' => 'Associate Software Engineer',
            'company' => 'Ladybird Web Solution Pvt Ltd.',
            'period' => '2023 - Present',
            'description' => 'Architecting scalable web applications within the Laravel ecosystem. Implementing robust API services, optimizing database performance, and writing clean, testable code following SOLID principles. Enhanced application security through advanced request validation, rate limiting, and bot-mitigation mechanisms, reducing malicious traffic and improving transaction reliability.'
        ]
    ],

    // Projects
    'projects' => [
        [
            'icon' => 'fa fa-robot',
            'title' => 'Crypto Trading Bot',
            'description' => 'Designed and developed an automated cryptocurrency trading system to reduce manual and emotion-driven trading. Integrated external exchange APIs to fetch real-time market data and trigger trade actions programmatically. Implemented rule-based trading logic to execute trades consistently based on predefined strategies. Added configurable parameters to easily adjust trading behavior without changing core implementation.',
            'link' => 'https://github.com/sadhahacker/Crypto-Trading-Bot',
        ],
        [
            'icon' => 'fa fa-language',
            'title' => 'LinguaBot',
            'description' => 'Designed and developed a flexible solution to convert bulk key–value inputs into multiple structured output formats. Designed a text-based interface supporting multi-key and multi-input entries to streamline batch conversions. Implemented automated transformation of inputs into formats such as JSON, PHP arrays, and other structured representations. Integrated multiple AI models to enable intelligent formatting and flexible output generation.',
            'link' => 'https://github.com/sadhahacker/LinguaBot',
        ],
    ],

    // Skills
    'skills' => [
        ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
        ['name' => 'Java', 'icon' => 'fa-brands fa-java'],
        ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
        ['name' => 'SQL', 'icon' => 'fa-solid fa-database'],
        ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
        ['name' => 'RESTful APIs', 'icon' => 'fa-solid fa-cloud'],
        ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
        ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt'],
        ['name' => 'GitHub', 'icon' => 'fa-brands fa-github'],
        ['name' => 'Postman', 'icon' => 'fa-solid fa-rocket'],
        ['name' => 'Linux', 'icon' => 'fa-brands fa-linux'],
    ],

    // Contact Section
    'contact' => [
        'title' => 'Contact Me',
        'subtitle' => 'Get In Touch',
    ],

    // Footer
    'footer' => [
        'message' => 'Thanks for visiting',
        'copyright' => '© Copyright ' . date('Y') . '. All rights reserved.',
    ],
];