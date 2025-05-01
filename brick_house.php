<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php';?>
    <title>Fargo Deck</title>
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
        $photosLink = "brick_house_gallary.php";
        $shareLink = "share1.php";
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
            $title = "BRICK HOUSE";
            $location = "Nazeebnagar, Telangana, India";
            $mapUrl = "https://maps.app.goo.gl/k8LDXYRimE7stPBt7";
            $details = "6 - 10 pax | 3 bedrooms | 5 bathrooms";
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
            $subtitle = "Rise above the ordinary at Fargo TreeTrop, your private tropical treehouse paradise!";
            $paragraphs = [
                "Welcome to The Brick House, a serene escape designed for groups of
                6 to 12 PAX. This space features earthy tones and beautiful
                architecture blends effortlessly with nature. It has 3 rooms, a private
                pool and an open lawn surrounded by trees, this space is perfect for
                unwinding together and for small gatherings"
            ];
            $video_url = "https://www.youtube.com/embed/SJYquXgDEsA?si=ycpPgEzXzdNcrV7B";
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
        <?php
            include_once 'includes/pricing.php';
            $title = "PRICING";
            $weekdayPrices = [
                "6" => "23,824",
                "8" => "25,824",
                "10" => "27,824",
                "12" => "29,824"
            ];
            
            $weekendPrices = [
               "6" => "25,824",
                "8" => "27,824",
                "10" => "29,824",
                "12" => "31,824"
            ];
            $note = "Friday, Saturday and Sunday are considered as weekends. The price is inclusive of tax, accommodation, and complimentary breakfast. A separate food menu is available for ordering.";
            renderPricing($title, $weekdayPrices, $weekendPrices, $note);
        ?>
        <!-- pricing -->
        <!-- location -->
        <?php
            include_once 'includes/location.php';
            $title = "LOCATION";
            $mapUrl = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7611.09437189347!2d78.754874!3d17.481374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb71a154b57345%3A0x5ab4bfe241b03159!2sFargo%20TreeTrop!5e0!3m2!1sen!2sin!4v1742210321025!5m2!1sen!2sin";
            renderLocation($title, $mapUrl);
        ?>
        <!-- location -->

        <div id="tandc" class=" container-item mt-12 md:mt-20">
            <h2 data-aos="fade-up" class="uppercase text-fargo font-Baskervville text-xl md:text-4xl text-center mb-6">
                TERMS & CONDITIONS
            </h2>
            <ul class="md:max-w-[36%]  parent-el mx-auto mt-5 text-lg space-y-4 list-disc text-gray-700">
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

    <div class="container-item mt-5 md:mt-10">
        <h2 class="fargo-heading text-center py-2" data-aos="fade-up">
            <span>Our other</span> <span>Properties</span>
        </h2>
        <div data-aos="fade-up">
            <?php include_once 'includes/collections.php'?>
        </div>
    </div>
    <div class="container-item mt-5 md:mt-10">
        <?php include_once 'includes/home-reviews.php'?>
    </div>


    <!-- Content Info -->
    <?php include_once 'includes/footer.php';?>
</body>

</html>