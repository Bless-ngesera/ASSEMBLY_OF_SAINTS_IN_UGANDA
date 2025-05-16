<?php
session_start();
include('../includes/db.php');
include('../includes/auth.php');

// Check if the user is logged in and is an admin
if (!isAdmin()) {
    header('Location: ../index.php');
    exit();
}

// Function to fetch all preachings from the database
function fetchPreachings($conn) {
    $sql = "SELECT * FROM preachings ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Function to delete a preaching
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM preachings WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header('Location: manage_preachings.php');
    exit();
}

// Fetch all preachings
$preachings = fetchPreachings($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Preachings - Admin</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Manage Preachings</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Video Link</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preachings as $preaching): ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $preaching['id']; ?></td>
                    <td class="border px-4 py-2"><?php echo htmlspecialchars($preaching['title']); ?></td>
                    <td class="border px-4 py-2"><a href="<?php echo htmlspecialchars($preaching['video_link']); ?>" target="_blank">Watch</a></td>
                    <td class="border px-4 py-2">
                        <form method="POST" action="">
                            <input type="hidden" name="id" value="<?php echo $preaching['id']; ?>">
                            <button type="submit" name="delete" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>