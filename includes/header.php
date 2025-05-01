<div id="preloader"
    style="position: fixed; top:0; left:0; width: 100%; height: 100% ; z-index: 9999; background: #000; display: flex; justify-content: center; align-items: center;">
    <img src="/assets/images/fargo_ani.gif" alt="Fargo animated logo" class="w-14 max-w-14 h-auto" />
</div>

<?php
$navigation = [
    'main' => [
        ['label' => 'The Fargo', 'href' => '/header.php'],
        [
            'label' => 'Getaways',
            'has_submenu' => true,
            'submenu' => [
                [
                    'title' => 'Deck',
                    'desc' => 'Ditch the ground and elevate your staycation at Fargo Deck.',
                    'href' => '/deck.php'
                ],
                [
                    'title' => 'Porch',
                    'desc' => "Fargo Porch isn't just a stay, it's an experience carved from the very rock of adventure.",
                    'href' => '/porch.php'
                ],
                [
                    'title' => 'Treetrop',
                    'desc' => 'Forget the ground and ascend to a world of leafy luxury.',
                    'href' => '/treetrop.php'
                ],
                [
                    'title' => 'Valley',
                    'desc' => 'Escape to the Edge: Fargo Valley, Where Rocks Meet Stars.',
                    'href' => '/valley.php'
                ],
                [
                    'title' => 'Brick House',
                    'desc' => 'Escape to the Edge: Fargo Valley, Where Rocks Meet Stars.',
                    'href' => '/brick-house.php'
                ],
            ]
        ],
        ['label' => 'Glimpse of Events', 'href' => '/glimps-events.php'],
        ['label' => 'Contact Us', 'href' => '/contact-us.php'],
    ]
];
?>
<header id="header"
    class="header-container <?= $isScroll ? 'scroll-header text-white' : 'bg-white/70 backdrop-blur-lg shadow-lg' ?>">
    <nav class="navbar" aria-label="Main Navigation">
        <button class="text-2xl toggle-menu" aria-label="Toggle menu" aria-expanded="false" aria-controls="side-menu">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/index.php" aria-label="Fargo Home">
            <img src="/assets/images/<?= $isScroll ? 'fargo_logo_white.png': 'fargo_logo_black.png' ?>" alt="Fargo logo"
                class="header-logo" />
        </a>
        <a href="tel:+919959112558" class="book-btn">
            Reserve
        </a>
    </nav>
</header>
<aside id="side-menu" class="side-menu-container -translate-x-full overflow-auto" aria-hidden="true" role="dialog"
    aria-label="Mobile Menu">
    <div class="side-menu-list-container">
        <div class="side-menu-logo-container">
            <img src="/assets/images/fargo_ani.gif" alt="Fargo animated logo" class="w-14 max-w-14 h-auto" />
            <button class="toggle-menu menu-close-btn" aria-label="Close menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <ul class="mt-8 space-y-4 main-menu transition-all duration-300" role="menu">
            <?php 
          foreach ($navigation['main'] as $index => $item):  
            $duration = ($index + 1) * 0.5;  
        ?>
            <?php if (!empty($item['has_submenu'])): ?>
            <li role="none">
                <button class="toggle-sub-menu uppercase text-[20px] flex items-center" aria-haspopup="true"
                    aria-expanded="false" aria-controls="submenu">
                    <span><?= htmlspecialchars($item['label']) ?></span>
                    <i class="fa-solid fa-chevron-right ml-2"></i>
                </button>

                <ul class="sub-menu-container hidden" role="menu">
                    <li role="none">
                        <button class="toggle-sub-menu">
                            <i class="fa-solid fa-chevron-left mr-2"></i> Back to Home
                        </button>
                    </li>

                    <?php foreach ($item['submenu'] as $index => $sub): ?>
                    <?php
                        // Set the duration for the submenu items based on the index, for example, increase by 0.5s per item
                        $submenu_duration = ($index + 1) * 0.25; // Increase duration for each submenu item
                    ?>
                    <li class="sub-menu-item" role="none">
                        <a href="<?= htmlspecialchars($sub['href']) ?>" class="block" role="menuitem">
                            <h2 class="sub-menu-item-heading">
                                <?= htmlspecialchars($sub['title']) ?>
                            </h2>
                            <p class="text-[12px] lowercase"><?= htmlspecialchars($sub['desc']) ?></p>
                        </a>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </li>
            <?php else: ?>
            <li role="none" class="wow animate__fadeInUp hidden-element" data-wow-duration="<?= $duration ?>s">
                <a href="<?= htmlspecialchars($item['href']) ?>" class="menu-items" role="menuitem">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>