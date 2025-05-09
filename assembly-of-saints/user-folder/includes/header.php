<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Church of Saints in Uganda</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

  <header class="bg-blue-800 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <!-- Logo and Title -->
        <div class="flex items-center space-x-4">
          <img src="images/church_logo.png" alt="Church Logo" class="w-14 h-14">
          <span class="text-xl font-bold uppercase tracking-wide">Church of Saints in Uganda</span>
        </div>

        <!-- Hamburger Menu Button -->
        <div class="md:hidden">
          <button id="menu-toggle" class="text-white focus:outline-none" aria-label="Toggle navigation menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>

        <!-- Navigation Links (Desktop) -->
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
          <a href="index.php" class="hover:text-blue-300 transition">Home</a>
          <a href="about.php" class="hover:text-blue-300 transition">About</a>
          <a href="services.php" class="hover:text-blue-300 transition">Services</a>
          <a href="contact.php" class="hover:text-blue-300 transition">Contact</a>
        </nav>
      </div>

      <!-- Mobile Menu (hidden by default) -->
      <div id="mobile-menu" class="md:hidden hidden flex-col space-y-2 pb-4">
        <a href="index.php" class="block text-white hover:text-blue-300">Home</a>
        <a href="about.php" class="block text-white hover:text-blue-300">About</a>
        <a href="services.php" class="block text-white hover:text-blue-300">Services</a>
        <a href="contact.php" class="block text-white hover:text-blue-300">Contact</a>
      </div>
    </div>
  </header>

  <script>
    // Toggle mobile menu visibility
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
