<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preachings - Assembly of Saints in Uganda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <main class="container mx-auto my-8">
        <h2 class="text-xl font-semibold mb-4">Past Preachings</h2>
        <div id="preachings-list" class="space-y-4">
            <!-- Preachings will be dynamically loaded here -->
        </div>

        <section class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Live Stream</h2>
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/live_stream?channel=YOUR_CHANNEL_ID" frameborder="0" allowfullscreen></iframe>
        </section>
    </main>

<?php
include 'includes/footer.php';
?>

    <script src="js/scripts.js"></script>
</body>
</html>