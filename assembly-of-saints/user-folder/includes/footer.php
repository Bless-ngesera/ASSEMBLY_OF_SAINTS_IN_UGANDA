<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Assembly of Saints in Uganda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<footer class="bg-yellow-50 text-gray-600 pt-10 text-left shadow-xl">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 pb-10">
    
    <!-- Logo & About -->
    <div>
      <img src="images/church_logo.png" alt="Logo" class="w-16 h-16 mb-4">
      <p class="text-sm leading-relaxed">
        Sharing the everlasting gospel. Join us in spreading truth, love, and hope to every corner of the world.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="font-semibold text-lg mb-3 ">Quick Links</h3>
      <div class="space-y-2 text-sm">
        <a href="index.php" class="hover:text-yellow-400">Home</a><br>
        <a href="preachings.php" class="hover:text-yellow-400">Preachings</a><br>
        <a href="music.php" class="hover:text-yellow-400">Music</a><br>
        <a href="about.php" class="hover:text-yellow-400">About</a><br>
        <a href="contact.php" class="hover:text-yellow-400">Contact</a>
      </div>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="font-semibold text-lg mb-3">Contact Info</h3>
      <p class="text-sm">P.O. Box 123, Kampala, Uganda</p>
      <p class="text-sm">Phone: +256 700 000 000</p>
      <p class="text-sm">Email: info@asu.org</p>
      <p class="text-sm">Hours: Mon - Fri, 8:00 AM - 5:00 PM</p>
    </div>

    <!-- Newsletter Signup -->
    <div>
      <h3 class="font-semibold text-lg mb-3">Newsletter Signup</h3>
      <form class="flex flex-col space-y-3">
        <input type="email" placeholder="Enter your email" class="px-3 py-2 rounded text-gray-900 focus:outline-none" required>
        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-3 py-2 rounded">
          Subscribe
        </button>
        <p class="text-xs text-gray-300">By subscribing, you agree to our <a href="privacy.php" class="underline">Privacy Policy</a>.</p>
      </form>
    </div>

  </div>

  <!-- Bottom Bar -->
  <div class="bg-yellow-50 border-t border-gray-700 py-4">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm">
      
      <!-- Social Media & Legal -->
      <div class="flex space-x-4 mb-4 md:mb-0">
      <a href="#" class="hover:text-yellow-400" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-yellow-400" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-yellow-400" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-yellow-400" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>

      <p>&copy; <?php echo date("Y"); ?>Church of Saints. All rights reserved.</p>
      <div class="space-x-4 mt-2 md:mt-0">
        <a href="privacy.php" class="hover:text-yellow-400">Privacy Policy</a>
        <a href="terms.php" class="hover:text-yellow-400">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>
</html>