<?php
function renderPricing($title, $weekdayPrices, $weekendPrices, $note) {
?>
<div id="pricing" class="mt-20 p-5 bg-white rounded-md text-center container mx-auto">
    <h2 data-aos="fade-up" class="uppercase text-fargo font-Baskervville text-xl md:text-4xl text-center mb-6">
        <?php echo $title; ?>
    </h2>
    <!-- Pricing Sections -->
    <div data-aos="fade-up" class="flex flex-col md:flex-row justify-center gap-6 md:gap-10 pt-6">
        <!-- Weekday Section -->
        <div class="text-center">
            <h2 data-aos="fade-up" class="text-[18px] md:text-lg font-semibold text-fargo uppercase">
                Weekday <br> <span class="text-black text-sm md:text-[16px]">(Monday – Thursday)</span>
            </h2>
            <ul data-aos="fade-up" class="mt-3 text-gray-700 text-sm md:text-[17px] space-y-2">
                <?php foreach ($weekdayPrices as $people => $price) { ?>
                <li><?php echo $people; ?> people – Rs.<?php echo $price; ?>/-</li>
                <?php } ?>
            </ul>
        </div>

        <!-- Divider (Visible on Desktop) -->
        <div class="hidden md:block border-l border-gray-300"></div>
        <!-- Divider (Visible on Mobile) -->
        <hr data-aos="fade-up" class="md:hidden border-gray-300 my-4">

        <!-- Weekend Section -->
        <div class="text-center">
            <h2 data-aos="fade-up" class="text-[18px] md:text-lg font-semibold text-fargo uppercase">
                Weekend <br> <span class="text-black text-sm md:text-[16px]">(Friday – Sunday)</span>
            </h2>
            <ul data-aos="fade-up" class="mt-3 text-gray-700 text-sm md:text-[17px] space-y-2">
                <?php foreach ($weekendPrices as $people => $price) { ?>
                <li><?php echo $people; ?> people – Rs.<?php echo $price; ?>/-</li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Note -->
    <!-- <p data-aos="fade-up" class="text-sm text-gray-600 mt-6 text-center"><?php echo $note; ?></p>
    <p data-aos="fade-up" class="text-center font-semibold text-gray-700 mt-2 text-[15px] md:text-[16px] italic">* Food
        is additionally
        charged</p>
 
    <hr data-aos="fade-up" class="border-gray-200 mt-6"> -->
</div>
<?php
}
?>