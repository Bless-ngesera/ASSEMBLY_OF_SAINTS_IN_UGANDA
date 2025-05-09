<?php
session_start();
include '../includes/db.php';
include '../includes/auth.php';

if (!isAdminLoggedIn()) {
    header('Location: ../index.php');
    exit();
}

$musicList = [];
$error = '';
$success = '';

// Handle music upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_music'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $category = $_POST['category'];
    $file = $_FILES['music_file'];

    // Validate inputs
    if (empty($title) || empty($artist) || empty($category) || empty($file['name'])) {
        $error = 'All fields are required.';
    } else {
        // Move uploaded file to the music directory
        $targetDir = '../../assets/music/';
        $targetFile = $targetDir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            // Insert music details into the database
            $stmt = $conn->prepare("INSERT INTO music (title, artist, category, file_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $title, $artist, $category, $targetFile);
            if ($stmt->execute()) {
                $success = 'Music uploaded successfully.';
            } else {
                $error = 'Failed to upload music.';
            }
            $stmt->close();
        } else {
            $error = 'Error uploading file.';
        }
    }
}

// Fetch music list
$result = $conn->query("SELECT * FROM music");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $musicList[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Music - Assembly of Saints</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Manage Music</h1>
        
        <?php if ($error): ?>
            <div class="bg-red-500 text-white p-4 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="bg-green-500 text-white p-4 mb-4"><?php echo $success; ?></div>
        <?php endif; ?>

        <form action="" method="POST" enctype="multipart/form-data" class="mb-6">
            <input type="text" name="title" placeholder="Music Title" required class="border p-2 mb-2 w-full">
            <input type="text" name="artist" placeholder="Artist" required class="border p-2 mb-2 w-full">
            <input type="text" name="category" placeholder="Category" required class="border p-2 mb-2 w-full">
            <input type="file" name="music_file" required class="border p-2 mb-2 w-full">
            <button type="submit" name="upload_music" class="bg-blue-500 text-white p-2">Upload Music</button>
        </form>

        <h2 class="text-xl font-bold">Uploaded Music</h2>
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Title</th>
                    <th class="border border-gray-300 p-2">Artist</th>
                    <th class="border border-gray-300 p-2">Category</th>
                    <th class="border border-gray-300 p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($musicList as $music): ?>
                    <tr>
                        <td class="border border-gray-300 p-2"><?php echo htmlspecialchars($music['title']); ?></td>
                        <td class="border border-gray-300 p-2"><?php echo htmlspecialchars($music['artist']); ?></td>
                        <td class="border border-gray-300 p-2"><?php echo htmlspecialchars($music['category']); ?></td>
                        <td class="border border-gray-300 p-2">
                            <a href="<?php echo htmlspecialchars($music['file_path']); ?>" class="text-blue-500">Download</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>