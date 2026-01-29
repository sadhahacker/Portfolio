<?php
/**
 * Environment Configuration Loader
 * Loads variables from .env file
 */

function loadEnv($path = null) {
    if ($path === null) {
        $path = dirname(__DIR__) . '/.env';
    }

    if (!file_exists($path)) {
        return false;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Parse key=value pairs
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            
            // Remove quotes if present
            $value = trim($value, '"\'');
            
            // Set as environment variable
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }

    return true;
}

/**
 * Get environment variable value
 */
function env($key, $default = null) {
    $value = getenv($key);
    
    if ($value === false) {
        return $default;
    }

    // Handle boolean strings
    if (strtolower($value) === 'true') return true;
    if (strtolower($value) === 'false') return false;
    
    return $value;
}

// Auto-load .env file
loadEnv();
