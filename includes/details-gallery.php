<div class="container-item mt-12 md:mt-20">
    <h1 class="text-[30px] md:text-[40px] py-5 font-playfair text-fargo text-center" data-aos="fade-up">Gallery
    </h1>
    <div class="text-center grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($galleryImages as $index => $gallery): ?>
        <div class="relative overflow-hidden" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
            <a href="<?= htmlspecialchars($gallery['image']) ?>" class="glightbox" data-gallery="events">
                <img src="<?= htmlspecialchars($gallery['image']) ?>" alt="the fargo"
                    class="w-full h-[200px] md:h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>