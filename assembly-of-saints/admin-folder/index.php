<?php
// index.php - Main entry point for the backend application

// Include necessary files
require_once 'includes/db.php';
require_once 'includes/auth.php';
require_once 'includes/helpers.php';

// Start session
session_start();

// Define a simple routing mechanism
$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri) {
    case '/':
        // Redirect to admin dashboard or home page
        header('Location: admin/dashboard.php');
        exit;
    case '/admin':
        header('Location: admin/dashboard.php');
        exit;
    // Add more routes as needed
    default:
        // Handle 404 - Not Found
        http_response_code(404);
        echo "404 Not Found";
        break;
}

// Close database connection if necessary
$db = null;
?>