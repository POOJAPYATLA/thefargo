<?php
function renderButtons($photosLink, $shareLink, $videoLink) {
?>
<div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 md:bottom-8 ">
    <div class="flex gap-3 justify-center">
        <a data-aos="fade-up" href="<?php echo $photosLink; ?>"
            class="bg-white text-fargo px-4 md:px-6 py-2 text-center rounded-full font-semibold text-[14px] md:text-lg whitespace-nowrap">
            View Photos
        </a>
        <a data-aos="fade-up" data-aos-delay="50" href="<?php echo $shareLink; ?>"
            class="bg-white text-fargo px-4 md:px-6 py-2 text-center rounded-full font-semibold text-[14px] md:text-lg whitespace-nowrap">
            Share
        </a>
        <a data-aos="fade-up" data-aos-delay="100" href="<?php echo $videoLink; ?>"
            class="bg-white text-fargo px-4 md:px-6 py-2 text-center rounded-full font-semibold text-[14px] md:text-lg whitespace-nowrap">
            View Video
        </a>
    </div>
</div>
<?php
}
?>
