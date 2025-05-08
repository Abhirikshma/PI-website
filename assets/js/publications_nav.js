/**
 * Publications Navigation System
 * Creates a responsive navigation bar for publication sections
 */

// Prevent automatic scrolling when page loads with a hash
if (window.location.hash) {
    // Force scroll to top
    window.scrollTo(0, 0);
    
    // Remove the hash without causing a jump
    history.replaceState({}, document.title, window.location.pathname);
}

function initializePublicationNavigation() {
    const sections = document.querySelectorAll('.publication-section');
    const navContainer = document.getElementById('pub-nav-container');
    
    if (!navContainer) return;

    // Clear previous nav if any, before rebuilding
    navContainer.innerHTML = ''; 

    if (!sections.length) {
        return;
    }
    
    const navWrapper = document.createElement('div');
    navWrapper.className = 'pub-nav-wrapper';
    
    const navLinks = document.createElement('div');
    navLinks.className = 'pub-nav-links';
    
    const toggleButton = document.createElement('button');
    toggleButton.className = 'pub-nav-toggle';
    toggleButton.type = 'button';
    toggleButton.setAttribute('aria-expanded', 'false');
    toggleButton.innerHTML = '<i class="fas fa-list"></i>'; // Icon from original code
    
    function closeDropdown() {
        navLinks.classList.remove('mobile-expanded');
        toggleButton.setAttribute('aria-expanded', 'false');
        
        // Hide after animation completes (assuming 250ms animation from original CSS)
        setTimeout(() => {
            if (!navLinks.classList.contains('mobile-expanded')) {
                // Only hide if it's still closed, relevant for mobile
                if (window.innerWidth <= 870) { 
                    navLinks.style.display = 'none';
                }
            }
        }, 250);
    }
    
    sections.forEach((section, index) => {
        const id = section.getAttribute('id');
        const titleElement = section.querySelector('h2');
        
        if (titleElement && id) {
            const title = titleElement.textContent;
            const link = document.createElement('a');
            link.href = '#' + id;
            link.textContent = title;
            link.setAttribute('role', 'menuitem');
            
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--header-height')) || 100; // Fallback
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    // history.pushState(null, null, this.getAttribute('href')); // Optional: update URL hash
                    closeDropdown();
                }
            });
            
            navLinks.appendChild(link);
            
            if (index < sections.length - 1) {
                const separator = document.createElement('span');
                separator.className = 'pub-nav-separator';
                separator.innerHTML = '&bull;'; // Separator from original code
                navLinks.appendChild(separator);
            }
        }
    });
    
    toggleButton.addEventListener('click', function(e) {
        e.stopPropagation();
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        
        if (isExpanded) {
            closeDropdown();
        } else {
            navLinks.style.display = 'flex'; // Make it visible before adding class for animation
            setTimeout(() => navLinks.classList.add('mobile-expanded'), 10); // Add class for animation
            this.setAttribute('aria-expanded', 'true');
        }
    });
    
    document.addEventListener('click', function(e) {
        if (navLinks.classList.contains('mobile-expanded') && 
            !navLinks.contains(e.target) && 
            !toggleButton.contains(e.target)) { // Check toggleButton too
            closeDropdown();
        }
    });
    
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (navLinks.classList.contains('mobile-expanded')) {
            // Debounce or throttle this if it causes performance issues
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(closeDropdown, 100); 
        }
    });
    
    navWrapper.appendChild(navLinks);
    navContainer.appendChild(navWrapper);
    navContainer.appendChild(toggleButton); // Toggle button appended to navContainer as per original
    
    function adjustLayout() {
        const viewportWidth = window.innerWidth;
        const isNarrow = viewportWidth <= 870;

        // Always ensure dropdown is closed when layout changes
        if (navLinks.classList.contains('mobile-expanded')) {
            closeDropdown();
        }
        
        // Important: Set initial display state based on viewport
        if (isNarrow) {
            if (navWrapper.contains(navLinks)) {
                // This logic might be too complex if navLinks is always child of navWrapper
                // For simplicity, we assume navLinks is child of navWrapper, and toggle controls its visibility
            }
            navWrapper.style.display = 'block'; // Wrapper should be block to allow absolute positioning of links
            navLinks.style.display = 'none'; // Links hidden by default on mobile
            toggleButton.style.display = 'block';
        } else { // Desktop
            navWrapper.style.display = 'flex';
            navLinks.style.display = 'flex'; // Links visible by default on desktop
            toggleButton.style.display = 'none';
            navLinks.classList.remove('mobile-expanded'); // Ensure no mobile styles apply
            toggleButton.setAttribute('aria-expanded', 'false');
        }
    }
    
    adjustLayout();
    
    let resizeTimer;
    const handleResize = () => {
        // During resize, ensure the menu is reset correctly
        navLinks.classList.remove('mobile-expanded');
        toggleButton.setAttribute('aria-expanded', 'false');
        // Temporarily hide to prevent flash, then readjust
        navLinks.style.display = 'none'; 


        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            adjustLayout();
        }, 150); // Slightly longer timeout for resize
    };

    window.addEventListener('resize', handleResize);
    
    // The ResizeObserver for sub-body might not be strictly necessary
    // if the main window resize handles layout sufficiently.
    // Kept for closer adherence to original if sub-body changes can occur independently.
    if (typeof ResizeObserver !== 'undefined') {
        const subBodyElement = document.querySelector('.sub-body');
        if (subBodyElement) {
            const subBodyResizeObserver = new ResizeObserver(() => {
                 // We can call handleResize or adjustLayout directly
                 // handleResize is more robust as it includes the timer logic
                handleResize();
            });
            subBodyResizeObserver.observe(subBodyElement);
        }
    }
}

// Expose the initialization function to be called by publications_loader.js
window.initializePublicationNavigation = initializePublicationNavigation;

// Fallback call on DOMContentLoaded if publications_loader.js doesn't handle it
document.addEventListener('DOMContentLoaded', function() {
    const dynamicContent = document.getElementById('dynamic-publications-content');
    // Check if the loader might not run (e.g., not a page with dynamic publications)
    // or if the nav container exists but loader hasn't populated sections yet.
    // This fallback is tricky. The loader should ideally always call it.
    // For now, let's assume the loader will call it.
    // If you have pages with static .publication-section elements and no loader,
    // then a direct call here would be needed.
    // Example: if (document.getElementById('pub-nav-container') && (!dynamicContent || dynamicContent.children.length <= 1)) {
    //     initializePublicationNavigation();
    // }
});
