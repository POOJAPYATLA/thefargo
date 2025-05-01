<?php
require_once 'includes/gallery.php';


$images = [
    [
        'src' => 'assets/images/porch/1.png',
        'alt' => 'City Image 1',
       
    ],
    [
        'src' => 'assets/images/porch/DSC07631-2.jpg',
        'alt' => 'City Image 2',
      
    ],
    [
        'src' => 'assets/images/porch/DSC07692-2.jpg',
        'alt' => 'City Image 3',
       
    ],
    [
        'src' => 'assets/images/porch/DSC07711-3.jpg',
        'alt' => 'City Image 4',
       
    ],
    [
        'src' => 'assets/images/porch/DSC07739.jpg',
        'alt' => 'City Image 5',
        
    ],
    [
        'src' => 'assets/images/porch/DSC07804-3.jpg',
        'alt' => 'City Image 6',
      
    ],
    [
        'src' => 'assets/images/porch/DSC07817.jpg',
        'alt' => 'City Image 7',
      
    ],
    [
        'src' => 'assets/images/porch/DSC07844-3.jpg',
        'alt' => 'City Image 8',
       
    ],
    [
        'src' => 'assets/images/porch/DSC07989-2.jpg',
        'alt' => 'City Image 9',
        
    ],
    [
        'src' => 'assets/images/porch/DSC08015-2.jpg',
        'alt' => 'City Image 10',
      
    ],
    [
        'src' => 'assets/images/porch/DSC08021.jpg',
        'alt' => 'City Image 11',
    
    ],
    [
        'src' => 'assets/images/porch/DSC08033-2.jpg',
        'alt' => 'City Image 12',
       
    ],
    [
        'src' => 'assets/images/porch/DSC08039.jpg',
        'alt' => 'City Image 13',
        
    ],
    [
        'src' => 'assets/images/porch/DSC08134.jpg',
        'alt' => 'City Image 14',
        
    ],
   
   
];

// Render the gallery
renderGallery($images,"Porch Gallary");
?>