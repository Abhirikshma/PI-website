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
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/index.php">Home</a>
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
    let targetH2Elements = []; // Initialized as empty, populated by refreshHeaderTargets

    // --- State Variables ---
    let currentVisibleH2Element = null; // Changed from currentH1Element
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
            let currentHeadingText = ''; // Renamed from currentH1Text
            let foundHeading = null;     // Renamed from foundH1
            // Ensure stickyElement is available before getting bounding rect
            if (stickyElement) {
                const navbarBottomOffset = stickyElement.getBoundingClientRect().bottom;
                for (let i = targetH2Elements.length - 1; i >= 0; i--) { // Changed from h1Elements
                    const h2 = targetH2Elements[i]; // Changed from h1 / h1Elements[i]
                    const rect = h2.getBoundingClientRect();
                    if (rect.bottom < navbarBottomOffset) {
                        currentHeadingText = h2.textContent.trim(); // Changed from h1
                        foundHeading = h2; // Changed from h1
                        break;
                    }
                }
            }
            currentVisibleH2Element = foundHeading; // Renamed from currentH1Element

            if (pageTitleElement) {
                pageTitleElement.textContent = currentHeadingText; // Use new text variable
                if (currentVisibleH2Element) { // Use new element variable
                    pageTitleElement.classList.add('clickable-title');
                } else {
                    pageTitleElement.classList.remove('clickable-title');
                }
            }
        } else {
            // Clear title and reset H2 element if not scrolled past threshold
            if (pageTitleElement) {
                pageTitleElement.textContent = '';
                pageTitleElement.classList.remove('clickable-title');
            }
            currentVisibleH2Element = null; // Renamed from currentH1Element
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

    // --- Function to refresh H2 targets and update header title ---
    function refreshHeaderTargets() {
        // Ensure essential elements are available if called before full DOMContentLoaded init
        // (though in our flow, stickyElement and pageTitleElement will be set by the time this is called)
        if (!document.body) return; 
        targetH2Elements = document.querySelectorAll('h2');
        handleScrollActions(); // Immediately update title based on new targets and current scroll
    }

    // --- Initialization and Event Listeners ---
    document.addEventListener('DOMContentLoaded', () => {
        // Assign DOM Elements
        stickyElement = document.querySelector('header');
        pageTitleElement = document.getElementById('navbar-page-title');
        navbarCollapse = document.getElementById('navbarNavDropdown');
        navbarToggler = document.querySelector('.navbar-toggler');
        // targetH2Elements will be populated by the refreshHeaderTargets call below

        // Add click listener to the title placeholder
        if (pageTitleElement) {
            pageTitleElement.addEventListener('click', () => {
                if (currentVisibleH2Element && stickyElement) { // Changed from currentH1Element
                    const headerHeight = stickyElement.offsetHeight;
                    const elementPosition = currentVisibleH2Element.getBoundingClientRect().top + window.scrollY; // Changed from currentH1Element
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
        refreshHeaderTargets();    // Perform initial scan for H2s and update title

        // Expose the refresh function globally
        window.refreshHeaderTargets = refreshHeaderTargets;
    });

</script>

</body>
</html>
