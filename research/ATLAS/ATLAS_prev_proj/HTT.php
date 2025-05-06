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
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        </br>
        <h1 class="western">The Hardware Tracking for the Trigger System (HTT)</h1> 
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/fig_195a.png' alt="TDAQ Baseline">
            <img src='<?php echo $figures;?>/ATLAS/fig_195b.png' alt="TDAQ Evolved">
        </div>
        </br>
        <p class="caption-text">
        Baseline scenario of the TDAQ Phase II Upgrade, including HTT as co-processor in the Event Filter (left). So called evolved TDAQ architecture (right), with regional tracking of HTT being 
        promoted to a hardware trigger level (L1Track), and global tracking remaining in the Event Filter (gHTT) [<a href="https://cds.cern.ch/record/2285584" target="_blank" rel="noopener noreferrer">TDR</a>].
        </p>
        </br>

        <p class="block-text">
        The HTT system was planned to be a dedicated custom hardware sytem able to reconstruct tracks of charged particles in the ATLAS ITk detector at 1 MHz with low latency.
         It was meant to be part of the Event Filter system for the ATLAS TDAQ upgrade at the High-Luminosity LHC, reducing the computational load on the CPUs. Its low latency design, 
         which followed the general approach from the ATLAS Fast TracKer (<a href="./FTK.php" target="_blank" rel="noopener noreferrer">FTK</a>) project, would have furthermore allowed for the usage as dedicated Level-1 hardware trigger, sustaining L0 trigger rates of up to 4 MHz. 
         This would have allowed to lower pT-thresholds in the Level-0 hardware trigger and thus enhance the physics sensitivity of ATLAS. 
         The HTT would have been composed of about 700 ATCA boards, based on powerful FPGAs for communication and data processing, and custom-designed Associative Memory ASICs for pattern matching of 
         incoming detector data with pre-computed track patterns derived from simulations. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/fig_048.png' width='80%'>
        </div>
        </br>
        <p class="caption-text">
        HTT is divided into independent units, consisting of 12 Associate Memory Tracking Processors (AMTP) ATCA boards (TP + PRM) and 2 Second Stage Tracking Processors (SSTP) ATCA boards 
        (TP + 2 TFM), that are communicating with the network via dedicated HTT-Interface (HTTIF) cards [<a href="https://cds.cern.ch/record/2285584" target="_blank" rel="noopener noreferrer">TDR</a>]. 
        </p>
        </br>

        <h2 class="western">Our contributions </h2> 

        <p class="block-text">
        Our group was mainly involved in the development of the Pattern Recongition Mezzanine (PRM), as well as in the development of the Associative Memory ASIC (AM ASIC, version AM 08).
        </p>
        <p class="caption-text">
        The PRM is the key part of the HTT system, hosting 20 AM ASICs and 1 powerful FPGA (Intel Stratix 10 MX). Here, the pattern matching step, as well as a linearized track fit take place. 
        The design takes advantage of the High-Bandwidth Memory included in the Intel Stratix 10 MX, which offers 8 GByte of DRAM without requiring any external interfaces on the PCB. 
        Within the HBM, the pattern database stored in the AM ASICs is mirrored, and all constansts needed by the track fit track parameter estimation algorithms can be stored and retrieved quickly. 
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/prm.png' alt="PRM Board">
            <img src='<?php echo $figures;?>/ATLAS/PRM_diagram.png' alt="PRM Diagram">
        </div>
        </br>
        <p class="caption-text">
        Demonstrator PRM board with Intel Stratix 10 MX mounted and in operation (left). PRM firmware diagram [<a href="https://cds.cern.ch/record/2317178" target="_blank" rel="noopener noreferrer">PRM</a>].
        </p>
        </br>
        <p class="block-text">
        We have substantially contributed to the development of the PRM firmware, in particular to the track fit, and the interfaces to the High-Bandwidth Memory and the AM ASICs.
        </p>
        <p class="block-text">
        We have also contributed to the development of the AM 08 - to its digital design and to the testing. We have developed a probe socket with PTSL that allows us to probe the bare dies
        before they were packaged. This allowed us to speed up the verification of AM ASIC's functionality. 
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/am08.jpg' alt="AM08 Dies">
            <img src='<?php echo $figures;?>/ATLAS/probe_card.jpg' alt="Probe Card">
        </div>
        </br>
        <p class="caption-text">
        AM 08 bare dies inside a waffle pack (left). Probe card developed with PTSL to test the bare AM 08 dies (right).
        </p>
        </br>
        <p class="block-text">
        In 2021, the HTT project has been cancelled by the ATLAS collaboration. Performance studies of L1Track have been conducted using fast emulation. The results are summarized in a PUB-note (
        "Performance studies of tracking-based triggering using a fast emulation", The ATLAS Collaboration, <a href="https://cds.cern.ch/record/2317178" target="_blank" rel="noopener noreferrer">ATL-DAQ-PUB-2023-001</a>).
        </p>
        
        </br>
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>