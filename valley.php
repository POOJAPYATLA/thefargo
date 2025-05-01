<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php';?>
    <title>Fargo Valley</title>
</head>

<body>
    <!-- Header -->
    <?php $isScroll = false; include_once 'includes/header.php'?>
    <!-- Header -->
    <!-- banner -->
    <div class="relative flex flex-col w-full text-white mt-16 h-[70vh] bg-cover bg-center bg-no-repeat"
        style="background-image: url('/assets/images/deck/deck-banner.webp');">
        <?php
       include_once 'includes/banner-buttons.php';
        $photosLink = "valley_gallary.php";
        $shareLink = "";
        $videoLink = "#about-video";

        renderButtons($photosLink, $shareLink, $videoLink);
        ?>
    </div>
    <div class="relative">
        <?php include_once 'includes/details-navbar.php'; ?>
        <!-- overview -->
        <?php
            include_once 'includes/overview.php';
            $title1 = "The";
            $title = "VALLEY";
            $location = "Cheemaldari, Telangana, India";
            $mapUrl = "https://maps.app.goo.gl/k8LDXYRimE7stPBt7";
            $details = "10 - 25 guests | 3 bedrooms | 3 bathrooms";
            $brochureUrl = "#";
            $features = [
                "fa-solid fa-camera-retro" => "Complimentary Breakfast",
                "fa-solid fa-wifi" => "Unlimited WiFi",
                "fa-solid fa-calendar-check" => "Check In - 2 PM | Check Out - 11 AM",
                "fa-solid fa-person-swimming" => "Private Pool"
            ];
            renderOverview($title1, $title, $location, $mapUrl, $details, $brochureUrl, $features);
        ?>
        <!-- overview -->
        <!-- about -->
        <?php
            $section_title = "ABOUT";
            $subtitle =  "Escape to the Edge: Fargo Valley, Where Rocks Meet Stars";
            $paragraphs = [
                "Welcome to the Valley—a secluded sanctuary nestled in the heart of nature, designed for memorable gatherings and meaningful connections. Perfect for a group of up to 25, this expansive property offers a harmonious blend of comfort and charm, creating the ideal setting for celebrations, reunions, or simply a refreshing escape.",
                "The Valley boasts sprawling lawns where you can bask in the open air, play games, or host lively events. Cozy lounging areas invite you to relax, unwind, and share laughter with your loved ones. At the heart of the property lies a stunning infinity pool, seamlessly blending with the serene vistas, providing a perfect spot to cool off and soak in the beauty around you.",
                "Accommodations include a thoughtfully designed dormitory for group stays and two charming cottages that offer privacy and comfort, ensuring every guest feels at home. Whether you're marking a special occasion, enjoying quality time with friends and family, or simply seeking a tranquil retreat, the Valley provides the perfect backdrop for unforgettable experiences. "
            ];
            $video_url = "https://www.youtube.com/embed/12pG8pz3Eeg?si=z_K0sAaj5yX65J7k";
            include_once 'includes/details-about.php';
        ?>
        <!-- about -->
        <!-- amenities -->
        <?php  
            $amenities = [
                ['icon' => '/images/bedroom.png', 'alt' => 'Bedroom', 'text' => '3 Individual Rooms with Attached Bathrooms'],
                ['icon' => '/images/wifi.png', 'alt' => 'WiFi', 'text' => 'WiFi'],
                ['icon' => '/images/pet.png', 'alt' => 'Pet Friendly', 'text' => 'Pet Friendly'],
                ['icon' => '/images/pool.png', 'alt' => 'Private Pool', 'text' => 'Private Pool'],
                ['icon' => '/images/bonfire.png', 'alt' => 'Bonfire', 'text' => 'Bonfire'],
                ['icon' => '/images/steward.png', 'alt' => 'Steward', 'text' => 'Two Dedicated Stewards'],
                ['icon' => '/images/games.png', 'alt' => 'Indoor Outdoor Games', 'text' => 'Indoor and Outdoor Games'],
                ['icon' => '/images/towel.png', 'alt' => 'Bath Linen & Toiletries', 'text' => 'Bath Linen & Toiletries'],
                ['icon' => '/images/tv.png', 'alt' => 'Television', 'text' => 'Television'],
                ['icon' => '/images/speaker.png', 'alt' => 'Bluetooth Speaker', 'text' => 'Bluetooth Speaker'],
                ['icon' => '/images/ac.png', 'alt' => 'Air Conditioner', 'text' => 'Air Conditioner'],
                ['icon' => '/images/food.png', 'alt' => 'Food on Order', 'text' => 'Food on Order'],
            ];  
            include_once 'includes/amenities.php';
        ?>
        <!-- amenities -->
        <!-- pricing -->
    <div id="pricing" class="mt-20 p-5 bg-white  rounded-md animate-fadeIn text-center">

