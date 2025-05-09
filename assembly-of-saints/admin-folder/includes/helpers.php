<?php
// helpers.php

/**
 * Sanitize input data to prevent XSS and SQL injection.
 *
 * @param string $data The input data to sanitize.
 * @return string The sanitized data.
 */
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

/**
 * Redirect to a specified URL.
 *
 * @param string $url The URL to redirect to.
 */
function redirect($url) {
    header("Location: $url");
    exit();
}

/**
 * Check if the user is logged in.
 *
 * @return bool True if the user is logged in, false otherwise.
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Flash a message to the session.
 *
 * @param string $message The message to flash.
 */
function flashMessage($message) {
    $_SESSION['flash_message'] = $message;
}

/**
 * Get the flashed message from the session.
 *
 * @return string|null The flashed message or null if not set.
 */
function getFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $message;
    }
    return null;
}
?>