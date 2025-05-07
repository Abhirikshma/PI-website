document.addEventListener('DOMContentLoaded', function() {
    // Apply to both mobile and desktop narrow views for better UX
    if (window.innerWidth <= 992) {
        // Get all research cards
        const cards = document.querySelectorAll('.col-md-4');
        
        // Create options for the intersection observer with relaxed thresholds
        const options = {
            root: null, // Use the viewport
            rootMargin: '-20% 0px', // More generous margin
            threshold: [0.3, 0.4, 0.5] // Multiple thresholds for smoother transitions
        };
        
        // Create an observer with debouncing to avoid rapid transitions
        let timeout;
        const observer = new IntersectionObserver((entries) => {
            // Clear any pending timeouts
            clearTimeout(timeout);
            
            // Find the entry with highest intersection ratio
            let maxEntry = null;
            let maxRatio = 0;
            
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.intersectionRatio > maxRatio) {
                    maxEntry = entry;
                    maxRatio = entry.intersectionRatio;
                }
            });
            
            // If we found a visible entry, update after a short delay
            if (maxEntry) {
                timeout = setTimeout(() => {
                    cards.forEach(card => {
                        if (card === maxEntry.target) {
                            card.classList.add('card-expanded');
                        } else {
                            card.classList.remove('card-expanded');
                        }
                    });
                }, 200); // Small delay to prevent rapid toggling
            }
        }, options);
        
        // Start observing each card
        cards.forEach(card => observer.observe(card));
        
        // Make click behavior more generous and reliable
        cards.forEach(card => {
            card.addEventListener('click', function(e) {
                // Prevent link navigation if clicking on the card itself
                if (e.target.closest('.card-link') && !e.target.closest('.card-title')) {
                    // Only prevent default if clicking outside title area
                    e.preventDefault();
                }
                
                // Always expand this card, regardless of current state
                cards.forEach(c => {
                    if (c === this) {
                        c.classList.add('card-expanded');
                        
                        // Smooth scroll with more generous positioning
                        c.scrollIntoView({
                            behavior: 'smooth', 
                            block: 'center',
                            inline: 'nearest'
                        });
                    } else {
                        c.classList.remove('card-expanded');
                    }
                });
            });
        });
        
        // Ensure at least one card is expanded initially
        // (preferring one that's in view)
        let expandedOne = false;
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            const isVisible = rect.top >= 0 && 
                              rect.bottom <= window.innerHeight &&
                              rect.height > 0;
            
            if (isVisible && !expandedOne) {
                card.classList.add('card-expanded');
                expandedOne = true;
            }
        });
        
        // If none were in view, expand the first one
        if (!expandedOne && cards.length > 0) {
            cards[0].classList.add('card-expanded');
        }
    }
});
