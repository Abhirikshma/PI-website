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
            <h2>2024</h2>
            <ul class="pubs">
                <li>
                <p class="title">This is an example title of the publication <br>
                <a href="https://doi.org/replace_me">Nucl.Instrum.Meth.A volume (year) ISSN</a><br>
                <a href="https://arxiv.org/abs/replace_me">arXiv:replace_me_by_id [physics.ins-det]</a>
                </li>
            </ul>
            <br/>
<!--------------------------------preprints-proceedings-pubnotes------------------------------------------------------>
            <h1 id="preprints-proceedings-pubnotes" style="text-align:left; margin-bottom: 0;">Pre-prints, Proceedings and Pub Notes</h1>
            <h2>2023</h2>
            <ul class="pubs">
                <li>
                    <p class="title">Track reconstruction for the ATLAS Phase-II Event Filter using GNNs on FPGAs</p>
                    Sebastian Dittmeier on behalf of the ATLAS TDAQ collaboration<br>
                    <a href="https://doi.org/10.1051/epjconf/202429502032">2023 CHEP Proceedings</a>
                    <a href="https://cds.cern.ch/record/2870183">ATL-DAQ-PROC-2023-006</a>
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
