<?php
session_start();
include('../includes/db.php');
include('../includes/auth.php');

if (!isAdminLoggedIn()) {
    header('Location: ../index.php');
    exit();
}

$messages = [];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_message'])) {
    $message_id = intval($_POST['message_id']);
    $stmt = $pdo->prepare("DELETE FROM messages WHERE id = :id");
    $stmt->bindParam(':id', $message_id);
    
    if ($stmt->execute()) {
        $success = "Message deleted successfully.";
    } else {
        $error = "Failed to delete message.";
    }
}

$stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Messages - Admin</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Manage Messages</h1>
        
        <?php if (!empty($error)): ?>
            <div class="bg-red-500 text-white p-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if (!empty($success)): ?>
            <div class="bg-green-500 text-white p-2 mb-4"><?php echo $success; ?></div>
        <?php endif; ?>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Message</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message): ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($message['id']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($message['name']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($message['email']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($message['message']); ?></td>
                        <td class="border px-4 py-2">
                            <form method="POST" action="">
                                <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                                <button type="submit" name="delete_message" class="bg-red-500 text-white px-2 py-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>