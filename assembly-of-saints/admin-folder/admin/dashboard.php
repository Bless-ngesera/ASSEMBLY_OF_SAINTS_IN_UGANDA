<?php
session_start();
include '../includes/auth.php';
include '../includes/db.php';

// Check if the user is logged in and is an admin
if (!isAdmin()) {
    header('Location: ../index.php');
    exit();
}

// Fetch data for the dashboard
$preachingCount = getCount('preachings');
$musicCount = getCount('music');
$programCount = getCount('programs');
$messageCount = getCount('messages');

function getCount($table) {
    global $conn;
    $query = "SELECT COUNT(*) as count FROM $table";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    return $data['count'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Assembly of Saints in Uganda</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-5">
        <h1 class="text-3xl font-bold mb-5">Admin Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Total Preachings</h2>
                <p class="text-2xl"><?php echo $preachingCount; ?></p>
            </div>
            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Total Music</h2>
                <p class="text-2xl"><?php echo $musicCount; ?></p>
            </div>
            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Total Programs</h2>
                <p class="text-2xl"><?php echo $programCount; ?></p>
            </div>
            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Total Messages</h2>
                <p class="text-2xl"><?php echo $messageCount; ?></p>
            </div>
        </div>
        <div class="mt-5">
            <a href="manage_preachings.php" class="bg-blue-500 text-white px-4 py-2 rounded">Manage Preachings</a>
            <a href="manage_music.php" class="bg-blue-500 text-white px-4 py-2 rounded ml-2">Manage Music</a>
            <a href="manage_programs.php" class="bg-blue-500 text-white px-4 py-2 rounded ml-2">Manage Programs</a>
            <a href="manage_messages.php" class="bg-blue-500 text-white px-4 py-2 rounded ml-2">Manage Messages</a>
        </div>
    </div>
</body>
</html>