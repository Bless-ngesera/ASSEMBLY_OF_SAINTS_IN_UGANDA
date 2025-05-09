<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $artist = $_POST['artist'] ?? '';
    $category = $_POST['category'] ?? '';
    $file_link = $_POST['file_link'] ?? '';

    if (empty($title) || empty($artist) || empty($category) || empty($file_link)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO music (title, artist, category, file_link) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $artist, $category, $file_link);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Music added successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add music.']);
    }

    $stmt->close();
}
$conn->close();
?>