<?php
session_start();

// Database connection
require_once 'db.php';

// Function to authenticate user
function authenticate($username, $password) {
    global $conn;

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // e.g., admin, user

            return true; // Authentication successful
        }
    }
    return false; // Authentication failed
}

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Function to log out user
function logout() {
    session_unset();
    session_destroy();
}

// Function to check user role
function checkRole($role) {
    return isset($_SESSION['role']) && $_SESSION['role'] === $role;
}
?>