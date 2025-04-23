<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $headerCss;?>">    
</head>

<body>

<header>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light"> <!-- Adjust classes (e.g., navbar-dark bg-dark) as needed -->
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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Added ms-auto back -->
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
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/positions.php">Theses Opportunities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Shrink header on scroll
    const stickyElement = document.querySelector('header'); 
    const scrollThreshold = 30; // Pixels to scroll before shrinking navbar
    const pageTitleElement = document.getElementById('navbar-page-title');
    let h1Elements = []; // Initialize array to hold H1 elements
    let currentH1Element = null; // Store the actual H1 element reference
    let lastScrollY = window.scrollY; // Track last scroll position
    const mobileCollapseScrollThreshold = 50; // Pixels to scroll (up or down) before collapsing mobile menu
    let scrollStartY = 0; // Track scroll position when mobile menu opens
    
    // --- Navbar Collapse Elements ---
    const navbarCollapse = document.getElementById('navbarNavDropdown');
    const navbarToggler = document.querySelector('.navbar-toggler');
    // -----------------------------

    function handleScroll() {
        const currentScrollY = window.scrollY;

        let currentH1Text = ''; 
        let foundH1 = null; // Temporarily store the found H1 element
        const navbarBottomOffset = stickyElement.getBoundingClientRect().bottom; // Use bottom edge of header

        // Find the last H1 whose bottom edge is above the bottom of the sticky header
        for (let i = h1Elements.length - 1; i >= 0; i--) {
            const h1 = h1Elements[i];
            const rect = h1.getBoundingClientRect();
            
            // Check if the bottom of the H1 is above the navbar's bottom edge
            if (rect.bottom < navbarBottomOffset) { 
                currentH1Text = h1.textContent.trim();
                foundH1 = h1; // Store the element reference
                break; // Found the last one scrolled out
            }
        }
        
        // Update the global reference
        currentH1Element = foundH1; 

        // Handle navbar shrink/expand and title display
        if (currentScrollY > scrollThreshold) {
            stickyElement.classList.add('navbar-scrolled');
            if (pageTitleElement) {
                pageTitleElement.textContent = currentH1Text; // Set the found H1 text, or empty string
                // Add/remove class to indicate clickability
                if (currentH1Element) {
                    pageTitleElement.classList.add('clickable-title');
                } else {
                    pageTitleElement.classList.remove('clickable-title');
                }
            }
        } else {
            stickyElement.classList.remove('navbar-scrolled');
            if (pageTitleElement) {
                pageTitleElement.textContent = ''; // Clear title text when not scrolled
                pageTitleElement.classList.remove('clickable-title'); // Remove clickable class
            }
            currentH1Element = null; // Reset when scrolled to top
        }

        // --- Collapse mobile navbar on significant scroll since opening ---
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
            // Check if toggler is visible (i.e., we are in mobile view)
            if (navbarToggler && getComputedStyle(navbarToggler).display !== 'none') {
                // Check if scrolled more than the threshold (up or down) since opening
                if (Math.abs(currentScrollY - scrollStartY) > mobileCollapseScrollThreshold) { 
                    var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            }
        }
        // -------------------------------------------------------

        // Update last scroll position (can still be useful)
        lastScrollY = currentScrollY;
    }

    // Wait for the DOM to be fully loaded before trying to find H1 elements
    document.addEventListener('DOMContentLoaded', () => {
        // Find all H1 elements on the page *after* DOM is ready
        h1Elements = document.querySelectorAll('h1'); 
        console.log("DOMContentLoaded - h1Elements found:", h1Elements.length); // Debug log
        
        // Initialize lastScrollY after DOM is ready
        lastScrollY = window.scrollY; 

        // Add click listener to the title placeholder
        if (pageTitleElement) {
            pageTitleElement.addEventListener('click', () => {
                if (currentH1Element) {
                    // Calculate the position to scroll to
                    const headerHeight = stickyElement.offsetHeight;
                    const elementPosition = currentH1Element.getBoundingClientRect().top + window.scrollY;
                    const offsetPosition = elementPosition - headerHeight - 10; // Subtract header height and a small margin (10px)

                    // Scroll smoothly to the calculated position
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }

        // --- Record scroll position when navbar is shown ---
        if (navbarCollapse) {
            navbarCollapse.addEventListener('show.bs.collapse', function () {
                scrollStartY = window.scrollY; // Record scroll position when opening starts
            });
        }
        // -------------------------------------------------

        // --- Close navbar on outside click ---
        document.addEventListener('click', function (event) {
            const isClickInsideNavbar = stickyElement.contains(event.target);
            
            if (navbarCollapse && navbarCollapse.classList.contains('show') && !isClickInsideNavbar) {
                 // Check if toggler is visible (i.e., we are in mobile view)
                 if (navbarToggler && getComputedStyle(navbarToggler).display !== 'none') {
                    // Use Bootstrap's Collapse instance to hide it properly
                    var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    } else {
                         // Fallback if instance not found (less ideal)
                        navbarToggler.click(); 
                    }
                 }
            }
        });
        // -----------------------------------

        // Run handleScroll once on load *after* finding H1s and setting up click listener
        handleScroll(); 
    }); 

    // Add scroll listener separately
    window.addEventListener('scroll', handleScroll);

</script>

</body>
</html>