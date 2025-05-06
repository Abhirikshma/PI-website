<?php
$subpath = dirname(dirname(dirname($_SERVER['REQUEST_URI'])));
$incpath = "../../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $figures . "/ATLAS/ATLAS_logo_white.svg"; 
$subPageLink = $_SERVER['REQUEST_URI']; // Link to the current page
include($headerInc);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <!-- to enable mathjax (LaTeX code rendering) -->
    <script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        </br>
        <h1 class="western">FTK - Fast Track Trigger</h1> 
        </br>

        <p style="width: 100%;object-fit: caution;  flex-grow: 1;">
        The Fast TracKer (FTK) system is a dedicated pre-processor, that allows to do the global track reconstruction at 100 kHz rate. Track reconstruction at this rate and at instanteneous luminosity 
        of up to <span style="font-family: 'Times New Roman', Times, serif;">3×10<sup>34</sup>cm<sup>-2</sup>s<sup>-1</sup></span> is very challenging. At the moment, usage of CPUs for such task is not possible, as it would be way too slow and expensive. 
        Therefore, a dedicated hardware system was designed based on custom Associative Memory chips (see <a href="https://en.wikipedia.org/wiki/Content-addressable_memory" target="_blank" rel="noopener noreferrer">web page</a> on Wikipedia) 
            for pattern matching and FPGA's (see <a href="https://www.altera.com/content/dam/altera-www/global/en_US/pdfs/literature/misc/fpgas_for_dummies_ebook.pdf">"FPGAs for dummies"</a>) 
        for track reconstruction and data processing. Such design together with highly-paralell processing allows to do reconstruction of tracks in the full ATLAS semiconductor tracker down to 1 GeV. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/AtlasDataflow_V2_withFTK.png' width='70%'>
        </div>
        </br>
        <p style="object-fit: caution;  flex-grow: 1; text-align: center;">
        A sketch of the ATLAS trigger dataflow system with FTK included. FTK runs for each event that has been accepted by the hardware-based Level-1 Trigger and provides inputs for the software-based High Level Trigger.
        
        </p>
        </br>
        <p style="width: 100%;object-fit: caution;  flex-grow: 1;">
        Our group has contributed into delivery of the first operational control and configuration tools for FTK. Group members are involved in ongoing commissioning of FTK and integration inside ATLAS. 
        The group takes leadership role in development of monitroing applications, that are key ingredient in the commissioning. This development spans from tools that check basic status of the dataflow in the system
         to high-level frameworks that sample ATLAS events, run FTK simulation on inner-detector hits and compare output to the actual tracks reconstructed by FTK hardware in the same event. As of 2017, FTK is in the 
         critical start-up phase, has an active community both in Heidelerg and in CERN and provides high visibility for active members.
In the past, we have also contributed in Associative Memory chip tests. Associative Memory allows a very fast search by content in contrast to the commonly-used RAM, which allows fast search by address.
 In FTK such devices are used to find combinations of hits, that roughly match pre-computed patterns corresponding to possible trajectories of charged particles, i.e. pattern recognition.
In 2019, the FTK project has been cancelled by the ATLAS collaboration. 
        </p>
        </br>
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>