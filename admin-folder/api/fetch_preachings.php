<?php
// fetch_preachings.php

include_once '../includes/db.php';

// Function to fetch preachings from the database
function fetchPreachings() {
    global $conn; // Use the database connection from db.php

    $sql = "SELECT id, title, video_url, date FROM preachings ORDER BY date DESC";
    $result = $conn->query($sql);

    $preachings = array();

    if ($result->num_rows > 0) {
        // Fetch all preachings
        while ($row = $result->fetch_assoc()) {
            $preachings[] = $row;
        }
    }

    return $preachings;
}

// Set the content type to JSON
header('Content-Type: application/json');

// Fetch preachings and return as JSON
echo json_encode(fetchPreachings());
?>