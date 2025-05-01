<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php';?>
    <link rel="stylesheet" href="/.dist/css/home.css">
    <title>The Fargo – Best Nature & Valley Resort in Hyderabad for Staycations & Getaways</title>
    <meta name="description"
        content="Experience The Fargo – the best nature and valley resort in Hyderabad. Perfect for luxury stays, romantic getaways, family vacations, and destination weddings.">
    <meta name="keywords"
        content="best resorts in Hyderabad, luxury resorts Hyderabad, nature resorts Hyderabad, valley resort Hyderabad, weekend getaways Hyderabad, The Fargo resort">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Resort",
        "name": "The Fargo",
        "description": "The Fargo is the top-rated luxury nature resort and valley retreat in Hyderabad, perfect for romantic stays and weekend getaways.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Hyderabad",
            "addressRegion": "Telangana",
            "addressCountry": "India"
        }
    }
    </script>
</head>

<body>
    <?php $isScroll = true; include_once 'includes/header.php'?>

    <div class="banner-container">
        <video class="video-banner hidden md:block" autoplay loop muted>
            <source src="/assets/videos/main-banner.mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video class="video-banner block md:hidden" autoplay loop muted>
            <source src="/assets/videos/mobile-banner.MP4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1 class="hidden">Welcome to The Fargo – The Best Nature Resort in Hyderabad</h1>
        <h2 class="hidden">Escape to the Tranquil Valley at Our Luxury Retreat</h2>
        <div class="title-container">
            <h2 class="main-title" style="filter: drop-shadow(0px 0px 16px black);">
                BEST <span class="font-playfair italic font-bold">Staycations</span>
                <br> In
                Hyderabad
            </h2>
        </div>
    </div>

    <!-- welcome sec -->
    <div class="container-item container-space text-center">
        <h2 class="fargo-heading" data-aos="fade-up">
            <span>Let's go</span> <span>FARGO!</span>
        </h2>
        <p class="md:mb-16 mb-12 md:mt-14 mt-10 w-[90%] md:w-[80%] lg:w-[60%] mx-auto text-center text-[16px] md:text-[20px] leading-8"
            data-aos="fade-up">
            Nestled around Hyderabad, each of our <span class="font-semibold">bespoke stays</span> is a tale waiting to
            be lived. We’re here to flip the
            script on ‘getaways’ it’s not just about the place, it’s about the vibe.
        </p>
        <button data-aos="fade-up"
            class="bg-fargo text-white text-[16px] md:text-[24px] px-5 py-2 md:px-8 md:py-3 rounded-full hover:bg-opacity-90 transition-all font-playfair italic">
            Come for the vibe, stay for the peace!
        </button>
    </div>
    <!-- welcome sec end-->
    <!-- our gateways -->
    <div class="container-item container-space ">
        <h2 class="fargo-heading text-center" data-aos="fade-up">
            <span>Our</span> <span>Collection</span>
        </h2>
        <div data-aos="fade-up">
            <?php include_once 'includes/collections.php'?>
        </div>
    </div>
    <!-- our gateways -->
    <!-- video -->
    <div class="w-full mt-12 md:mt-20">
        <video class="w-full h-full object-cover" autoplay loop muted>
            <source src="/assets/videos/main-banner.mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <!-- video -->
    <div class="container-item container-space !px-6" data-aos="fade-up">
        <div class="bg-fargo/20 py-8 text-center rounded-xl md:rounded-3xl">
            <h1 class="text-[30px] md:text-[40px] py-5 font-playfair font-semibold italic" data-aos="fade-up">Convinced
                yet?
            </h1>
            <div class="flex items-center justify-center" data-aos="fade-up">
                <img src="/assets/images/telephone.png" alt="the fargo" class="w-44 h-44 object-cover p-5">
            </div>
            <div data-aos="fade-up"
                class="bg-white/40 w-[90%] md:w-[75%] px-3 md:px-4 py-5 md:py-8 mx-auto rounded-xl md:rounded-3xl mb-[20px]">
                <p class="text-fargo text md:text-xl text-lg">We’ve got just what it takes to make your stay feel
                    special.
                </p>
                <span class="md:text-xl text-lg" data-aos="fade-up">Leave the details to us!</span>
            </div>
            <button data-aos="fade-up" class="bg-[#977e62] text-white px-16 py-3 rounded-full my-5 relative 
                after:absolute after:content-[''] after:w-[3px] after:h-[50px] after:top-[-40px] 
                after:left-1/2 after:-translate-x-1/2 after:bg-[#977e62]">
                <i class="fa-solid fa-phone"></i><span class="ml-3">REQUEST A CALL</span>
            </button>
        </div>
    </div>

    <!-- End Convinced Section -->

    <div class="container-item my-12 md:mt-20 ">

     <h2 class="fargo-heading text-center py-10" data-aos="fade-up">
            <span>More than just a</span> <span>Staycation</span>
        </h2>
        <?php include_once 'includes/events.php'?>
    </div>
    <!-- our promise -->
    <div class="container-item mt-12 md:mt-20 text-center">
        <h2 class="fargo-heading" data-aos="fade-up">
            <span>Meet</span> <span>Our Team</span>
        </h2>
        <div class='flex items-center justify-center' data-aos="fade-up">
            <img src="/assets/images/fargo_promise.png" alt="" class='w-96   h-auto '>
        </div>
        <p class="md:max-w-2xl mx-auto text-center md:text-[18px] text-[13px] w-[90%]" data-aos="fade-up"> We’re
            a team of
            We’re a team of young, dynamic, and passionate individuals driven by creativity and purpose. Each of us
            brings fresh ideas and energy to craft meaningful staycation experiences. Together, we’re building a
            community that celebrates simplicity, comfort, and connection.</p>
    </div>
    <!-- our promise end-->
    <div class="container-item mt-5 md:mt-10">
   
        <?php include_once 'includes/home-reviews.php'?>
    </div>

    <?php include_once 'includes/footer.php'?>
</body>

</html>