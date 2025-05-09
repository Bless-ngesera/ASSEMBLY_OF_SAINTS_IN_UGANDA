<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $video_link = $_POST['video_link'] ?? '';
    $date = $_POST['date'] ?? '';

    // Validate input
    if (empty($title) || empty($video_link) || empty($date)) {
        http_response_code(400);
        echo json_encode(['message' => 'Title, video link, and date are required.']);
        exit;
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO preachings (title, description, video_link, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $video_link, $date);

    // Execute and check for success
    if ($stmt->execute()) {
        http_response_code(201);
        echo json_encode(['message' => 'Preaching added successfully.']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to add preaching.']);
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Method not allowed.']);
}

$conn->close();
?>