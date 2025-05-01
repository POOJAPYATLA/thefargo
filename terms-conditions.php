<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php'; ?>
    <title>Terms And Conditions</title>
    <style>
        li.relative::before {
    content: "-";
    position: absolute;
    left: -15px;
    display: block;
    
}

    </style>
</head>

<body>
    <!-- Header -->
    <?php $isScroll = false; include_once 'includes/header.php'; ?>
    
    <!-- Banner -->
    <div class="relative flex flex-col w-full h-[70vh] mt-16 text-white bg-cover bg-center bg-no-repeat z-10"
        style="background-image: url('/assets/images/deck/deck-banner.webp');">
        <!-- Semi-transparent black overlay -->
        <div class="absolute inset-0 bg-black/50 z-20"></div>
    </div>

    <div class="text-center mt-4 sm:mt-6 md:mt-10 py-10">
        <?php
            $title = "terms&conditions";
            include 'includes/heading.php';
        ?>
    </div>

    <div class="container-item mt-6 sm:mt-8 md:mt-12 lg:mt-20">
    <ul data-aos="fade-up" class="mb-2 sm:mb-4 space-y-1 sm:space-y-2">
    <?php
        $terms = [
            "Check in after 2PM and Check out before 11AM",
            "The Fargo doesn't serve any liquor on the premises",
            "Only guests with room booking are allowed into The Fargo Premises",
            "Any Damage to the property will be charged to the customer",
            "If any pets are allowed into the property under the approval of owner, any damage to the property will be fined to the customer",
            "The Fargo doesn't tolerate abusive behaviour towards staff at any times during the stay",
            "Children are to be supervised near the water body area. Please be careful with your steps around the water body area to avoid any injuries and damage to the company property.",
            "The Fargo stands firmly against substance abuse and prohibits possession and consumption of drugs, marijuana or hookah",
            "The Fargo holds no responsibility for any legal issues caused due to guest's activities.",
            "Outside food and DJ's strictly not allowed into the property",
            "The Fargo holds no responsibility for loss of belonging of the guest",
            "Food once ordered cannot be cancelled",
            "Security deposit of Rs.5000 has to be paid which will be refunded at the time of check-out",
            "If there is any cancellation after the advance is paid, the paid amount is completely non refundable, whereas we can help you in rescheduling your stay, which is again subject to availability."
        ];

        foreach ($terms as $term) {
            echo '<li data-aos="fade-up" class="relative pl-6 before:absolute before:left-0 before:content-[\'-\'] before:text-gray-700 before:display-block before:align-middle text-sm md:text-lg">' . $term . '</li>';

        }
    ?>
</ul>

    </div>

    <!-- Reviews -->
    <div class="container-item mt-12 md:mt-20">
        <?php include_once 'includes/home-reviews.php'; ?>
    </div>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>
