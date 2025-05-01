<?php
function renderOverview($title1, $title, $location, $mapUrl, $details, $brochureUrl, $features) {
?>
<div id="overview" class="container-item mt-7">
    <!-- Title -->

    <h2 class="m-0 text-[30px] md:text-[40px] flex items-baseline">
        <?php if (!empty($title1)): ?>
        <span class="font-playfair italic font-semibold tracking-[4px]"><?= htmlspecialchars($title1) ?></span>
        <?php endif; ?>
        <span class="font-Baskervville ml-1">
            <?= htmlspecialchars($title) ?></span>
    </h2>


    <p data-aos="fade-up" class="text-gray-600 tracking-wide text-sm md:text-[18px] mb-3">
        <?php echo $location; ?>
        <a href="<?php echo $mapUrl; ?>"
            class="hover:text-fargo text-black hover:underline transition-colors underline">View
            on Map</a>
    </p>
    <!-- Details -->
    <div data-aos="fade-up" class="text-black font-medium tracking-wide text-sm md:text-[18px] ">
        <p><?php echo $details; ?></p>
    </div>
    <!-- Brochure Button -->
    <a data-aos="fade-up" href="<?php echo $brochureUrl; ?>"
        class="inline-block px-10 py-2 bg-fargo text-white font-medium mt-5 hover:bg-fargo/90 transition-colors text-sm md:text-[18px]">
        View Brochure
    </a>
    <!-- Divider -->
    <hr data-aos="fade-up" class="border-gray-200 my-8">
    <!-- Features List -->
    <div data-aos="fade-up" class="my-5 space-y-5 text-gray-500 text-sm md:text-[16px]">
        <?php foreach ($features as $icon => $feature) { ?>
        <div class="flex items-center space-x-3">
            <span><i class="<?php echo $icon; ?>"></i></span>
            <p class="font-medium"><?php echo $feature; ?></p>
        </div>
        <?php } ?>
    </div>
    <!-- Divider -->
    <hr data-aos="fade-up" class="border-gray-200 my-5">
</div>
<?php
}
?>