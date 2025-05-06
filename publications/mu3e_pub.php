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
        <title>HV-MAPS Publications</title>
        <!-- Include style file -->
        <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">

    </head>
    <body lang="en-US" dir="ltr" style="text-align:left;">
        <div class = "sub-body">
            <!-- Hamburger Menu Button -->
            <button class="hamburger-pub" onclick="toggleMenu_pub()">☰</button>
            <ul class="menu-pub">
                <li><a href="#journal-publications">Journal Publications</a></li>
                <li><a href="#preprints-proceedings-pubnotes">Pre-prints, Proceedings and Pub Notes</a></li>
                <li><a href="#conference-invited-talks">Conference and Invited Talks</a></li>
                <li><a href="#posters">Posters</a></li>
            </ul>

            <!-- JavaScripts: mobile toggle menu -->
            <script type="text/javascript" src="<?php echo $menu_mobile_toggleJs;?>"></script>

<!--------------------------------journal-publications------------------------------------------------------>
            <h1 id="journal-publications" style="text-align:left; margin-bottom: 0;">Journal Publications </h1>
            <h3 style="margin-top: 0.5%;">(with significant contributions from members of our group)</h3>
            <h2>2021</h2>
            <ul class="pubs">
                <li>
                <p class="title"> Technical design of the phase I Mu3e experiment</p>
                The Mu3e Collaboration<br/>
                <a href="https://doi.org/10.1016/j.nima.2021.165679">Nucl.Instrum.Meth.A 1014 (2021) 165679</a><br/>
                <a href="https://arxiv.org/abs/2009.11690">arXiv:2009.11690 [physics.ins-det]</a>
                </li>

                <li>
                <p class="title">  The Mu3e Data Acquisition</p>
                Augustin H. and others, for the Mu3e Collaboration<br/>
                <a href="https://doi.org/10.1109/TNS.2021.3084060">IEEE Trans. Nucl. Sci.  68 (2021) 1833-1840</a><br/>
                </li>
            </ul>
            <br/>

            <h2>2020</h2>
            <ul class="pubs">
                <li>
                    <p class="title"> The MuPix sensor for the Mu3e experiment</p>
                    Augustin, H. and Peric, I. and Schoening, A. and Weber, A.<br/>
                    <a href="https://doi.org/10.1016/j.nima.2020.164441">Nucl.Instrum.Meth.A 979 (2020) 164441</a><br/>
                </li>
            </ul>
            <br/>

            <h2>2019</h2>
            <ul class="pubs">
                <li>
                    <p class="title">MuPix8 &#8722 Large area monolithic HVCMOS pixel detector for the Mu3e experiment</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1016/j.nima.2018.09.095">Nucl.Instrum.Meth.A 936 (2019) 681-683</a><br/>
                </li>

                <li>
                    <p class="title">Performance of the large scale HV-CMOS pixel sensor MuPix8</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1088/1748-0221/14/10/C10011">JINST 14 (2019) C10011 </a><br/>
                </li>
            </ul>
            <br/>

            <h2>2018</h2>
            <ul class="pubs">
                <li>
                    <p class="title">   Irradiation study of a fully monolithic HV-CMOS pixel sensor design in AMS 180 nm</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1016/j.nima.2018.07.044">Nucl.Instrum.Meth.A 905 (2018) 53-60</a><br/>
                </li>

                <li>
                    <p class="title">Efficiency and timing performance of the MuPix7 high-voltage monolithic active pixel sensor</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1016/j.nima.2018.06.049">Nucl.Instrum.Meth.A 902 (2018) 158-163</a><br/>
                </li>
            </ul>
            <br/>

            <h2>2017</h2>
            <ul class="pubs">
                <li>
                    <p class="title"> The MuPix System-on-Chip for the Mu3e Experiment</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1016/j.nima.2016.06.095">Nucl.Instrum.Meth.A 845 (2017) 194-198</a><br/>
                </li>

                <li>
                    <p class="title">   The MuPix Telescope: A Thin, high Rate Tracking Telescope</p>
                    Augustin, H. and others <br/>
                    <a href="http://dx.doi.org/10.1088/1748-0221/12/01/C01087">JINST 12 (2017) C01087 </a><br/>
                </li>
            </ul>
            <br/>

            <h2>2016</h2>
            <ul class="pubs">
                <li>
                    <p class="title">MuPix7 - A fast monolithic HV-CMOS pixel chip for Mu3e</p>
                    Augustin, H. and others <br/>
                    <a href="https://doi.org/10.1088/1748-0221/11/11/C11029">JINST 11 (2016) C11029 </a><br/>
                </li>
            </ul>
            <br/>

            <!--- Add more publications here --->
            <h2>2024</h2>
            <ul class="pubs">
                <li>
                <p class="title">This is an example title of the publication </p>
                Author1, Author2, Author3<br/>
                <a href="https://doi.org/replace_me">Nucl.Instrum.Meth.A volume (year) ISSN</a><br/>
                <a href="https://arxiv.org/abs/replace_me">arXiv:replace_me_by_id [physics.ins-det]</a>
                </li>
            </ul>
            <br/>
<!--------------------------------preprints-proceedings-pubnotes------------------------------------------------------>
            <h1 id="preprints-proceedings-pubnotes" style="text-align:left; margin-bottom: 0;">Pre-prints, Proceedings and Pub Notes</h1>
            <h2>2020</h2>
            <ul class="pubs">
                <li>
                <p class="title"> MuPix10: First Results from the Final Design</p>
                Augustin H. and others for the Mu3e Collaboration<br/>
                <a href="https://journals.jps.jp/doi/abs/10.7566/JPSCP.34.010012">JPS Conf. Proc. 34, 010012 (2021)</a><br/>
                (Proceedings of the 29th International Workshop on Vertex Detectors (VERTEX2020))
                </li>
            </ul>
            <br/>
<!--------------------------------conference-invited-talks------------------------------------------------------>
            <h1 id="conference-invited-talks"style="text-align:left; margin-bottom: 0;">Conference and Invited Talks</h1>
            <h2>2024</h2>
            <ul class="pubs">
                <li>
                    <p class="title">A graph neural network based cosmic muon trigger for the Mu3e experiment</p>
                    D. Karres</br>
                    <a href="https://indico.cern.ch/event/1338689/contributions/6015413/attachments/2952865/5191195/chep2024_karres.pdf">Slides</a></br>
                    (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                </li>
            </ul>
            <br/>
<!--------------------------------posters------------------------------------------------------>
            <h1 id="posters"style="text-align:left; margin-bottom: 0;">Posters</h1>

            <h2>2024</h2>
            <ul class="pubs"> <!-- unnumbered list -->
                <li>
                    <p class="title">FPGA implementation of the General Triplet Track Fit </p>
                    K. Tastepe</br>
                    <a href="https://indico.cern.ch/event/1338689/contributions/6015445/attachments/2950576/5186496/Heidelberg_PI-FPGA_Implementation_of_the_GTTF_POSTER.pdf">Poster</a></br>
                    (27th International Conference on Computing in High Energy & Nuclear Physics (CHEP2024), Krakow, Poland, October 2024)
                </li> 
            </ul>

        </div><!-- end of sub-body -->
    </body>
</html>

<?php
include($footerInc);
?>
