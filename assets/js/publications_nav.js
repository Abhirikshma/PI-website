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

document.addEventListener('DOMContentLoaded', function() {
    // Get all publication sections and container
    const sections = document.querySelectorAll('.publication-section');
    const navContainer = document.getElementById('pub-nav-container');
    
    if (!navContainer || !sections.length) return;
    
    // Create navigation elements
    const navWrapper = document.createElement('div');
    navWrapper.className = 'pub-nav-wrapper';
    
    const navLinks = document.createElement('div');
    navLinks.className = 'pub-nav-links';
    
    // Create toggle button
    const toggleButton = document.createElement('button');
    toggleButton.className = 'pub-nav-toggle';
    toggleButton.type = 'button';
    toggleButton.setAttribute('aria-expanded', 'false');
    toggleButton.innerHTML = '<i class="fas fa-list"></i>';
    
    // Function to close dropdown menu
    function closeDropdown() {
        navLinks.classList.remove('mobile-expanded');
        toggleButton.setAttribute('aria-expanded', 'false');
        
        // Hide after animation completes
        setTimeout(() => {
            if (!navLinks.classList.contains('mobile-expanded')) {
                navLinks.style.display = 'none';
            }
        }, 250);
    }
    
    // Process each section and create navigation links
    sections.forEach((section, index) => {
        const id = section.getAttribute('id');
        const title = section.querySelector('h2').textContent; // Changed from h1 to h2
        
        // Create link
        const link = document.createElement('a');
        link.href = '#' + id;
        link.textContent = title;
        
        // Add smooth scrolling
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = 100;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                history.pushState(null, null, this.getAttribute('href'));
                closeDropdown();
            }
        });
        
        // Add to container
        navLinks.appendChild(link);
        
        // Add separator if not the last item
        if (index < sections.length - 1) {
            const separator = document.createElement('span');
            separator.className = 'pub-nav-separator';
            separator.innerHTML = '&bull;';
            navLinks.appendChild(separator);
        }
    });
    
    // Toggle button click handler
    toggleButton.addEventListener('click', function(e) {
        e.stopPropagation();
        
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        
        if (isExpanded) {
            closeDropdown();
        } else {
            navLinks.style.display = 'flex';
            setTimeout(() => navLinks.classList.add('mobile-expanded'), 10);
            this.setAttribute('aria-expanded', 'true');
        }
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (navLinks.classList.contains('mobile-expanded') && 
            !navLinks.contains(e.target) && 
            e.target !== toggleButton) {
            closeDropdown();
        }
    });
    
    // Close dropdown when scrolling
    window.addEventListener('scroll', function() {
        if (navLinks.classList.contains('mobile-expanded')) {
            closeDropdown();
        }
    });
    
    // Append all elements
    navWrapper.appendChild(navLinks);
    navContainer.appendChild(navWrapper);
    navContainer.appendChild(toggleButton);
    
    // Handle responsive layout
    function adjustLayout() {
        // Check viewport width directly
        const viewportWidth = window.innerWidth;
        const isNarrow = viewportWidth <= 870; // Match the CSS breakpoint
        
        // Always ensure dropdown is closed when layout changes
        navLinks.classList.remove('mobile-expanded');
        toggleButton.setAttribute('aria-expanded', 'false');
        
        // Important: Always force display none first to prevent flashing during transition
        navLinks.style.display = 'none';
        
        if (isNarrow) {
            // Narrow layout: Move links out of wrapper
            if (navWrapper.contains(navLinks)) {
                navWrapper.removeChild(navLinks);
                navContainer.appendChild(navLinks);
            }
            navWrapper.style.display = 'none';
            toggleButton.style.display = 'block'; // Show toggle in mobile view
            
            // Keep navLinks hidden in mobile until toggle is clicked
        } else {
            // Wide layout: Move links back to wrapper
            if (navContainer.contains(navLinks) && !navWrapper.contains(navLinks)) {
                navContainer.removeChild(navLinks);
                navWrapper.appendChild(navLinks);
            }
            // In desktop, set display after a short delay to ensure smooth transition
            setTimeout(() => {
                if (window.innerWidth > 870) { // Double-check we're still in desktop mode
                    navLinks.style.display = 'flex'; 
                    navWrapper.style.display = 'flex';
                }
            }, 50);
            toggleButton.style.display = 'none'; // Hide toggle in desktop view
        }
    }
    
    // Set initial layout
    adjustLayout();
    
    // Handle resize and prevent menu flash during resize
    let resizeTimer;
    const handleResize = () => {
        // During resize, ensure the menu is hidden to prevent flashing
        navLinks.style.display = 'none';
        navLinks.classList.remove('mobile-expanded');
        
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            adjustLayout();
        }, 100);
    };

    window.addEventListener('resize', handleResize);
    
    // Replace the previous ResizeObserver with our improved handler
    if (typeof ResizeObserver !== 'undefined') {
        const resizeObserver = new ResizeObserver(() => {
            handleResize();
        });
        const subBodyElement = document.querySelector('.sub-body');
        if (subBodyElement) {
            resizeObserver.observe(subBodyElement);
        }
    }
});
