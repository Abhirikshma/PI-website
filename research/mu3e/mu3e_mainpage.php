<?php
$subpath = dirname(dirname($_SERVER['REQUEST_URI']));
$incpath = "../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $figures . "/mu3e/mu3e_logo_white.svg"; 
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
	<script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/mu3e/vertex-cad.png' width='60%' alt='mu3e_header' />
        </div>

        <h1 class="western">Mu3e @ HD-PI</h1> 

        <h2 class="western">The Mu3e Experiment</h2> 
        <ul> 
            The Mu3e Experiment aims to search for the decay of an anti-muon into an electron and a pair of positrons, \(\small{\mu^+~\rightarrow~e^+ e^- e^+}\),
            which is only foreseen in the Standard Model at a very low branching ratio \(\small{(\sim 10^{-54})}\).
            Any observations in this decay channel above the branching ratio will be a clear indicator of the violation of charged lepton flavour conservation. 
            The experiment is actively undergoing commissioning at the Paul Scherrer Institute (PSI), in Villigen, Switzerland. 
        </ul>
        <ul style="text-indent:30px;"> 
            While the current experimental limit for the branching ratio of \(\small\mu^+~\rightarrow~e^+ e^- e^+\) is around \(\small 10^{-12}\), the Mu3e Experiment aims to further exclude, or observe,
            it down to a sensitivity level of \(\small 10^{-16}\).
            To accomplish this goal, new solutions must be developed, which implement the latest technologies available in the field of High Energy Physics. 
            In particular, the tracking system is made of ultra-thin pixel silicon sensors, which can reconstruct the tracks of the decayed electrons and positrons with minimal interference. 
            The Heidelberg PI group plays a leading role in the development of the experimental concept, the technical solutions and the detector design. 
            The group is responsible for the vertex detector, the innermost component of the experiment, and for many of the external services necessary for the operation of the whole system.
        </ul>
        <ul style="text-indent:30px;"> 
            At the moment, the Phase 1 of the experiment is under construction. 
            After the construction and commissioning, physics data will be taken for two years. 
            Afterwards, the beamline will be upgraded to the High Intensity Muon Beamilne (HIMB), which will deliver muon rates up to 10 GHz. 
            This will require a general upgrade of the Mu3e experiment, the Phase 2.
        </ul>
        <ul> 
            Mu3e PSI Website: <a href="https://www.psi.ch/en/mu3e">Link</a>
        </ul>
        <h2 class="western">Group Activites</h2> 
        <ul> 
            <h3 class="western">MuPix Design & Testing</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
                The MuPix is the silicon pixel sensor developed specifically for Mu3e, based on the <b> High Voltage Monolithic Active Pixel Sensors (HV-MAPS) </b> technology. 
                This is one of the most promising technologies for High Energy Physics experiments as it combines high performance with low cost and high flexibility. 
                The MuPix, in particular, implements a minimal number of connections for powering and readout, a strategy that requires novel design features for the communication with the chip itself.
                The Heidelberg group contributed significantly to the design of the chip and to the characterization of the several prototypes produced in the years. 
                </br>
                </br>
                <button class="dropdown-btn" style="height: var(--dropdown-button-height)-30px; background-color:var(--PI-darkred); color: white;"
                onclick="location.href='<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php';">To HV-MAPS Group >>
                </button>
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/mu3e/mupix10.jpg" alt="mu3e-mupix">
            </div>

            <h3 class="western">Vertex Detector Development</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
                The HD-PI Mu3e group is responsible for the <b>construction and commissioning of the vertex detector</b>. 
                In close cooperation with the workshop, various engineering solutions are explored for the assembly of detector components, the installation, and the connection to cooling and powering systems. 
                A mockup of the experiment is also available nearby the workshop, where solutions can be physically verified.
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/mu3e/vertex.jpg" alt="mu3e-vertex">
            </div>

            <h3 class="western">Simulation Studies & Data Analysis</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">                       
                Alongside intensive hardware development, comprehensive simulation studies also complement the groups activies by helping to understand any systematic effects from detector misalignment and efficiency.
                The group is also actively participating in improving track reconstruction by accounting for both the Multiple-Scattering and hit uncertainties aka the <b>General Triplet Track Fit</b>, while preparing the groundwork for the upcoming analysis of first data.
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/mu3e/tracks.png" alt="mu3e-tracks">
            </div>

            <h3 class="western">Future-Related Research Activites</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
                While the commissioning for Phase-1 ramps up and the experiment approaches data-taking mode,
                the R&D for the planned Phase-2 future upgrade of the Mu3e detector is also picking up speed.
                Multiple projects related to design and simulation studies, MuPix development and Vertex detector design are available for participation.
                </br>
                </br>
                <button class="dropdown-btn" style="height: var(--dropdown-button-height)-30px; background-color:var(--PI-darkred); color: white;"
                onclick="location.href='<?php echo dirname($subpath);?>/research/mu3e/mu3e_phase2.php';">More Details >>
                </button>
            </p>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>