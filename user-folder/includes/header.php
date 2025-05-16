<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Church of Saints in Uganda</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Header -->
  <header class="bg-yellow-50 text-gray-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">

        <!-- Logo and Title -->
        <div class="flex items-center space-x-3">
          <img src="images/church_logo.png" alt="Church Logo" class="w-12 h-12 sm:w-14 sm:h-14 object-contain">
          <span class="font-semibold text-gray-500 text-xl" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B82F6] to-[#f9ac47]">Church of Saints in Uganda</span> 
            </span>

        </div>

        <!-- Hamburger Icon for Mobile -->
        <div class="md:hidden">
          <button id="menu-toggle" aria-label="Toggle Menu" class="focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Navigation Menu (Desktop) -->
        <nav class="hidden md:flex space-x-6 text-sm font-medium ">
          <a href="index.php" class="hover:text-orange-300 transition">Home</a>
          <a href="preachings.php" class="hover:text-orange-300 transition">Preachings</a>
          <a href="music.php" class="hover:text-orange-300 transition">Musics</a>
          <a href="about.php" class="hover:text-orange-300 transition">About</a>
          <a href="contact.php" class="hover:text-orange-300 transition">Contact</a>
        </nav>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden hidden flex flex-col space-y-2 pb-4 px-2 text-sm">
        <a href="index.php" class="block py-1 text-gray-600 hover:text-orange-300">Home</a>
        <a href="preachings.php" class="block py-1 text-gray-600 hover:text-orange-300">Preachings</a>
        <a href="music.php" class="block py-1 text-gray-600 hover:text-orange-300">Musics</a>
        <a href="about.php" class="block py-1 text-gray-600 hover:text-orange-300">About</a>
        <a href="contact.php" class="block py-1 text-gray-600 hover:text-orange-300">Contact</a>
      </div>
    </div>
  </header>

  <!-- JS for menu toggle -->
  <script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
