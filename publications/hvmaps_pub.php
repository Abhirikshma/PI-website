<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
$subPageLogo = $HVMapsLogo; // Use centralized HV-Maps logo
$subPageLink = $HVMapsMainpageURL; // Link to HV-Maps mainpage
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HV-MAPS Publications</title>
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
                        <h2>2024</h2>
                    </div>
                    <ul class="publications">

                    </ul>
                </div>
                
                <!-- PREPRINTS, PROCEEDINGS, PUB NOTES -->
                <div id="preprints-proceedings-pubnotes" class="publication-section">
                    <h1>Pre-prints, Proceedings and Pub Notes</h1>
                
                    <div class="publication-year">
                        <h2>2023</h2>
                    </div>
                    <ul class="publications">
                        <li>
                            <p class="title">Track reconstruction for the ATLAS Phase-II Event Filter using GNNs on FPGAs</p>
                            Sebastian Dittmeier on behalf of the ATLAS TDAQ collaboration<br/>
                            <div class="publication-links">
                                <a href="https://doi.org/10.1051/epjconf/202429502032">2023 CHEP Proceedings</a>
                                <a href="https://cds.cern.ch/record/2870183">ATL-DAQ-PROC-2023-006</a>
                            </div>
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
        <script type="text/javascript" src="<?php echo $pub_navJs;?>"></script>
    </body>
</html>

<?php
include($footerInc);
?>
