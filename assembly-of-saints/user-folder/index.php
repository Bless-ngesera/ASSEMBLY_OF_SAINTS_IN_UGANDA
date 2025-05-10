<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly of Saints in Uganda</title>
    <link href="../frontend/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<main class="bg-gray-100">
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-screen" style="background-image: url('images/hero.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Our Church</h1>
        <p class="text-lg md:text-2xl">Experience faith, community, and love</p>
      </div>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold mb-4">A Place to Belong</h2>
      <p class="text-gray-700 text-lg">Join us in worship and fellowship as we grow together in faith. Our church is a community where everyone is welcome, and together we seek to make a positive impact in our world.</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-8">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="bg-white rounded shadow">
          <img src="images/service1.jpg" alt="Sunday Worship" class="w-full h-48 object-cover rounded-t">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Sunday Worship</h3>
            <p class="text-gray-700">Join us every Sunday at 9:00 AM for a time of worship, teaching, and community.</p>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="bg-white rounded shadow">
          <img src="images/service2.jpg" alt="Midweek Service" class="w-full h-48 object-cover rounded-t">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Midweek Service</h3>
            <p class="text-gray-700">Recharge your spirit with our Wednesday evening service at 6:00 PM.</p>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="bg-white rounded shadow">
          <img src="images/service3.jpg" alt="Youth Fellowship" class="w-full h-48 object-cover rounded-t">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Youth Fellowship</h3>
            <p class="text-gray-700">Engaging activities and discussions for youth every Friday at 5:00 PM.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Events Section -->
  <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-8">Upcoming Events</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Event 1 -->
        <div class="bg-gray-100 rounded shadow p-6">
          <h3 class="text-xl font-semibold mb-2">Community Outreach</h3>
          <p class="text-gray-700 mb-2">Date: June 15, 2025</p>
          <p class="text-gray-700">Join us as we serve our local community through various outreach programs.</p>
        </div>
        <!-- Event 2 -->
        <div class="bg-gray-100 rounded shadow p-6">
          <h3 class="text-xl font-semibold mb-2">Youth Camp</h3>
          <p class="text-gray-700 mb-2">Date: July 10-14, 2025</p>
          <p class="text-gray-700">A week-long camp filled with fun, learning, and spiritual growth for our youth.</p>
        </div>
        <!-- Event 3 -->
        <div class="bg-gray-100 rounded shadow p-6">
          <h3 class="text-xl font-semibold mb-2">Music Concert</h3>
          <p class="text-gray-700 mb-2">Date: August 20, 2025</p>
          <p class="text-gray-700">Experience an evening of uplifting music performed by our talented choir and band.</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
include 'includes/footer.php';
?>
</body>
</html>