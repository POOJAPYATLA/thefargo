<?php 
    $testimonials = [
        ["message" => "Perfect staycation..my kids enjoyed the stay along with us.. How peaceful and serene it is!! It's a perfect Detox from this digital world and traffic chaos.", "name" => "Karnisha Peethala"],
        ["message" => "Stayed at Porch and I can't stop myself from saying what an amazing experience it was. Starting from the ambience to the facilities and comfort, it was truly a great experience. People don't intrude your privacy as well, and you can feel comfortable. The staff was very friendly and we were attended to very well.", "name" => "Sai Sharanya"],
        ["message" => "Fargo Deck is an amazing place. Service and food are 2 of the best qualities of this place and the view is amazing. When we came here it was also raining a bit so it became a hill station for us. I highly recommend this place.", "name" => "Sachin Agarwal"],
        ["message" => "We had an absolutely fantastic time at Fargo Deck! From start to finish, our stay was beyond our expectations. The pool was incredible—truly the highlight of our trip. It was clean, spacious, and perfect for relaxation.", "name" => "Samiulla Shaik"],
        ["message" => "Last week I had been to this property along with my family of five including kids. My first impression was how could I miss this beautiful place so far. The greenery and view are amazing.", "name" => "Nagendra"],
        ["message" => "A feel-free experience. Away from city noise. Everything is on point. Cottages, games, pool, garden, projector for binge-watching. Everything at one place along with the go-to staff.", "name" => "Kalpesh"],
        ["message" => "We chose Fargo Valley for our company outing and it was probably the best decision we made. Serene lands around, tucked in nature with all amenities one could ask for.", "name" => "Parmeet Gill"],
        ["message" => "Was looking for a break from the busy life, and by far, this is one of the best properties that gives you the feeling of a destination with wonderful hospitality, good food, and fun activities.", "name" => "Dean Gansalev"],
        ["message" => "The accommodation along with the experience were exquisite. The people were very friendly and helped whenever necessary. A must-visit place!", "name" => "Jayanthi"],
        ["message" => "Excellent family get-together. Wonderful experience with scenic views. Staff was very prompt in responding. Night view was excellent and top-class.", "name" => "Mushahid Mohammed"]
    ];
?>

<div class="swiper myTextSwiper w-full mx-auto overflow-hidden mt-5">
<h2 class="fargo-heading text-center py-5" data-aos="fade-up">
            <span> </span> <span>Reviews</span>
        </h2>
    <div class="swiper-wrapper text-left ">
        <?php foreach ($testimonials as $index => $item): ?>
        <div class="swiper-slide bg-fargo/10 shadow-md !h-auto rounded-sm p-6 text-center" data-aos="fade-up"
            data-aos-delay="<?= $index * 100 ?>">
            <p class="italic text-sm md:text-[16px] leading-5"><?= htmlspecialchars($item['message']) ?></p>
            <p class="font-semibold mt-4">- <?= htmlspecialchars($item['name']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>