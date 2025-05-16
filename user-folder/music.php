<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music - Assembly of Saints in Uganda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <main class="container mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4">Church Songs</h2>
        <div id="music-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Music items will be dynamically inserted here -->
        </div>
    </main>

<?php
include 'includes/footer.php';
?>

    <script src="js/scripts.js"></script>
</body>
</html>