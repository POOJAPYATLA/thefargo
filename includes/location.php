<?php
function renderLocation($title, $iframeSrc) {
?>
<div id="location" class="container-item mt-12 md:mt-20">
    <h2 data-aos="fade-up" class="uppercase text-fargo font-Baskervville text-xl md:text-4xl text-center mb-6">
        <?php echo $title; ?>
    </h2>

    <div>
        <iframe data-aos="fade-up" src="<?php echo $iframeSrc; ?>" width="600" height="450" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-[400px] w-full">
        </iframe>
    </div>
</div>
<?php
}
?>