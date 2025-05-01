<?php
require_once 'includes/gallery.php';


$images = [
    [
        'src' => 'assets/images/deck/DSC08243-2.jpg',
        'alt' => ' Image 1',
      
    ],
    [
        'src' => 'assets/images/deck/DSC08293-2.jpg',
        'alt' => ' Image 2',
        
    ],
    [
        'src' => 'assets/images/deck/DSC08353-3.jpg',
        'alt' => ' Image 3',
       
    ],
    [
        'src' => 'assets/images/deck/DSC08419.jpg',
        'alt' => ' Image 4',
       
    ],
    [
        'src' => 'assets/images/deck/DSC08436-3.jpg',
        'alt' => ' Image 5',
        
    ],
    [
        'src' => 'assets/images/deck/DSC08528-2.jpg',
        'alt' => ' Image 6',
       
    ],
    [
        'src' => 'assets/images/deck/DSC08539-3.jpg',
        'alt' => ' Image 7',
      
    ],
    [
        'src' => 'assets/images/deck/DSC08611-2.jpg',
        'alt' => ' Image 8',
        
    ],
    
];

// Render the gallery
renderGallery($images,"Deck Gallary");
?>