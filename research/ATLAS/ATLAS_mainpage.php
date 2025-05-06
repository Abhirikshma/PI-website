<?php
$subpath = dirname(dirname($_SERVER['REQUEST_URI']));
$incpath = "../../assets/inc";
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
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->

<p style="text-align: right; object-fit: caution;  flex-grow: 1;">
        <button class="dropdown-btn" style="height: var(--dropdown-button-height)-30px; background-color:var(--PI-lightred); color: var(--PI-darkred); border: none"
                onclick="location.href='https://www.physi.uni-heidelberg.de/Forschung/he/ATLAS/atlas_wiki/index.php?title=Main_Page';">Internal Pages  >>
            </button>
        </p>    
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/atlas.png' width='60%' alt='atlas_header' />
        </div>
        </br>
        <h1 class="western">ATLAS @ HD-PI</h1> 

        <h2 class="western">The ATLAS Experiment</h2> 

        </br>
        <p style="object-fit: caution;  flex-grow: 1;">
        The <a href="https://atlas.cern/" target="_blank" rel="noopener noreferrer"> ATLAS</a> experiment is one of four large experiments 
        currently being conducted at the <a href="https://home.cern/science/accelerators/large-hadron-collider" target="_blank" rel="noopener noreferrer"> Large Hadron Collider (LHC)</a> 
        at <a href="https://home.cern/" target="_blank" rel="noopener noreferrer"> CERN</a>.
        After reaching its targeted energy of 13.6 TeV, the next major development is going to increase the luminosity of the LHC.
        In this <a href="https://home.cern/science/accelerators/high-luminosity-lhc" target="_blank" rel="noopener noreferrer"> High Luminosity (HL) LHC</a> will be about five times the number of simultaneous particle collisions than now and the experiments have to be upgraded to cope with that.
        ATLAS is a general purpose detector that can observe both, proton-proton and heavy ion collisions.
        It is build like an onion, different detector types are arranged hermetically in shells around the interaction region.    
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/HL-LHC_Schedule.png' width='100%'>
        </div>
        </br>
        <p style="object-fit: caution;  flex-grow: 1; text-align: center;">
        Development of the LHC over time. <a href="https://hilumilhc.web.cern.ch/sites/default/files/HL-LHC_Janvier2022.pdf" target="_blank" rel="noopener noreferrer"> Source</a>
        </p>
        </br>

        <h2 class="western">Track Reconstruction</h2>
        </br>
            <p style="object-fit: caution; flex-grow: 1;">
            Whenever a particle traverses through matter, it loses some of its energy, which can be measured. 
            Highly energetic particles traverse many detector layers before they either decay, get absorbed, or leave the detector. This string of signals, 
            aligned like pearls on a chain, along the particle trajectory is called a track and it can be used to deduce the momentum, charge, and point of origin of the particle. 
            Unfortunately, it is not a priori known, which hits belong together. The problem of assigning hits to track candidates is called <b>track finding</b>. <b>Track fitting</b> is the 
            process of applying a model to the track candidates to verify them and to calculate the particle properties. 
            </p>
            </br>
            <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
            <img src='<?php echo $figures;?>/ATLAS/ITk.png' style="width: 58%;" alt="Tracking detector">
            <img src='<?php echo $figures;?>/ATLAS/Event.png' style="width: 42%;" alt="Track Reconstruction Event">
            </div>
            </br>
        <div style="text-align: center;">
            <p style="object-fit: caution; flex-grow: 1; text-align: center;">
            The new Inner Tracking Detector (<a href="https://cds.cern.ch/record/2285585?ln=en" target="_blank" rel="noopener noreferrer">ITk</a>) of ATLAS for HL-LHC (left). 
            Transversal projection of particle hits and tracks in the current inner detector (right). 
            </p>
        </div>
        </br>

        <h2 class="western">Triggered Readout</h2>
        </br>
            <p style="object-fit: caution; flex-grow: 1;">
            After the high luminosity upgrades at the end of this decade, it is expected that there are about 200 proton-proton collisions every 25 ns. 
            </p>
            </br>
            <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/BigData.png' width='80%'>
        </div>
        </br>
        <p style="object-fit: caution;  flex-grow: 1; text-align: center;">
        Data produced by the LHC compared with major web services. <a href="https://towardsdatascience.com/how-big-are-big-data-in-2021-6dc09aff5ced" target="_blank" rel="noopener noreferrer"> Source</a>
        </p>
        </br>
        
        <h2 class="western">Group Activites</h2> 
        <h3 class="western">Track Finding</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
            Our ATLAS group is working on the implementation of modern track finding methods using Graph Neural Networks (GNNs) on hardware accelerators (GPUs, FPGAs) 
            for the Event Filter, part of the Trigger and Data Acquisition (TDAQ) system of the ATLAS experiment at the High-Luminosity Large Hadron Collider (HL-LHC).
                </br>
                </br>
                <button class="dropdown-btn" style="height: var(--dropdown-button-height)-30px; background-color:var(--PI-darkred); color: white;"
                onclick="location.href='<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_subpage/GNN_Finding.php';">Learn More >>
                </button>
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/ATLAS/GNN.png" alt="mu3e-mupix">
            </div>
            </br>
            <h3 class="western">Track Fitting</h3>
            <div class="sub-block-content">
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
            Novel track fitting algorithms, like the General Triplet Track Fit, are implemented on hardware accelerators (GPUs, FPGAs) 
            for the Event Filter, part of the Trigger and Data Acquisition (TDAQ) system of the ATLAS experiment at the High-Luminosity Large Hadron Collider (HL-LHC). 
                </br>
                </br>
                <button class="dropdown-btn" style="height: var(--dropdown-button-height)-30px; background-color:var(--PI-darkred); color: white;"
                onclick="location.href='<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_subpage/GTTF.php';">Learn More >>
                </button>
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/ATLAS/GTTF.png" alt="mu3e-mupix">
            </div>
            </br>
            


            <h3 class="western">Past Projects</h3>
            <div class="sub-block-content">
            <ul>
            <p style="width: 55%;object-fit: caution;  flex-grow: 1;">
            <li> <a href="ATLAS_prev_proj/DiHiggs.php"> Background estimation</a> for searches for the decay Di-Higgs to 4b using Neural Networks
            </li><li> Measurement of the inclusive triple-differential dijet cross section to disentangle quarks and gluons at the LHC
            </li><li> Development of a new track trigger concept using three pixel detector layers, 
            aka the <a href="ATLAS_prev_proj/TTT.php">Triplet Track Trigger</a>.
            </li><li> the <a href="ATLAS_prev_proj/HTT.php"> Hardware Tracking for the Trigger (HTT)</a> project for the ATLAS experiment at the 
            High Luminosity Large Hadron Collider
            </li><li> the <a href="ATLAS_prev_proj/FTK.php"> Fast TracKer (FTK)</a> upgrade of the ATLAS detector
            </li><li> <a href="ATLAS_prev_proj/Boosted.php"> Boosted top quark reconstruction</a>
            </li><li> <a href="ATLAS_prev_proj/Searches.php"> Searches for new Physics and Standard Model measurements involving top quarks</a>
            </li>
            </p>
</ul>
            </div>
</br>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>