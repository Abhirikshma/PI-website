<?php
$subpath = dirname(dirname(dirname($_SERVER['REQUEST_URI'])));
$incpath = "../../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $ATLASLogo; // Use centralized ATLAS logo
$subPageLink = $ATLASMainpageURL; // Use centralized ATLAS mainpage URL
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
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        </br>
        <h1 class="western">Track reconstruction using FPGAs and GPUs for the Event Filter of the ATLAS experiment at the HL-LHC</h1> 
        </br>
        <h2 class="western">The upgrade of the ATLAS experiment at the High-Luminosity LHC</h2> 

        <p class="block-text">
            Starting operation in 2027, the High-Luminosity Large Hadron Collider (HL-LHC) at CERN will exceed the LHC’s nominal luminosity up to an ultimate peak value of 
            \(L = 7.5 × 10^{34} cm^{−2} s^{−1}\). This enhancement in luminosity is accompanied by an increased number of inelastic proton-proton collisions per bunch-crossing (pile-up μ). 
            On average, we expect \(〈μ〉≈ 200\) collisions to pile-up per event. To cope with the higher event rates, increasing detector occupancies and radiation levels at the HL-LHC, 
            the ATLAS detector will be upgraded, referred to as the Phase-II upgrade. This upgrade involves the installation of the Inner Tracker (ITk), a new all-silicon tracking detector, 
            which will be able to withstand the high particle rates. Furthermore, the ITk enhances the tracking detector coverage with respect to the current ATLAS Inner Detector up to 
            pseudorapidities \(|η|=4\). 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/HL-LHC-tt.png' width='80%'>
        </div>
        </br>
        <p class="caption-text">
            A simulated <span>\(t\bar{t}\)</span> event at average pile-up of 200 collisions per bunch crsssing. All reconstructed tracks have \(p_T>1 GeV\). The tracks coming from the tt̄ vertex are coloured in cyan. 
            Two secondary vertices can be reconstructed and the tracks coming from them are highlighted in yellow. 
            [<a href="https://twiki.cern.ch/twiki/bin/view/AtlasPublic/UpgradeEventDisplays" target="_blank" rel="noopener noreferrer">ATLAS</a>]
        </p>
        </br>
        <h2 class="western">The ATLAS TDAQ Phase II System</h2> 

        <p class="block-text">
            The ATLAS experiment aims to continue a broad physics programme at the HL-LHC, ranging from precision measurements of the Standard Model parameters including 
            properties of the Higgs boson to flavour and heavy ion physics as well as more sensitive searches for signatures of physics beyond the Standard Model. To cover this large 
            variety of physics, an inclusive trigger selection is used. The challenge for the ATLAS Trigger and Data Acquisition (TDAQ) system is to maintain low thresholds especially for 
            single- and di-leptonic, but also hadronic signatures, while being able to handle the extreme rates and pile-up conditions at the HL-LHC. Therefore, the TDAQ system is also 
            required to undergo a major upgrade. The architecture for the Phase-II TDAQ system, relies on a single Level-0 (L0) hardware trigger that processes data from the calorimeter 
            and muon systems at 40 MHz. The processors deliver the L0 trigger decision at a rate of 1 MHz within a latency budget of 10 μs. The triggered detector data is transferred 
            to the Event Filter, where particle tracks are reconstructed using the ITk data. The Event Filter selects events according to the trigger menu and reduces the output rate of 
            the data sent to permanent storage to 10 kHz. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/tdaq.png' width='50%'>
        </div>
        </br>
        <p class="caption-text">
            The TDAQ Phase-II architecture with the Event Filter using only commercial processors. The black dotted arrows indicate the Level-0 dataflow from the detector systems to the Level-0 trigger system at 40 MHz, 
            which must identify physics objects and calculate event-level physics quantities within 10 μs. The result of the Level-0 trigger decision (L0A) is transmitted to the detectors as indicated by the red dashed arrows.
            The resulting trigger data and detector data are transmitted through the Data Acquisition System (DAQ) system at 1 MHz, as shown by the black solid arrows. Direct connections between each Level-0 trigger 
            component and the Readout system are suppressed for simplicity. The EF system is composed of a heterogeneous processor farm that must reduce the event rate to 10 kHz. Events that are selected by the 
            EF trigger decision are transferred for permanent storage. [<a href="https://cds.cern.ch/record/2782106" target="_blank" rel="noopener noreferrer">EF Tracking</a>]
        </p>
        </br>
        <h2 class="western">Hardware Accelerators in the Event Filter</h2> 

        
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/EF_Logo_cut.png' width='20%'>
        </div>
        </br>
        <p class="block-text">
            The upgraded Event Filter system provides high-level trigger functionality. It consists of a CPU based processing farm potentially complemented by commodity accelerator hardware (FPGAs and/or GPUs hosted via PCIe).
            The final technology choice will be made only in 2025 - hence there is a lot of room to explore the potential of available hardware and parallel algorithms. These studies are conducting within the EF Tracking group. 
        </p>
        </br>
        
        <h2 class="western">Group Activites</h2> 
        <h3 class="western">Track Seeding and Pattern Recognition</h3>
        <div class="sub-block-content">
            <p class="sub-block-text"> <!-- Fixed missing closing angle bracket -->
                After the ITk data preparation, this is the second step in the track reconstruction chain. The right combinations of clusters from the different detector layers have to be identified. Due to the high track multiplicity, 
                this is an extremely computationally intensive task - hence there is a lot of room for improvement using hardware accelerators.
                We are especially interested in studying Graph Neural Networks to find the right track candidates. We are investigating implementations in FPGAs, but also GPU studies are carried out in the collaboration. 
                Also other algorithms are being studied, e.g. Hough Transforms, or cluster triplet finding, ... 
                </br>
                </br>
                <button class="btn btn-danger" 
                onclick="location.href='<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_subpage/GNN_Finding.php';">
                    Learn More <i class="fas fa-arrow-right"></i>
                </button>
                </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/ATLAS/GNN.png" alt="mu3e-mupix">
        </div>
        </br>

        <h3 class="western">Track Fitting</h3>
        <div class="sub-block-content">
            <p class="sub-block-text">
                The final step of the track reconstruction chain includes the combinatorial Kalman Filter to extend track seeds, identified in the previous step, into complete track candidates. 
                Additionally, algorithms are used to remove duplicate tracks, reject fake tracks, and resolve ambiguous track candidates. Lastly, a precision track fit is used to determine the track parameters.
                We contribute to this topic by studying different track fitting algorithms and their implementations on GPUs and FPGAs. Examples for algorithms are the Kalman Filter, 
                the <a href="https://www.sciencedirect.com/science/article/pii/S0168900212000642?via%3Dihub" target="_blank" rel="noopener noreferrer">General Broken Lines Fit</a>, a linearized track fit with a simplified geometry, 
                and the <a href="https://www.sciencedirect.com/science/article/pii/S016890021631138X?via%3Dihub" target="_blank" rel="noopener noreferrer">Triplet Fit</a>. 
                </br>
                </br>
                <button class="btn btn-danger" 
                onclick="location.href='<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_subpage/GTTF.php';">
                    Learn More <i class="fas fa-arrow-right"></i>
                </button>
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/ATLAS/GTTF.png" alt="mu3e-mupix">
        </div>
        </br>
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>