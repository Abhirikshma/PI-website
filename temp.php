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

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Open Sans;
}

/* Create two equal columns that floats next to each other */
.columnL {
  float: left;
  width: 65%;
  padding: 10px;
}
.columnR {
  float: left;
  width: 35%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<div class="row">
  <div class="columnL" style="background-color:white;">
    <p>
    <h1 class="western"> ATLAS Group at Physikalisches Institut </h1>
    <h2 class="western"> ATLAS Experiment </h2>
    <br>
    <br>
    The <a href="https://atlas.cern/" target="_blank" rel="noopener noreferrer"> ATLAS</a> experiment is one of four large experiments 
    currently being conducted at the <a href="https://home.cern/science/accelerators/large-hadron-collider" target="_blank" rel="noopener noreferrer"> Large Hadron Collider (LHC)</a> 
    at <a href="https://home.cern/" target="_blank" rel="noopener noreferrer"> CERN</a>.
    After reaching its targeted energy of 13.6 TeV, the next major development is going to increase the luminosity of the LHC.
    In this <a href="https://home.cern/science/accelerators/high-luminosity-lhc" target="_blank" rel="noopener noreferrer"> High Luminosity (HL) LHC</a> will be about five times the number of simultaneous particle collisions than now and the experiments have to be upgraded to cope with that.
    ATLAS is a general purpose detector that can observe both, proton-proton and heavy ion collisions.
    It is build like an onion, different detector types are arranged hermetically in shells around the interaction region.    
    </br>
    <img src="<?php echo $figures;?>/ATLAS/HL-LHC_Schedule.png" width="100%" alt="Atlas">
    </br>
    <p>
      Development of the LHC over time.</br>
      <a href="https://hilumilhc.web.cern.ch/sites/default/files/HL-LHC_Janvier2022.pdf" target="_blank" rel="noopener noreferrer"> Source</a>
    </p>
    <br>
    <br>
    <h2 class="western"> Track Reconstruction </h2>
    <br>
    <br>
    Whenever a particle traverses through matter, it loses some of its energy, which can be measured.
    Highly energetic particles traverse many detector layers before they either decay, get absorbed, or leave the detector.
    This string of signals, aligned like pearls on a chain, along the particle trajectory is called a track and it can be used to deduce the momentum, charge, and point of origin of the particle.
    Unfortunately, it is not a priori known, which hits belong together.
    The problem of assigning hits to track candidates is called <strong>track finding</strong>.
    <strong>Track fitting</strong> is the process of applying a model to the track candidates to verify them and to calculate the particle properties.
    <br>
    <br>
    <br>
    <h2 class="western"> Triggered Readout </h2>
    <br>
    <br>
    After the high luminosity upgrades at the end of this decade, it is expected that there are about 200 proton-proton collisions every 25 ns.
    </br>
    <img src="<?php echo $figures;?>/ATLAS/BigData.png" width="100%" alt="Atlas">
    </br>
    <p>
      Data produced by the LHC compared with major web services.</br>
      <a href="https://towardsdatascience.com/how-big-are-big-data-in-2021-6dc09aff5ced" target="_blank" rel="noopener noreferrer"> Source</a>
    </p>

    <!-- The goal of the ATLAS experiment is to gain a better understanding of the basic building blocks of matter and their underlying interactions.
    <br>
    <br>
    The particles and forces we know of today are very well described by the Standard Model.
    However, there are quite a few open questions the Standard Model cannot yet answer, like: 
    <ul>
      <li> What is Dark Matter? 
      <li> Why does our universe only comprise matter - what happened to antimatter? 
      <li> How does gravity fit into the picture of fundamental interactions? 
    </ul> -->
    <br>
    <br>
    <h2 class="western"> Current Activities </h2>
    <br>
    <br>
    Our ATLAS group is working on the implementation of novel track fitting algorithms and modern track finding methods 
    with hardware accelerators (GPUs, FPGAs) for the <a href="projects/EF"> Event Filter</a>, part of the Trigger and Data Acquisition (TDAQ) system
    of the ATLAS experiment at the <a href="https://home.cern/science/accelerators/high-luminosity-lhc" target="_blank" rel="noopener noreferrer"> High-Luminosity Large Hadron Collider (HL-LHC)</a>.
    We are working on 
    <ul>
      <li> <a href="projects/GNN"> Track finding</a> with Graph Neural Networks on FPGAs 
      <li> <a href="projects/TrackFits"> Novel track fitting algorithms</a> and their acceleration on GPUs (and FPGAs) 
    </ul>
    </br>
    You are interested in joining our group to work on one of the largest particle physics experiments that has ever been conducted? Then get in touch! 
    </br>
    <br>
    <h2 class="western"> Past Projects </h2>
    <br>
    <ul>
      <li> <a href="projects/DiHiggs"> Background estimation</a> for searches for the decay Di-Higgs to 4b using Neural Networks
      <li> Measurement of the inclusive triple-differential dijet cross section to disentangle quarks and gluons at the LHC
      <li> Development of a new track trigger concept using three pixel detector layers, 
      aka the <a href="projects/TTT">Triplet Track Trigger</a>.
      <li> the <a href="prev_projects/HTT"> Hardware Tracking for the Trigger (HTT)</a> project for the ATLAS experiment at the 
      High Luminosity Large Hadron Collider
      <li> the <a href="prev_projects/FTK"> Fast TracKer (FTK)</a> upgrade of the ATLAS detector
      <li> <a href="prev_projects/BoostedTop"> Boosted top quark reconstruction</a>
      <li> <a href="prev_projects/Searches"> Searches for new Physics and Standard Model measurements involving top quarks</a>
    </ul>
    </p>
  </div>
  <div class="columnR" style="background-color:white;">
    <!-- <img src="pics-new/lhc_overview.png" width="300" alt="Atlas">
    </br>
    <p>
      The particle accelerator complex at CERN.
    </p>
    </br> -->
    <!-- <img src="pics-new/HL-LHC_Schedule.png" width="500" alt="Atlas">
    </br>
    <p>
      Development of the LHC over time.</br>
      <a href="https://hilumilhc.web.cern.ch/sites/default/files/HL-LHC_Janvier2022.pdf" target="_blank" rel="noopener noreferrer"> Source</a>
    </p> -->
    </br>
    <!-- <img src="pics-new/atlas_experiment.jpg" width="500" alt="Atlas"> -->
    <img src="<?php echo $figures;?>/ATLAS/ITk.png" width="100%" alt="Atlas-ITk">
    </br>
    <p>
      The new Inner Tracking Detector (ITk) of ATLAS for HL-LHC.</br>
      <a href="https://cds.cern.ch/record/2285585?ln=en" target="_blank" rel="noopener noreferrer"> Source</a>
    </p>
    </br>
    <img src="<?php echo $figures;?>/ATLAS/Event.png" width="100%" alt="Event">
    </br>
    <p>
      Transversal projection of particle hits and tracks</br>
      in the current inner detector.
    </p>
  </div>
</div>

</body>


    </div>
</body>
</html>


<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->

<?php
include($footerInc); 
?>