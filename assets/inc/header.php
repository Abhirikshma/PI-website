<!DOCTYPE html>
<html lang="en">
<head>
    <title>HE Group</title>
    <link rel="icon" href="<?php echo $figures;?>/logo-pi.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Add the missing CSS links -->
    <link rel="stylesheet" href="<?php echo $headerCss;?>"> 
    <link rel="stylesheet" href="<?php echo dirname($headerCss);?>/image_grid.css"> 
</head>

<body>

<header>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-light"> <!-- Removed navbar-expand-lg -->
        <div class="container-fluid"> <!-- Use container-fluid for full width -->
            <!-- Group logos together -->
            <div class="logo-group"> 
                <a class="navbar-brand" href="https://www.physi.uni-heidelberg.de/">
                    <img src="<?php echo $figures;?>/logo-pi.png" alt="Logo" height="30"> <!-- Adjust height as needed -->
                </a>
                <?php if (isset($subPageLogo) && !empty($subPageLogo)): ?>
                    <?php 
                        // Determine the correct link target
                        $isCurrentPage = isset($subPageLink) && !empty($subPageLink) && ($subPageLink == $_SERVER['REQUEST_URI']);
                        $linkTarget = $isCurrentPage ? '#' : (isset($subPageLink) && !empty($subPageLink) ? $subPageLink : '#'); 
                        
                        // Debug the logo path (uncomment if needed)
                        // echo "<!-- Logo path: " . $subPageLogo . " -->";
                    ?>
                    <a class="navbar-brand subpage-logo" href="<?php echo $linkTarget; ?>"> 
                        <img src="<?php echo $subPageLogo; ?>" alt="Subpage Logo" height="30"> 
                    </a>
                <?php endif; ?>
            </div>
            <!-- Add placeholder for page title -->
            <span id="navbar-page-title" class="navbar-text ms-2"></span> 

            <!-- Bootstrap Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2"> <!-- Keep ms-auto and mb-2 for now -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/main_page.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="researchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="-1" aria-disabled="true"> <!-- Added tabindex and aria-disabled -->
                            Research
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="researchDropdown">
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php">Mu3e</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php">ATLAS</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php">HV-MAPS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="-1" aria-disabled="true"> <!-- Added tabindex and aria-disabled -->
                            Publications
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="publicationsDropdown">
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/mu3e_pub.php">Mu3e</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/atlas_pub.php">ATLAS</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/hvmaps_pub.php">HV-MAPS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/teaching.php">Teaching</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/people.php">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/positions.php">Theses&nbsp;Opportunities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // --- Throttle Function ---
    function throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }

    // --- Configuration ---
    const SCROLL_THRESHOLD = 30; // Pixels to scroll before shrinking navbar
    const MOBILE_MENU_SCROLL_CLOSE_THRESHOLD = 50; // Pixels to scroll before closing mobile menu
    const THROTTLE_LIMIT = 100; // Milliseconds to throttle scroll events

    // --- DOM Elements (initialized in DOMContentLoaded) ---
    let stickyElement = null;
    let pageTitleElement = null;
    let navbarCollapse = null;
    let navbarToggler = null;
    let h1Elements = [];

    // --- State Variables ---
    let currentH1Element = null;
    let isMobileMenuFullyOpen = false; // Track if mobile menu is open AND animation finished
    let menuOpenScrollStartY = null; // Track scroll position when menu fully opened

    // --- Instant Header Shrink Logic ---
    function updateHeaderShrinkState() {
        if (!stickyElement) return; // Guard against element not being ready
        const currentScrollY = window.scrollY;
        if (currentScrollY > SCROLL_THRESHOLD) {
            stickyElement.classList.add('navbar-scrolled');
        } else {
            stickyElement.classList.remove('navbar-scrolled');
        }
    }

    // --- Throttled Scroll Logic (Title Update & Mobile Menu Close) ---
    function handleScrollActions() {
        const currentScrollY = window.scrollY;
        const isScrolled = currentScrollY > SCROLL_THRESHOLD; // Still need this check for title logic

        // 1. Handle Title Display (only when scrolled)
        if (isScrolled) {
            let currentH1Text = '';
            let foundH1 = null;
            // Ensure stickyElement is available before getting bounding rect
            if (stickyElement) {
                const navbarBottomOffset = stickyElement.getBoundingClientRect().bottom;
                for (let i = h1Elements.length - 1; i >= 0; i--) {
                    const h1 = h1Elements[i];
                    const rect = h1.getBoundingClientRect();
                    if (rect.bottom < navbarBottomOffset) {
                        currentH1Text = h1.textContent.trim();
                        foundH1 = h1;
                        break;
                    }
                }
            }
            currentH1Element = foundH1; // Update global reference

            if (pageTitleElement) {
                pageTitleElement.textContent = currentH1Text;
                if (currentH1Element) {
                    pageTitleElement.classList.add('clickable-title');
                } else {
                    pageTitleElement.classList.remove('clickable-title');
                }
            }
        } else {
            // Clear title and reset H1 element if not scrolled past threshold
            if (pageTitleElement) {
                pageTitleElement.textContent = '';
                pageTitleElement.classList.remove('clickable-title');
            }
            currentH1Element = null;
        }

        // 2. Handle Mobile Menu Close on Scroll
        if (isMobileMenuFullyOpen && menuOpenScrollStartY !== null && navbarCollapse && navbarToggler) {
             // Check if the toggler is visible (i.e., we are in mobile view)
            const isTogglerVisible = getComputedStyle(navbarToggler).display !== 'none';
            if (isTogglerVisible) {
                const scrollDelta = Math.abs(currentScrollY - menuOpenScrollStartY);
                if (scrollDelta > MOBILE_MENU_SCROLL_CLOSE_THRESHOLD) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                        // Reset state immediately, hide.bs.collapse listener will also do this
                        isMobileMenuFullyOpen = false;
                        menuOpenScrollStartY = null;
                    }
                }
            } else {
                 // If toggler is not visible (desktop view), ensure state is reset
                 isMobileMenuFullyOpen = false;
                 menuOpenScrollStartY = null;
            }
        }
    }

    // --- Throttled Scroll Handler ---
    const throttledScrollHandler = throttle(handleScrollActions, THROTTLE_LIMIT);

    // --- Initialization and Event Listeners ---
    document.addEventListener('DOMContentLoaded', () => {
        // Assign DOM Elements
        stickyElement = document.querySelector('header');
        pageTitleElement = document.getElementById('navbar-page-title');
        navbarCollapse = document.getElementById('navbarNavDropdown');
        navbarToggler = document.querySelector('.navbar-toggler');
        h1Elements = document.querySelectorAll('h1');

        // Add click listener to the title placeholder
        if (pageTitleElement) {
            pageTitleElement.addEventListener('click', () => {
                if (currentH1Element && stickyElement) { // Check stickyElement exists
                    const headerHeight = stickyElement.offsetHeight;
                    const elementPosition = currentH1Element.getBoundingClientRect().top + window.scrollY;
                    const offsetPosition = elementPosition - headerHeight - 10;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }

        // Listener to remove focus from toggler when menu hides & reset state
        if (navbarCollapse && navbarToggler) {
            navbarCollapse.addEventListener('hide.bs.collapse', () => {
                navbarToggler.blur(); // Remove focus from the toggler
                isMobileMenuFullyOpen = false; // Reset state when hiding starts/finishes
                menuOpenScrollStartY = null;
            });

            // Listener to set state when menu is fully shown
            navbarCollapse.addEventListener('shown.bs.collapse', () => {
                 // Check if the toggler is visible when the menu is shown
                const isTogglerVisible = getComputedStyle(navbarToggler).display !== 'none';
                if (isTogglerVisible) {
                    isMobileMenuFullyOpen = true; // Set state only when fully expanded
                    menuOpenScrollStartY = window.scrollY; // Record scroll position
                } else {
                    // If toggler became hidden during animation (e.g., resize), reset state
                    isMobileMenuFullyOpen = false;
                    menuOpenScrollStartY = null;
                }
            });
        }

        // Click Outside Listener for Mobile Menu (Simplified)
        document.addEventListener('click', (event) => {
            if (!stickyElement || !navbarCollapse || !navbarToggler) return;

            const isClickInsideNavbar = stickyElement.contains(event.target);
            const isTogglerVisible = getComputedStyle(navbarToggler).display !== 'none';
            const isNavbarShown = navbarCollapse.classList.contains('show'); // Check if menu is currently open

            // Close if toggler is visible, menu is shown, and click is outside
            if (isTogglerVisible && isNavbarShown && !isClickInsideNavbar) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }
        });

        // Attach the INSTANT scroll listener for shrinking
        window.addEventListener('scroll', updateHeaderShrinkState);

        // Attach the THROTTLED scroll listener for title/menu actions
        window.addEventListener('scroll', throttledScrollHandler);

        // Initial calls to set state correctly on load
        updateHeaderShrinkState(); // Set initial shrink state immediately
        setTimeout(handleScrollActions, 50); // Set initial title/menu state after short delay

    });

</script>

</body>
</html>