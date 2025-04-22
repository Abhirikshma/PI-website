<?php
$subpath = dirname(dirname($_SERVER['REQUEST_URI']));
$incpath = "../../assets/inc";
include($incpath . "/config.php");
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
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/atlas.png' width='60%' alt='atlas_header' />
        </div>

        <h1 class="western">ATLAS @ HD-PI</h1> 

        <h2 class="western">The ATLAS Experiment</h2> 
        <ul> 
                The ATLAS experiment is one of the four large experiments currently conducted at the Large Hadron Collider (LHC) at CERN.
								It is a general-purpose detector, aiming to provide precise measurements of the Standard Model's parameters and to investigate
								BSM physics at the high energy scales reached by the LHC. 
        </ul>
        <ul style="text-indent:30px;"> 
          After reaching its targeted energy of 13.6 TeV, the next major development for the LHC is going to increase its luminosity.
          In this High Luminosity (HL) LHC there will be about five times the number of simultaneous particle collisions than now, thus the experiments have to be upgraded to cope with that.
        </ul>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/BigData.png' width='60%'>
        </div>
        <ul style="text-indent:30px;"> 
            At the moment, the Phase 1 of the experiment is under construction. 
            After the construction and commissioning, physics data will be taken for 2 years. 
            Afterwards, the beamline will be upgraded to the High Intensity Muon Beamilne (HIMB), which will deliver muon rates up to 10 GHz. 
            This will require a general upgrade of the Mu3e experiment, the Phase 2.
        </ul>
        <h2 class="western">Group Activites</h2> 
        <ul> 
            <h3 class="western">MuPix Design & Testing</h3>
            <ul style="background-color:var(--PI-sand);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
                The MuPix is the silicon pixel sensor developed specifically for Mu3e, based on the <b> High Voltage Monolithic Active Pixel Sensors (HV-MAPS) </b> technology. 
                This is one of the most promising technologies for High Energy Physics experiments as it combines high performance with low cost and high flexibility. 
                The MuPix, in particular, implements a minimal number of connections for powering and readout, a strategy that requires novel design features for the communication with the chip itself.
                The Heidelberg group contributed significantly to the design of the chip and to the characterization of the several prototypes produced in the years. 
                <br>
                </br>
                <button onclick="location.href='<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php';"  style="background-color:var(--PI-darkred);border:0;color:var(--PI-sand);padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;">
                    To HV-MAPS Group >>
                </button>
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/mupix10.jpg" alt="mu3e-mupix" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Vertex Detector</h3>
            <ul style="background-color:var(--PI-sand);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
                The HD-PI Mu3e group is responsible for the <b> construction and commissioning of the vertex detector </b>. 
                In close cooperation with the workshop, various engineering solutions are explored for the assembly of detector components, the installation, and the connection to cooling and powering systems. 
                A mockup of the experiment is also available nearby the workshop, where solutions can be physically verified.
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/vertex.jpg" alt="mu3e-vertex" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Simulation Studies</h3>
            <ul style="background-color:var(--PI-sand);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">            
                Alongside intensive hardware development, comprehensive simulation studies also complement the groups activies by helping understanding the effects of the detector's configuration on signal sensitivity.
                The group is also actively participating in improving track reconstruction under the <b> General Triplet Track Fit framework </b>.
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/tracks.png" alt="mu3e-tracks" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Future-Related Research Activites</h3>
            <ul style="background-color:var(--PI-sand);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">            
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget tristique neque. Aliquam erat volutpat. Aenean laoreet neque in efficitur ornare. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse eleifend dui diam, vel eleifend tortor accumsan in. Donec sed lorem purus. Cras malesuada magna at nisl ultrices viverra. Morbi orci justo, tincidunt ac condimentum ac, pellentesque et libero. Aliquam rutrum rutrum mauris a cursus. Nam facilisis orci lectus. Curabitur id enim eu elit tempor porttitor. Nulla facilisi. Nulla facilisi. Maecenas finibus iaculis mi, ut tempor sapien efficitur vestibulum.
                <br></br>
                <button onclick="location.href='./mu3e_phase2.php';"  style="background-color:var(--PI-darkred);border:0;color:var(--PI-sand);padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;">
                    More Details >>
                </button>
            </ul>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>