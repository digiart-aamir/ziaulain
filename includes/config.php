<?php
/**
 * Global Configuration & Helper Utilities
 * Sidra Zia Portfolio
 */

// Prevent multiple definitions
if (!defined('APP_INIT')) {
    define('APP_INIT', true);
}

// Site Constants
define('SITE_NAME', 'Sidra Zia');
define('SITE_TAGLINE', 'Full-Stack Web Developer & IT Specialist');
define('SITE_EMAIL', 'zziaulain@gmail.com');
define('SITE_PHONE', '+923115912874');
define('SITE_LOCATION', 'Islamabad');
define('SITE_GITHUB', 'https://github.com/Sidra874');
define('SITE_LINKEDIN', 'https://www.linkedin.com/in/zia-ulain-876047271?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app');
define('SITE_FACEBOOK', 'https://www.facebook.com/profile.php?id=100075451234322&mibextid=ZbWKwL');
define('SITE_INSTAGRAM', 'https://www.instagram.com/sidra.5189?igsh=MWJyancycjU3aXpldw==');
define('SITE_SKYPE', 'https://join.skype.com/invite/sBKoWraeG98x');

// Calculate base URL dynamically
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
$protocol = $isHttps ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = rtrim($scriptDir, '/');
if (substr($basePath, -8) === '/includes') {
    $basePath = substr($basePath, 0, -8);
} elseif (substr($basePath, -6) === '/admin') {
    $basePath = substr($basePath, 0, -6);
}
define('BASE_URL', $protocol . $host . $basePath);

/**
 * Safe HTML Escaping
 */
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Asset URL Helper
 */
function asset(string $path): string {
    return ltrim($path, '/');
}

/**
 * Route Helper
 */
function url(string $path = ''): string {
    if (empty($path)) {
        return 'index.php';
    }
    return ltrim($path, '/');
}

/**
 * Safe URL-encoded file path helper (for filenames and paths with spaces)
 */
function file_url(string $path): string {
    $parts = explode('/', str_replace('\\', '/', $path));
    $encoded = array_map('rawurlencode', $parts);
    return implode('/', $encoded);
}
