<?php
$carousel_items = [
    [
        'title1' => 'The',
        'title' => 'Valley',
        'href' => '/valley.php',
        'image' => '/assets/images/collections/fargo_valley.webp',
        'guests' => 20,
        'bedrooms' => 2,
        'bathrooms' => 3,
        'animation_duration' => '0.5s',
    ],
    [
        'title1' => 'The',
        'title' => 'Porch',
        'href' => '/porch.php',
        'image' => '/assets/images/collections/fargo_porch.webp',
        'guests' => 20,
        'bedrooms' => 2,
        'bathrooms' => 3,
        'animation_duration' => '1s',
    ],
    [
        'title1' => 'The',
        'title' => 'Deck',
        'href' => '/deck.php',
        'image' => '/assets/images/collections/fargo_deck.webp',
        'guests' => 20,
        'bedrooms' => 2,
        'bathrooms' => 3,
        'animation_duration' => '1.5s',
    ],
    [
        'title1' => 'The',
        'title' => 'Treetrop',
        'href' =>'/treetrop.php',
        'image' => '/assets/images/collections/fargo_treetrop.webp',
        'guests' => 20,
        'bedrooms' => 2,
        'bathrooms' => 3,
        'animation_duration' => '2s',
    ],
    [
        'title' => 'Brick House',
        'href' => '/brick_house.php',
        'image' => '/assets/images/collections/fargo_treetrop.jpg',
        'guests' => 20,
        'bedrooms' => 2,
        'bathrooms' => 3,
        'animation_duration' => '2.5s',
    ],
];

?>

<div class="swiper myTextSwiper w-[90%] md:w-full mx-auto overflow-hidden">
    <div class="swiper-wrapper text-left ">
        <?php foreach ($carousel_items as $index => $item): ?>
        <div class="swiper-slide text-left" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <a href="<?= htmlspecialchars($item['href']) ?>">
                <img src="<?= htmlspecialchars($item['image']) ?>" alt="the fargo"
                    class="w-full object-cover h-[70vh] md:h-[60vh]" />


                <div class="flex justify-between items-center mt-3">
                    <div data-aos="fade-up">
                        <p class="md:text-[28px] text-[22px] tracking-[1px] flex items-baseline">
                            <?php if (!empty($item['title1'])): ?>
                            <span
                                class="font-Baskervville md:text-[30px] mr-1"><?= htmlspecialchars($item['title1']) ?></span>
                            <?php endif; ?>
                            <span class="font-playfair italic font-semibold">
                                <?= htmlspecialchars($item['title']) ?></span>
                        </p>
                        <button
                            class="mt-1 bg-fargo/95 font-Raleway text-white px-4 py-2 tracking-[2px] uppercase text-[9px] rounded-full font-thin">
                            KNOW MORE
                        </button>
                    </div>

                    <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex flex-col items-center justify-center gap-2">
                            <img src="/assets/images/collections/guests.webp" class="md:w-10 md:h-10 w-8 h-8"
                                alt="the fargo">
                            <p
                                class="text-white md:text-[15px] text-[12px] rounded-full md:w-8 md:h-8 w-7 h-7 flex items-center justify-center bg-fargo/95">
                                <?= htmlspecialchars($item['guests']) ?>
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-2">
                            <img src="/assets/images/collections/bed+black.webp" class="md:w-10 md:h-10 w-8 h-8"
                                alt="the fargo">
                            <p
                                class="text-white md:text-[15px] text-[12px] rounded-full md:w-8 md:h-8 w-7 h-7 flex items-center justify-center bg-fargo/95">
                                <?= htmlspecialchars($item['bedrooms']) ?>
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-2">
                            <img src="/assets/images/collections/bath+black.webp" class="md:w-10 md:h-10 w-8 h-8"
                                alt="the fargo">
                            <p
                                class="text-white md:text-[15px] text-[12px] rounded-full md:w-8 md:h-8 w-7 h-7 flex items-center justify-center bg-fargo/95">
                                <?= htmlspecialchars($item['bathrooms']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>