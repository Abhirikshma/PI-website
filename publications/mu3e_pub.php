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
            // Prevent automatic scrolling when page loads with a hash
            if (window.location.hash) {
                // Force scroll to top
                window.scrollTo(0, 0);
                
                // Optional: Remove the hash without causing a jump
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
                    const title = section.querySelector('h1').textContent;
                    
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
                    // Check container width instead of window
                    const containerWidth = document.querySelector('.sub-body').offsetWidth;
                    const isNarrow = containerWidth <= 850;
                    
                    // Always ensure dropdown is closed when layout changes
                    navLinks.classList.remove('mobile-expanded');
                    navLinks.style.display = isNarrow ? 'none' : 'flex';
                    toggleButton.setAttribute('aria-expanded', 'false');
                    
                    if (isNarrow) {
                        // Narrow layout: Move links out of wrapper
                        if (navWrapper.contains(navLinks)) {
                            navWrapper.removeChild(navLinks);
                            navContainer.appendChild(navLinks);
                        }
                        navWrapper.style.display = 'none';
                    } else {
                        // Wide layout: Move links back to wrapper
                        if (navContainer.contains(navLinks) && !navWrapper.contains(navLinks)) {
                            navContainer.removeChild(navLinks);
                            navWrapper.appendChild(navLinks);
                        }
                        navWrapper.style.display = 'flex';
                    }
                }
                
                // Set initial layout
                adjustLayout();
                
                // Handle resize
                const resizeObserver = new ResizeObserver(adjustLayout);
                resizeObserver.observe(document.querySelector('.sub-body'));
                
                // Fallback for browsers without ResizeObserver
                window.addEventListener('resize', adjustLayout);
            });
        </script>
    </body>
</html>

<?php
include($footerInc);
?>