<h1 class="text-[30px] my-10 uppercase text-[#977e62] font-semibold relative 
  after:content-[''] after:absolute after:bottom-[-30px] after:left-1/2 after:-translate-x-1/2 
  after:w-[10%] after:h-[1px] after:bg-[#977e62] text-center " style="font-family: 'Cormorant Garamond', serif;">
PRICING
</h1>
<p class="text-[#977e62] text-xl md:text-2xl">Weekday</p>
<p class="text-sm md:text-lg leading-5">UPTO 6 PAX- Rs.22,000/-</p>
<p  class="text-sm md:text-lg leading-5">"For every additional person, we charge Rs.1,250 extra and we can accommodate upto 25 people on the property.</p>
<p  class="text-[#977e62] text-xl md:text-2xl">Weekend</p>
<p  class="text-sm md:text-lg leading-5">UPTO 10 PAX- Rs.32,000/-</p>
<p  class="text-sm md:text-lg leading-5">For every additional person, we charge Rs.1,500 extra and we can accommodate upto 25 people on the property</p>
<p  class="text-sm md:text-lg leading-5">"The costs involved for events will vary accordingly, please reach out to our customer service for further information</p>
<p  class="text-sm md:text-lg leading-5">50% of the total booking amount needs to be paid to confirm the booking under your name. We have a non-refundable policy, we can offer a re-schedule option if your group cannot make it on the booking date.</p>
<p  class="text-sm md:text-lg leading-5">"The re-schedule option can only be provided if we are informed 1 week prior the booking date. No re-schedule will be provided if informed at last minute.</p>
<p  class="text-sm md:text-lg leading-5">* Food is additionally charged</p>
<hr>
</div>


     <!--end pricing -->
        <!-- location -->
        <?php
            include_once 'includes/location.php';
            $title = "LOCATION";
            $mapUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1345.4670910834943!2d78.75494884774781!3d17.48097100059165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb71d93cfd175f%3A0x9998bf9269c70c89!2sFargo%20Deck!5e0!3m2!1sen!2sin!4v1734525046873!5m2!1sen!2sin";
            renderLocation($title, $mapUrl);
        ?>
        <!-- location -->

        <div id="tandc" class=" container-item mt-12 md:mt-20">
            <h2 data-aos="fade-up" class="uppercase text-fargo font-Baskervville text-xl md:text-4xl text-center mb-6">
                TERMS & CONDITIONS
            </h2>
            <ul class="md:max-w-[36%]  parent-el mx-auto mt-5 text-sm md:text-lg space-y-4 list-disc text-gray-700">
                <li data-aos="fade-up"> Public holidays are considered as weekends. </li>
                <li data-aos="fade-up"> We don’t serve alcohol on the premises of Fargo.</li>
                <li data-aos="fade-up" class="hide-content hidden"> Guests will be held responsible for any damages
                    caused to
                    the property and will
                    be charged
                    accordingly. Know more</li>
                <li class="list-none">
                    <button class="text-fargo underline font-semibold read-more-btn">Read More</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container-item mt-12 md:mt-20">
        <h2 class="fargo-heading text-center" data-aos="fade-up">
            <span>Our other</span> <span>Properties</span>
        </h2>
        <div data-aos="fade-up">
            <?php include_once 'includes/collections.php'?>
        </div>
    </div>
    <div class="container-item mt-12 md:mt-20">
        <?php include_once 'includes/home-reviews.php'?>
    </div>


    <!-- Content Info -->
    <?php include_once 'includes/footer.php';?>


  
</body>

</html>