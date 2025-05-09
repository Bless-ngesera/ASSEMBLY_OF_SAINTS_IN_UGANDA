<?php
require_once '../includes/db.php';
require_once '../includes/auth.php';

session_start();

if (!isAdminLoggedIn()) {
    header('Location: login.php');
    exit();
}

$programs = [];
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $programName = $_POST['program_name'] ?? '';
    $programDate = $_POST['program_date'] ?? '';
    $programDescription = $_POST['program_description'] ?? '';

    if ($programName && $programDate && $programDescription) {
        $stmt = $pdo->prepare("INSERT INTO programs (name, date, description) VALUES (?, ?, ?)");
        if ($stmt->execute([$programName, $programDate, $programDescription])) {
            $message = 'Program added successfully!';
        } else {
            $message = 'Failed to add program.';
        }
    } else {
        $message = 'Please fill in all fields.';
    }
}

$stmt = $pdo->query("SELECT * FROM programs ORDER BY date DESC");
$programs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Programs - Admin</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Church Programs</h1>
        <?php if ($message): ?>
            <div class="bg-green-500 text-white p-2 mb-4"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="mb-4">
            <input type="text" name="program_name" placeholder="Program Name" required class="border p-2 mb-2 w-full">
            <input type="date" name="program_date" required class="border p-2 mb-2 w-full">
            <textarea name="program_description" placeholder="Program Description" required class="border p-2 mb-2 w-full"></textarea>
            <button type="submit" class="bg-blue-500 text-white p-2">Add Program</button>
        </form>

        <h2 class="text-xl font-bold mb-2">Existing Programs</h2>
        <table class="min-w-full border">
            <thead>
                <tr>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Date</th>
                    <th class="border p-2">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programs as $program): ?>
                    <tr>
                        <td class="border p-2"><?php echo htmlspecialchars($program['name']); ?></td>
                        <td class="border p-2"><?php echo htmlspecialchars($program['date']); ?></td>
                        <td class="border p-2"><?php echo htmlspecialchars($program['description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>