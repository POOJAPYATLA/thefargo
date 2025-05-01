<footer class="bg-[#464543] text-white px-6 py-12 md:py-20  mt-12 md:mt-20" data-aos="fade-up">
    <div class="container mx-auto flex items-center justify-center flex-col md:flex-row">
        <h2 class="font-Baskervville uppercase text-xl md:text-2xl mb-3 md:mb-0 mr-0 md:mr-8" data-aos="fade-up">
            Subscribe for our updates
        </h2>
        <form class="flex w-full md:w-auto">
            <input type="email" placeholder="Email Address" required
                class="w-full md:w-[300px] lg:w-[400px] px-4 py-2 text-black rounded-l-md focus:outline-none"
                data-aos="fade-up" data-aos-delay="100" />
            <button data-aos="fade-up" data-aos-delay="200"
                class="bg-fargo text-white px-4 py-2 rounded-r-md uppercase text-sm tracking-wider">Subscribe</button>
        </form>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 pt-8 text-sm mt-5">
        <div data-aos="fade-up" data-aos-delay="300">
            <img src="/assets/images/fargo_logo_white.png" alt="Fargo Logo" class="w-[300px] mb-4">
        </div>

        <!-- Our Getaways -->
        <?php
            $getaways = [
                ['label' => 'Deck', 'url' => '/deck.php'],
                ['label' => 'Porch', 'url' => '/porch.php'],
                ['label' => 'Valley', 'url' => '/valley.php'],
                ['label' => 'Treetop', 'url' => '/treetrop.php'],
                ['label' => 'Brick House', 'url' => '/brick_house.php'],
            ];
        ?>
        <div>
            <h3 class="uppercase mb-2 text-[#b2b2ae] text-lg md:text-xl" data-aos="fade-up" data-aos-delay="300">Our
                Getaways</h3>
            <ul class="space-y-2 mt-5" data-aos="fade-up" data-aos-delay="400">
                <?php foreach ($getaways as $item): ?>
                <li data-aos="fade-up" data-aos-delay="500">
                    <a href="<?= htmlspecialchars($item['url']) ?>" class="hover:underline text-md md:text-lg">
                        <?= htmlspecialchars($item['label']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Our Getaways -->
        <!-- The Fargo -->
        <?php
            $theFargoLinks = [
                ['label' => 'Location', 'url' => '/contact-us.php'],
                ['label' => 'Contact Us', 'url' => '/contact-us.php'],
                ['label' => 'Privacy Policy', 'url' => '/privacy-policy.php'],
                ['label' => 'Terms & Conditions', 'url' => '/terms-conditions.php'],
            ];
        ?>
        <div>
            <h3 class="uppercase mb-2 text-[#b2b2ae] text-lg md:text-xl" data-aos="fade-up" data-aos-delay="300">The
                Fargo</h3>
            <ul class="space-y-2 mt-5" data-aos="fade-up" data-aos-delay="400">
                <?php foreach ($theFargoLinks as $item): ?>
                <li data-aos="fade-up" data-aos-delay="500">
                    <a href="<?= htmlspecialchars($item['url']) ?>" class="hover:underline text-md md:text-lg">
                        <?= htmlspecialchars($item['label']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- The Fargo -->
        <!-- Follow Us -->
        <?php
            $socialLinks = [
                ['url' => 'https://www.instagram.com/thefargohyd/?hl=en', 'icon' => 'fa-brands fa-instagram'],
                ['url' => 'https://www.linkedin.com/company/thefargo/', 'icon' => 'fa-brands fa-linkedin'],
                ['url' => 'https://www.youtube.com/@thefargohyd', 'icon' => 'fa-brands fa-youtube'],
            ];
        ?>
        <div>
            <h3 class="uppercase mb-2 text-[#b2b2ae] text-lg md:text-xl" data-aos="fade-up" data-aos-delay="300">Follow
                Us</h3>
            <div class="flex space-x-3 mt-5" data-aos="fade-up" data-aos-delay="400">
                <?php foreach ($socialLinks as $social): ?>
                <a href="<?= htmlspecialchars($social['url']) ?>" data-aos="fade-up" data-aos-delay="500">
                    <i class="<?= htmlspecialchars($social['icon']) ?> text-2xl"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>

<div class="floating-circles">
    <a href="tel:+919959112558">
        <div class="circle"><img src="https://www.thefargo.in/images/call icon.png" style="height:30px;" /> </div>
    </a>
    <a href="https://wa.me/919959112558">
        <div class="circle"> <img src="https://www.thefargo.in/images/whatsapp.png" style="height:30px;" /> </div>
    </a>
    <button id="chatToggle" class="chat-toggle"> <i class="fa fa-comment"></i> </button>
</div>
<div class="chat-container">
    <div class="chat-window">
        <div class="chat-header">
            <span>Chatbot</span>
            <button id="closeChat" class="close-btn" style="font-size:24px;">&times;</button>
        </div>
        <div id="chatMessages" class="chat-messages"></div>
        <div class="chat-input" style="display:none;">
            <input type="text" id="userInput" placeholder="Type your message here..." />
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="./.dist/js/global.js"></script>
<script src="./.dist/js/custom-chat.js"></script>
<script>
window.onload = function() {
    const preloader = document.querySelector("#preloader");
    preloader.style.display = "none";

};
new Swiper(".mySwiper", {
    loop: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: true
    },
    speed: 1600,
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        640: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    },
});
new Swiper(".myTextSwiper", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: true
    },
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 40,
    breakpoints: {
        640: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    },
});
const lightbox = GLightbox({
    selector: '.glightbox'
});
</script>
<script>
AOS.init({
    offset: 20,
    delay: 0,
    duration: 1000,
    easing: 'ease',
});
</script>