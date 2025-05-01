<div class="sticky top-16 bg-white/70 backdrop-blur-lg  py-4 z-10">
    <div id="navbar" class="container-item  font-semibold flex items-center justify-between gap-4 md:gap-5 overflow-x-hidden text-[13px] md:text-lg">
        <a href="#overview" class="nav-link"><button class="nav-button">Overview</button></a>
        <a href="#about" class="nav-link"><button class="nav-button">About</button></a>
        <a href="#amenities" class="nav-link"><button class="nav-button">Amenities</button></a>
        <a href="#pricing" class="nav-link"><button class="nav-button">Pricing</button></a>
        <a href="#location" class="nav-link"><button class="nav-button">Location</button></a>
        <a href="#tandc" class="nav-link"><button class="nav-button">T&C</button></a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[id], div[id]');
    const navLinks = document.querySelectorAll('.nav-link .nav-button');

    function onScroll() {
        let currentSectionId = '';
        const scrollY = window.pageYOffset;
        console.log(sections);
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 0; // Offset for sticky navbar
            const sectionHeight = section.offsetHeight;

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            const href = link.closest('a').getAttribute('href').replace('#', '');
            if (href === currentSectionId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', onScroll);
});
</script>