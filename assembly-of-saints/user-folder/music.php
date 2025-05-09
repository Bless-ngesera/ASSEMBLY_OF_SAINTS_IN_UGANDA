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
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-2xl font-bold">Assembly of Saints in Uganda</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="index.html">Home</a></li>
                <li><a href="preachings.html">Preachings</a></li>
                <li><a href="music.html" class="underline">Music</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4">Church Songs</h2>
        <div id="music-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Music items will be dynamically inserted here -->
        </div>
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center">
        <p>&copy; 2023 Assembly of Saints in Uganda. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>