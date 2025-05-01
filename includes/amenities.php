<div id="amenities" data-aos="fade-up" class="mt-12 md:mt-20">
    <!-- Heading -->
    <h2 data-aos=" fade-up" class="uppercase text-fargo font-Baskervville text-xl md:text-4xl text-center mb-6">
        AMENITIES
    </h2>

    <div data-aos="fade-up" class="bg-fargo p-10">
        <div class="container-item grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 md:gap-12">
            <?php foreach ($amenities as $item): ?>
            <div class="flex flex-col items-center text-center">
                <img data-aos="fade-up" src="<?= htmlspecialchars($item['icon']) ?>"
                    alt="<?= htmlspecialchars($item['alt']) ?>" class="w-10 h-10 mb-2">
                <span data-aos="fade-up"
                    class="text-xs md:text-[16px] text-white"><?= htmlspecialchars($item['text']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>