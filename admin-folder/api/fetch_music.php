<?php
require_once '../includes/db.php';

header('Content-Type: application/json');

try {
    $query = "SELECT id, title, artist, category, file_link FROM music ORDER BY id DESC";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $musicList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'status' => 'success',
        'data' => $musicList
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?>