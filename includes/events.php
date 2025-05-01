 <?php
$events = [
    ['label' => 'Birthdays', 'image' => '/assets/images/events/birthdays.png'],
    ['label' => 'Candle Light Set Up', 'image' => '/assets/images/events/candle-light-set-up.png'],
    ['label' => 'Anniversary', 'image' => '/assets/images/events/anniversary.png'],
    ['label' => 'Pool Party', 'image' => '/assets/images/events/pool-party.png'],
    ['label' => 'Sunday Brunch', 'image' => '/assets/images/events/sunday-brunch.png'],
    ['label' => 'Corporate Offsite', 'image' => '/assets/images/events/corporate-offsite.png'],
    ['label' => 'Kids Getaway', 'image' => '/assets/images/events/kids-getaway.png'],
    ['label' => 'Wedding Photoshoot', 'image' => '/assets/images/events/wedding-photoshoot.png'],
  ];
?>

<div class="text-center grid grid-cols-2 md:grid-cols-4 gap-10">
     <?php foreach ($events as $index => $event): ?>
     <div class="relative" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
         <a href="<?= htmlspecialchars($event['image']) ?>" class="glightbox" data-gallery="events"
             data-title="<?= htmlspecialchars($event['label']) ?>">
             <img src="<?= htmlspecialchars($event['image']) ?>" alt="<?= htmlspecialchars($event['label']) ?>"
                 class="w-full h-[200px] md:h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110">
         </a>
         <div class="absolute bottom-[-10] left-0 py-2 w-full  bg-opacity-50 rounded-lg">
             <span class=" font-semibold text-sm md:text-lg uppercase">
                 <?= htmlspecialchars($event['label']) ?>
             </span>
         </div>
     </div>
     <?php endforeach; ?>
 </div>