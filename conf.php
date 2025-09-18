<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start session if not already started
}

// Set timezone
date_default_timezone_set('Africa/Nairobi'); // Change to your timezone

// Set base URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST'] . '/';

// Database Configuration
$conf['db_type'] = 'pdo'; // Options: 'mysqli' or 'pdo'
$conf['db_host'] = 'localhost'; // Use 'localhost' for local development
$conf['db_user'] = 'yusuf'; // Use 'root' for local development
$conf['db_pass'] = 'mombasa123';  // Use '' for local development
$conf['db_name'] = 'taskapp'; // Database name

// Site Information
$conf['site_name'] = "BBIT Enterprise";
$conf['site_initials'] = 'icsc';
$conf['site_domain'] = 'bbitenterprise.com';
$conf['site_slogan'] = 'Connecting Minds, Building Futures';
$conf['site_url'] = $base_url . $conf['db_name'] . '/';
$conf['site_title'] = $conf['site_name'] . ' - ' . $conf['site_slogan'];
$conf['site_desc'] = 'Join ' . $conf['site_name'] . ' to connect with fellow students, share knowledge, and build a brighter future together.';
$conf['site_authors'] = ['Yusuf Salyani', $conf['site_name']];
$conf['site_email'] = 'admin@' . $conf['site_domain'];
$conf['version'] = 'v1.0.0';

// Site Language
$conf['site_lang'] = 'en';
require_once __DIR__ . "/Lang/" . $conf['site_lang'] . ".php"; // Include language file

// Email Configuration
$conf['mail_type'] = 'smtp'; // Options: 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com'; // For Gmail SMTP
$conf['smtp_user'] = 'yusuf.salyani@strathmore.edu'; // Your email address
$conf['smtp_pass'] = ''; // Use App Password if 2FA is enabled
$conf['smtp_port'] = 465; // For SSL
$conf['smtp_secure'] = 'ssl'; // Options: 'ssl' or 'tls'
$conf['mail_from'] = 'no-reply@' . $conf['site_domain'];
$conf['mail_from_name'] = $conf['site_name'] . ' Team';

// Valid password length
$conf['min_password_length'] = 4; // Minimum password length

// Valid email domains
$conf['valid_email_domains'] = [$conf['site_domain'], 'gmail.com', 'yahoo.com', 'outlook.com', 'strathmore.edu'];

// Set verification code
$conf['verification_code'] = rand(100000, 999999); // Example: 6-digit code