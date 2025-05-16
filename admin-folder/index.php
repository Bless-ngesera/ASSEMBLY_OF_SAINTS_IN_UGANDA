<?php
// index.php - Main entry point for the backend application

// Include necessary files
require_once 'includes/db.php';
require_once 'includes/auth.php';
require_once 'includes/helpers.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define a simple routing mechanism
$request_uri = $_SERVER['REQUEST_URI'];

// Normalize the URI for local development
$uri = parse_url($request_uri, PHP_URL_PATH);

if ($uri === '/ASSEMBLY_OF_SAINTS_IN_UGANDA/admin-folder/' || $uri === '/ASSEMBLY_OF_SAINTS_IN_UGANDA/admin-folder/index.php') {
    header('Location: admin/dashboard.php');
    exit;
} elseif ($uri === '/ASSEMBLY_OF_SAINTS_IN_UGANDA/admin-folder/admin') {
    header('Location: admin/dashboard.php');
    exit;
} else {
    http_response_code(404);
    echo "404 Not Found";
}

// Close database connection if necessary
$db = null;
?>