<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Assembly of Saints in Uganda</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <main class="container mx-auto px-4 py-10">
        <h2 class="text-2xl text-orange-300 font-semibold mb-6">Contact Us</h2>
        <form action="../backend/api/contact_form.php" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:text-orange-300 ">Send Message</button>
        </form>

        <div class="mt-10">
            <h3 class="text-xl font-semibold">Contact Information</h3>
            <p class="mt-2">Address: 123 Church Lane, Kampala, Uganda</p>
            <p>Phone: +256 123 456 789</p>
            <div class="mt-4">
                <h4 class="text-xl font-semibold">Follow Us</h4>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-blue-500 hover:text-orange-300">Facebook</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-orange-300">Twitter</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-orange-300">Instagram</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-orange-300">Telegram</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-orange-300">Youtube</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-10">
            <h3 class="text-xl font-semibold mb-4">Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509123!2d144.9537353153165!3d-37.81627997975166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11f3b3%3A0x5045675218ceed30!2sYour%20Church%20Name!5e0!3m2!1sen!2sau!4v1616161616161!5m2!1sen!2sau" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="location"></iframe>
        </div>
    </main>

<?php
include 'includes/footer.php';
?>

</body>
</html>