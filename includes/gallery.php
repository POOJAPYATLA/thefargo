<?php
function renderGallery($images, $title = "Image Gallery") {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    /* Custom CSS for masonry effect */
    .masonry-grid {
        column-count: 1;
        column-gap: 1rem;
    }

    @media (min-width: 640px) {
        .masonry-grid {
            column-count: 2;
        }
    }

    @media (min-width: 768px) {
        .masonry-grid {
            column-count: 2;
        }
    }

    @media (min-width: 1024px) {
        .masonry-grid {
            column-count: 3;
        }
    }

    .masonry-item {
        break-inside: avoid;
        margin-bottom: 1rem;
    }
    </style>
</head>

<body class="bg-gray-100">


    <!-- Gallery Section -->
    
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

    <!-- Close Icon -->
    <button class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 focus:outline-none" onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

 <!-- Gallery Title -->
 <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center"><?php echo htmlspecialchars($title); ?></h1>

        <div class="masonry-grid">
            <?php foreach ($images as $index => $image): ?>
            <!-- Image Card -->
            <div class="masonry-item bg-white rounded-lg shadow overflow-hidden">


                <a href="<?php echo htmlspecialchars($image['src']); ?>" class="glightbox" data-gallery="events">
                    <img src="<?php echo htmlspecialchars($image['src']); ?>"
                        alt="<?php echo htmlspecialchars($image['alt']); ?>"
                        class="w-full h-[200px] md:h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110">
                </a>

            </div>
            <?php endforeach; ?>
        </div>
    </main>
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
    </script>
</body>

</html>
<?php
}
?>