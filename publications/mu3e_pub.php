<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
$subPageLogo = $mu3eLogo; // Use centralized mu3e logo
$subPageLink = $mu3eMainpageURL; // Link to mu3e mainpage
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mu3e Publications</title>
        <!-- Include style file -->
        <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">
        <!-- to enable mathjax (LaTeX code rendering) -->
        <script type="text/javascript" async
          src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    </head>
    <body lang="en-US" dir="ltr" style="text-align:left;">
        <div class="sub-body">
            <!-- Simple Publication Navigation -->
            <div id="pub-nav-container" class="pub-nav-container">
                <!-- Navigation will be auto-populated here -->
            </div>

            <div class="publications-container">
                <!-- JOURNAL PUBLICATIONS -->
                <div id="journal-publications" class="publication-section">
                    <h1>Journal Publications</h1>
                    <h3>(with significant contributions from members of our group)</h3>
                
                    <div class="publication-year">
                        <h2>2021</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">Technical design of the phase I Mu3e experiment</p>
                            The Mu3e Collaboration<br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2021.165679">Nucl.Instrum.Meth.A 1014 (2021) 165679</a>
                                <a href="https://arxiv.org/abs/2009.11690">arXiv:2009.11690 [physics.ins-det]</a>
                            </div>
                        </li>

                        <li>
                            <p class="title">The Mu3e Data Acquisition</p>
                            Augustin H. and others, for the Mu3e Collaboration<br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1109/TNS.2021.3084060">IEEE Trans. Nucl. Sci. 68 (2021) 1833-1840</a>
                            </div>
                        </li>
                    </ul>
                
                    <div class="publication-year">
                        <h2>2020</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">The MuPix sensor for the Mu3e experiment</p>
                            Augustin, H. and Peric, I. and Schoening, A. and Weber, A.<br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2020.164441">Nucl.Instrum.Meth.A 979 (2020) 164441</a>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="publication-year">
                        <h2>2019</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">MuPix8 &#8722 Large area monolithic HVCMOS pixel detector for the Mu3e experiment</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2018.09.095">Nucl.Instrum.Meth.A 936 (2019) 681-683</a>
                            </div>
                        </li>

                        <li>
                            <p class="title">Performance of the large scale HV-CMOS pixel sensor MuPix8</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1088/1748-0221/14/10/C10011">JINST 14 (2019) C10011</a>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="publication-year">
                        <h2>2018</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">Irradiation study of a fully monolithic HV-CMOS pixel sensor design in AMS 180 nm</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2018.07.044">Nucl.Instrum.Meth.A 905 (2018) 53-60</a>
                            </div>
                        </li>

                        <li>
                            <p class="title">Efficiency and timing performance of the MuPix7 high-voltage monolithic active pixel sensor</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2018.06.049">Nucl.Instrum.Meth.A 902 (2018) 158-163</a>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="publication-year">
                        <h2>2017</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">The MuPix System-on-Chip for the Mu3e Experiment</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1016/j.nima.2016.06.095">Nucl.Instrum.Meth.A 845 (2017) 194-198</a>
                            </div>
                        </li>

                        <li>
                            <p class="title">The MuPix Telescope: A Thin, high Rate Tracking Telescope</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="http://dx.doi.org/10.1088/1748-0221/12/01/C01087">JINST 12 (2017) C01087</a>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="publication-year">
                        <h2>2016</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">MuPix7 − A fast monolithic HV-CMOS pixel chip for Mu3e</p>
                            Augustin, H. and others <br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1088/1748-0221/11/11/C11029">JINST 11 (2016) C11029</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- PREPRINTS, PROCEEDINGS, PUB NOTES -->
                <div id="preprints-proceedings-pubnotes" class="publication-section">
                    <h1>Pre-prints, Proceedings and Pub Notes</h1>
                
                    <div class="publication-year">
                        <h2>2020</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">MuPix10: First Results from the Final Design</p>
                            Augustin H. and others for the Mu3e Collaboration<br/>
                            <div class="publication-links">
                                <a href="https://journals.jps.jp/doi/abs/10.7566/JPSCP.34.010012">JPS Conf. Proc. 34, 010012 (2021)</a>
                            </div>
                            (Proceedings of the 29th International Workshop on Vertex Detectors (VERTEX2020))
                        </li>
                    </ul>
                </div>
                
                <!-- CONFERENCE AND INVITED TALKS -->
                <div id="conference-invited-talks" class="publication-section">
                    <h1>Conference and Invited Talks</h1>
                
                    <div class="publication-year">
                        <h2>2024</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">A graph neural network based cosmic muon trigger for the Mu3e experiment</p>
                            D. Karres</br>
                            <div class="publication-links">
                                <a href="https://indico.cern.ch/event/1338689/contributions/6015413/attachments/2952865/5191195/chep2024_karres.pdf">Slides</a>
                            </div>
                            (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                        </li>
                    </ul>
                </div>
                
                <!-- POSTERS -->
                <div id="posters" class="publication-section">
                    <h1>Posters</h1>
                
                    <div class="publication-year">
                        <h2>2024</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">FPGA implementation of the General Triplet Track Fit</p>
                            K. Tastepe</br>
                            <div class="publication-links">
                                <a href="https://indico.cern.ch/event/1338689/contributions/6015445/attachments/2950576/5186496/Heidelberg_PI-FPGA_Implementation_of_the_GTTF_POSTER.pdf">Poster</a>
                            </div>
                            (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Minimal publication navigation script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all h1 elements within publication sections
                const sections = document.querySelectorAll('.publication-section');
                const navContainer = document.getElementById('pub-nav-container');
                
                if (navContainer && sections.length > 0) {
                    // Create wrapper for desktop navigation
                    const navWrapper = document.createElement('div');
                    navWrapper.className = 'pub-nav-wrapper';
                    
                    // Create navigation container
                    const navLinks = document.createElement('div');
                    navLinks.className = 'pub-nav-links';
                    
                    // Add links for each section
                    sections.forEach((section, index) => {
                        const id = section.getAttribute('id');
                        const title = section.querySelector('h1').textContent;
                        
                        // Create link
                        const link = document.createElement('a');
                        link.href = '#' + id;
                        link.textContent = title;
                        
                        // Add to container
                        navLinks.appendChild(link);
                        
                        // Add separator after all links except the last one
                        if (index < sections.length - 1) {
                            const separator = document.createElement('span');
                            separator.className = 'pub-nav-separator';
                            separator.innerHTML = '&bull;'; 
                            navLinks.appendChild(separator);
                        }
                        
                        // Add click handler for smooth scrolling
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            const target = document.querySelector(this.getAttribute('href'));
                            if (target) {
                                // Calculate offset from top of window
                                const offset = 100;
                                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                                
                                window.scrollTo({
                                    top: targetPosition,
                                    behavior: 'smooth'
                                });
                                
                                // Update URL without affecting scroll position
                                history.pushState(null, null, this.getAttribute('href'));
                                
                                // Close mobile dropdown if open
                                closeDropdown();
                            }
                        });
                    });
                    
                    // Add mobile toggle button directly to the container
                    const toggleButton = document.createElement('button');
                    toggleButton.className = 'pub-nav-toggle';
                    toggleButton.type = 'button';
                    toggleButton.setAttribute('aria-expanded', 'false');
                    toggleButton.innerHTML = '<i class="fas fa-list"></i>';
                    
                    // Function to close the dropdown
                    function closeDropdown() {
                        if (navLinks.classList.contains('mobile-expanded')) {
                            navLinks.classList.remove('mobile-expanded');
                            toggleButton.setAttribute('aria-expanded', 'false');
                        }
                    }
                    
                    // Add click handler for toggle with animation
                    toggleButton.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        const isExpanded = this.getAttribute('aria-expanded') === 'true';
                        
                        if (!isExpanded) {
                            // Opening the dropdown
                            navLinks.style.display = 'flex';
                            setTimeout(() => {
                                navLinks.classList.add('mobile-expanded');
                            }, 10);
                            this.setAttribute('aria-expanded', 'true');
                        } else {
                            // Closing the dropdown
                            navLinks.classList.remove('mobile-expanded');
                            
                            // Allow animation to complete before hiding
                            setTimeout(() => {
                                if (!navLinks.classList.contains('mobile-expanded')) {
                                    navLinks.style.display = 'none';
                                }
                            }, 250); 
                            
                            this.setAttribute('aria-expanded', 'false');
                        }
                    });
                    
                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!navLinks.contains(e.target) && e.target !== toggleButton) {
                            if (navLinks.classList.contains('mobile-expanded')) {
                                navLinks.classList.remove('mobile-expanded');
                                
                                setTimeout(() => {
                                    if (!navLinks.classList.contains('mobile-expanded')) {
                                        navLinks.style.display = 'none';
                                    }
                                }, 250);
                                
                                toggleButton.setAttribute('aria-expanded', 'false');
                            }
                        }
                    });

                    // Throttled scroll handler for closing dropdown
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

                    const handleScroll = throttle(function() {
                        if (navLinks.classList.contains('mobile-expanded')) {
                            navLinks.classList.remove('mobile-expanded');
                            
                            setTimeout(() => {
                                if (!navLinks.classList.contains('mobile-expanded')) {
                                    navLinks.style.display = 'none';
                                }
                            }, 250);
                            
                            toggleButton.setAttribute('aria-expanded', 'false');
                        }
                    }, 100);

                    window.addEventListener('scroll', handleScroll);
                    
                    // Prevent initial auto-scrolling
                    if (window.location.hash) {
                        const hashTarget = document.querySelector(window.location.hash);
                        if (hashTarget) {
                            window.scrollTo(0, 0);
                        }
                    }
                    
                    // Append elements to appropriate containers
                    navWrapper.appendChild(navLinks); // Always add links to wrapper initially
                    navContainer.appendChild(navWrapper); // Add wrapper to container
                    navContainer.appendChild(toggleButton); // Add button directly to container
                    
                    // For mobile view, move navLinks to container level
                    function adjustForMobile() {
                        const isMobileView = window.innerWidth <= 767;
                        
                        if (isMobileView) {
                            // For mobile: Move links out of wrapper to container
                            if (navWrapper.contains(navLinks)) {
                                navWrapper.removeChild(navLinks);
                                navContainer.appendChild(navLinks);
                            }
                            navWrapper.style.display = 'none'; // Hide wrapper
                        } else {
                            // For desktop: Move links back to wrapper and show wrapper
                            if (navContainer.contains(navLinks) && !navWrapper.contains(navLinks)) {
                                navContainer.removeChild(navLinks);
                                navWrapper.appendChild(navLinks);
                            }
                            navWrapper.style.display = 'flex'; // Show wrapper again
                            
                            // Reset any mobile-specific styles when returning to desktop
                            navLinks.style.display = 'flex';
                            navLinks.classList.remove('mobile-expanded');
                            navLinks.style.transform = 'none';
                            navLinks.style.opacity = '1';
                        }
                    }
                    
                    // Initial adjustment and resize listener
                    adjustForMobile();
                    window.addEventListener('resize', adjustForMobile);
                }
            });
        </script>
    </body>
</html>

<?php
include($footerInc);
?>
