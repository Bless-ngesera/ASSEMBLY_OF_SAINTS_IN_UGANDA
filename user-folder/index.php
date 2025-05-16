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
<main>
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center min-h-[60vh] md:min-h-[80vh] lg:h-screen" style="background-image: url('images/church_bg1.jpeg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
      <div class="w-full max-w-2xl mx-auto text-center text-white px-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
          Welcome to <br class="hidden sm:block">Church Of Saints
        </h1>
        <p class="text-base sm:text-lg md:text-2xl mb-6">A Place to Belong, Grow, and Serve</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <a href="#" class="bg-blue-400 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded w-full sm:w-auto text-center transition">Join Us This Sunday</a>
          <a href="preachings.php#live-stream" class="bg-orange-200 hover:bg-orange-300 text-gray-700 font-semibold py-2 px-6 rounded w-full sm:w-auto text-center transition">Watch Online</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Who We Are -->
  <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
      <div>
        <h2 class="text-3xl text-orange-300 font-semibold mb-4">Who We Are</h2>
        <p class="text-gray-700 text-lg">As a mission of leading people to a big relationship with Jesus Christ. We’re striving after an exponential relationship with Jesus Christ.</p>
        <a href="about.php" class="text-blue-600 font-semibold inline-block mt-4">Learn More &rarr;</a>
      </div>
      <div>
        <img src="../user-folder/images/christians.jpeg" alt="Church members talking" class="rounded shadow h-[350px] object-cover">
      </div>
    </div>
  </section>

  <!-- Sunday Services -->
  <section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded shadow">
        <h3 class="text-2xl font-semibold mb-2 text-orange-300 flex items-center">
          <svg class="w-7 h-7 mr-2 text-orange-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" fill="none"/>
            <path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor"/>
          </svg>
          Weekly Services
        </h3>
        <p class="mb-1"><b>Sunday</b>: 9:00 AM - 1:00 PM</p>
        <p class="mb-1"><b>Tuesday</b>: 4:00 PM - 8PM</p>
        <p class="mb-4"><b>Thursday</b>: 4:00 PM - 8PM</p>
        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Plan Your Visit</a>
      </div>

      <div class="bg-white p-6 rounded shadow">
        <h3 class="text-2xl font-semibold mb-2 text-orange-300 flex items-center mb-4">
        <svg class="w-7 h-7 mr-2 text-orange-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
         <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" stroke="currentColor" fill="none"/>
        </svg>
          Location
        </h3>
        <p class="mb-16"><b>Address</b>: Katwe kinyoro, Kevina road</p>
        <a href="contact.php#location" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Visit Maps</a>
      </div>
    </div>
  </section>

  <!-- Sermon Highlights & Upcoming Events -->
  <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <h3 class="text-2xl font-semibold mb-4">Sermon Highlights</h3>
        <div class="grid grid-cols-2 gap-4 text-blue-600">
          <span>Youth Ministry</span>
          <span>Women’s Ministry</span>
          <span>Worship Ministry</span>
          <span>Outreach Ministry</span>
        </div>
      </div>
      <div>
        <h3 class="text-2xl font-semibold mb-4">Upcoming Events</h3>
        <ul>
          <li class="mb-2">April 38 - 1:00 PM - Community Picnic</li>
          <li class="mb-2">May 5 - 15:00 M - Baptism Service</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Sermons Section -->
  <section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white p-4 rounded shadow">
        <img src="../user-folder/images/The_Power_of_Faith.jpeg" class="w-full h-40 object-cover mb-2 rounded">
        <h4 class="font-semibold mb-1">The Power of Faith</h4>
        <a href="#" class="text-blue-600">Learn more</a>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="../user-folder/images/Walking_in_the_Light.jpeg" class="w-full h-40 object-cover mb-2 rounded">
        <h4 class="font-semibold mb-1">Walking in the Light</h4>
        <a href="#" class="text-blue-600">Learn more</a>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="../user-folder/images/Hope_in_Times_of_Trouble.jpeg" class="w-full h-40 object-cover mb-2 rounded">
        <h4 class="font-semibold mb-1">Hope in Times of Trouble</h4>
        <a href="#" class="text-blue-600">Learn more</a>
      </div>
    </div>
    <div class="text-center mt-8">
      <a href="preachings.php#preachings-list" class="bg-blue-600 hover:bg-orange-300 text-white font-semibold py-2 px-6 rounded">Watch Now &rarr;</a>
    </div>
  </section>

  <!-- Get Involved to be put in the future-->
  <!-- <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-blue-600 text-white p-8 rounded shadow text-center">
        <h3 class="text-2xl font-semibold mb-4">Get Involved Today</h3>
        <div class="space-x-4">
          <a href="#" class="bg-white text-blue-600 font-semibold py-2 px-4 rounded">Volunteer</a>
          <a href="#" class="bg-white text-blue-600 font-semibold py-2 px-4 rounded">Give Online</a>
          <a href="#" class="bg-white text-blue-600 font-semibold py-2 px-4 rounded">Become a Member</a>
        </div>
      </div>
      <div class="flex items-center justify-center">
        <blockquote class="italic text-gray-700 text-center">
          "Come to me, all who are weary and burdened, and I will give you rest."<br>
          <span class="block mt-2">- Matthew 11:26</span>
        </blockquote>
      </div>
    </div> -->
  </section>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>