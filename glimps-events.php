<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php';?>
    <title>Glimpse Of Events</title>
</head>

<body>
    <!-- Header -->
    <?php $isScroll = false; include_once 'includes/header.php'?>
    <!-- Header -->
    <div 
  class="relative flex flex-col w-full h-[70vh] mt-16 text-white bg-cover bg-center bg-no-repeat z-10"
  style="background-image: url('/assets/images/deck/deck-banner.webp');"
>
  <!-- Semi-transparent black overlay -->
  <div class="absolute inset-0 bg-black/50 z-20"></div>
</div>





<div class="text-center my-10">
<?php
$title = "events";
include 'includes/heading.php';
?>

        <form class="mt-28 space-y-4">
            <!-- Row 1: Name, Email, Phone -->
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4  gap-3 md:gap-5">
    <div>
        <input data-aos="fade-up" type="text" class="border border-fargo p-2 rounded-none w-96 mb-5" placeholder="Name *">
    </div>
    <div>
        <input data-aos="fade-up" type="email" class="border border-fargo p-2 rounded-none w-96 mb-5" placeholder="Valid Email ID *">
    </div>
    <div>
        <input data-aos="fade-up" type="tel" class="border border-fargo p-2 rounded-none w-96 mb-5" placeholder="Phone (Only Numbers) *">
    </div>
</div>


            <!-- Row 2: Destination, No. of Guests, Type of Event -->
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4 gap-3 md:gap-5">
    <div>
        <select data-aos="fade-up" class="border border-fargo p-2 rounded-none w-96 mb-5">
            <option value="">Destination</option>
            <option value="deck">Deck</option>
            <option value="porch">Porch</option>
            <option value="valley">Valley</option>
            <option value="treetrop">Treetrop</option>
        </select>
    </div>
    <div>
        <input data-aos="fade-up" type="number" class="border border-fargo p-2 rounded-none w-96 mb-5" placeholder="No. of Guests *">
    </div>
    <div>
        <select data-aos="fade-up" class="border border-fargo p-2 rounded-none w-96 mb-5">
            <option value="">Type of Event</option>
            <option value="anniversary">Anniversary</option>
            <option value="birthdays">Birthdays</option>
            <option value="candle-light-setup">Candle Light Setup</option>
            <option value="corporate-offsite">Corporate Offsite</option>
            <option value="kids-getaway">Kids Getaway</option>
            <option value="pool-party">Pool Party</option>
            <option value="sunday-brunch">Sunday Brunch</option>
            <option value="wedding-photoshoot">Wedding Photoshoot</option>
        </select>
    </div>
</div>


            <!-- Button -->
            <div class="mt-20">
                <button data-aos="fade-up" type="submit" class="bg-transparent border-2 border-fargo text-fargo px-6 py-2 hover:bg-fargo hover:text-white transition-colors tracking-wide font-medium">
                    ENQUIRE NOW
                </button>
            </div>
        </form>
    </div>





    <div data-aos="fade-up" class="flex flex-col md:flex-row items-center justify-center w-full px-6 lg:px-20 py-16 bg-white gap-5">

  <!-- Left Side: Image or Video -->
  <div class="w-full md:w-1/2 h-auto overflow-hidden p-5">
    <img data-aos="fade-up" src="/assets/images/deck/deck-banner.webp" alt="Fargo Lights" class="w-full h-full object-cover rounded-lg shadow-md">
  </div>

  <!-- Right Side: Text Content -->
  <div class="w-full md:w-1/2 mt-10 md:mt-0 md:pl-12 text-center md:text-left p-5">
    <h2 data-aos="fade-up" class="text-2xl md:text-4xl font-semibold tracking-wide uppercase text-fargo fargo-heading">Create Unforgettable Moments at Fargo!</h2>

    <!-- Divider Line -->
    <div class="w-12 h-px bg-[#8C6849] mx-auto md:mx-0 my-4"></div>

    <p data-aos="fade-up" class="text-gray-700 leading-relaxed mb-4 text-sm md:text-lg">
      The perfect setting can elevate any event, and at Fargo, Our Staycations offer just that for every occasion.
      Whether it’s a heartfelt proposal, a lively bachelorette, a picture-perfect pre-wedding shoot, or an intimate anniversary celebration,
      our space creates the ideal atmosphere for unforgettable moments.
    </p>

    <p data-aos="fade-up" class="text-gray-700 leading-relaxed mb-4 text-sm md:text-lg">
      From exclusive cocktail parties to the most personal and romantic wedding day, we ensure every detail is perfect.
    </p>

    <p data-aos="fade-up" class="text-gray-700 leading-relaxed text-sm md:text-lg">
      If you’re ready to escape the ordinary and make your event extraordinary, Fargo is the place to be.
      Let’s create something unforgettable together!
    </p>
  </div>
</div>





     <!-- End Convinced Section -->
     <div class="container-item mt-12 md:mt-20 text-center">
        <div class="my-10">
        <?php
$title = "event archives";
include 'includes/heading.php';
?>
        </div>
    
        <?php include_once 'includes/events.php'?>
    </div>
    <!-- reviews -->
    <div class="container-item mt-12 md:mt-20">
        <?php include_once 'includes/home-reviews.php'?>
    </div>


    <!-- Content Info -->
    <?php include_once 'includes/footer.php';?>
</body>

</html>