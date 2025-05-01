<?php
require_once 'includes/gallery.php';


$images = [
    [
        'src' => 'assets/images/treetrop/0A08643A-1DE5-4FDE-929D-0DBFC1A2DE1E.JPG',
        'alt' => 'Treetrop Image 1',
       
    ],
    [
        'src' => 'assets/images/treetrop/4A92192D-C8C8-49A8-9491-7FCD3E42EE8D.JPG',
        'alt' => 'Treetrop Image 2',
       
    ],
    [
        'src' => 'assets/images/treetrop/5CB538D9-5AE1-4618-8605-7B1150953270.JPG',
        'alt' => 'Treetrop Image 3',
       
    ],
    [
        'src' => 'assets/images/treetrop/5F195B60-442A-4B9D-A43A-0B914754D9AE.JPG',
        'alt' => 'Treetrop Image 4',
       
    ],
    [
        'src' => 'assets/images/treetrop/54AB9420-14C4-4550-9E9A-24B0A9902D21.JPG',
        'alt' => 'Treetrop Image 5',
        
    ],
    [
        'src' => 'assets/images/treetrop/9460E6EE-4E1D-4B34-A570-246A04751091.JPG',
        'alt' => 'Treetrop Image 6',
       
    ],
    [
        'src' => 'assets/images/treetrop/20610EC8-358C-4BAD-8D0B-0D2621EF7A8B.JPG',
        'alt' => 'Treetrop Image 7',
       
    ],
    [
        'src' => 'assets/images/treetrop/51629744-EAE8-4D70-98A2-F4A65D0C52E3.JPG',
        'alt' => 'Treetrop Image 8',
        
    ],
    [
        'src' => 'assets/images/treetrop/79091412-1F4A-42FF-AFB4-DC085BA6C289.JPG',
        'alt' => 'Treetrop Image 9',
        
    ],
    [
        'src' => 'assets/images/treetrop/B9672EAF-C4F6-4E53-8EF7-B63C4970C8B6.JPG',
        'alt' => 'Treetrop Image 10',
      
    ],
    [
        'src' => 'assets/images/treetrop/BA37C044-B1B2-42A5-94F7-AE96DC2E5BFC.JPG',
        'alt' => 'Treetrop Image 11',
       
    ],
    [
        'src' => 'assets/images/treetrop/CECD2F82-BB74-43A0-A97F-A321BC30E33D.JPG',
        'alt' => 'Treetrop Image 12',
       
    ],
    [
        'src' => 'assets/images/treetrop/D2335443-7705-47F6-8204-9191D4C471BC.JPG',
        'alt' => 'Treetrop Image 13',
       
    ],
    [
        'src' => 'assets/images/treetrop/F072FA7A-E634-49C0-B813-55429408D970.JPG',
        'alt' => 'Treetrop Image 14',
        
    ],
   
    
];

// Render the gallery
renderGallery($images,"Treetrop Gallary");
?>