<div id="about" class="container-item parent-el mt-12 md:mt-20">
    <h2 data-aos="fade-up" class="text-[20px] md:text-[32px] text-center font-Baskervville font-semibold">
        <?php echo $section_title; ?>
    </h2>
    <!-- <h1 class="text-center text-[25px] text-[#977e62]"><?php echo $subtitle; ?></h1> -->
    <?php foreach ($paragraphs as $index => $paragraph): ?>
    <p data-aos="fade-up" class="my-5 text-gray-500 text-sm md:text-lg leading-5 <?php echo $index !== 0 ? 'hide-content hidden' : ''; ?>">
        <?php echo $paragraph; ?>
    </p>
    <?php endforeach; ?>
    <?php if (count($paragraphs) > 1): ?>
    <div class="-mt-3" data-aos="fade-up">
        <button class="text-fargo text-sm md:text-lg underline font-semibold read-more-btn">Read More</button>
    </div>
    <?php endif; ?>
    <div data-aos="fade-up" class="flex justify-center items-center mt-10">
        <iframe id="about-video" width="300" height="315" src="<?php echo $video_url; ?>" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
            class="w-[90%] md:w-[60%] h-[350px] md:h-[500px]"></iframe>
    </div>
</div>