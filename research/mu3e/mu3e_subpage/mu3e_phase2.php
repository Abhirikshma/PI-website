<?php
$subpath = dirname(dirname(dirname($_SERVER['REQUEST_URI'])));
$incpath = "../../../assets/inc";
include($incpath . "/config.php");

// Debug the logo path
// echo "<pre>Mu3e Logo path: " . $mu3eLogo . "</pre>";
// echo "<pre>Logo exists: " . (file_exists($_SERVER['DOCUMENT_ROOT'] . $mu3eLogo) ? 'Yes' : 'No') . "</pre>";

// Define the subpage logo path and link before including the header
$subPageLogo = $mu3eLogo; // Use centralized mu3e logo
$subPageLink = $mu3eMainpageURL; // Link to mu3e mainpage

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
        <!--img src='<?php echo $figures;?>/mu3e/mu3e_phase2.png' width='60%' alt='mu3e_phase2_header' style="display: block; margin: auto" /--> 

        <h1 class="western">Mu3e Experiment Phase-II R&D</h1> 
        <h2 class="western">Phase-II Motivations</h2> 
        <p class="block-text">
            To reach the ultimate sensitivity of \(\small \mathbf{B(\mu^+~\rightarrow~e^+ e^- e^+) \sim 10^{-16}}\), very high muon stopping rates of \(\small \sim 2 \cdot 10^9 /\text{s}\) are required.
            This will be achieved by the High Intensity Muon Beamline (HIMB) at PSI, which will deliver muon rates up to 10 GHz.
            To achieve this goal, the Mu3e experiment will undergo a major upgrade, the Phase-II and several R&D activities are underway.
        </p>
        </br>
        <h2 class="western">Research & Development Activites</h2> 
        
            <h3 class="western"> Design and Simulation Studies</h3>
            <!-- Reference : https://indico.psi.ch/event/16816/contributions/53584/attachments/29314/56745/Mu3e_Phase2_Poster_v2.pdf 
             https://indico.psi.ch/event/16889/contributions/56050/attachments/30033/58620/Mu3e_Phase2_intro.pdf 
             https://indico.psi.ch/event/16889/contributions/56052/attachments/30038/58628/Wengen2025.pdf -->
            <div class="sub-block-content">
                <p class="sub-block-text">
                    The high muon beam rates from the HIMB will lead to an increase in the rate of accidental background events, which will be a challenge for the Mu3e Phase-II experiment.
                    To cope with the higher accidental backgrounds and to achieve about an order of magnitude higher muon stopping rates,
                    design and simulations studies for an optimal muon stopping target are required.
                    Furthermore, a detector with excellent momentum and timing resolution are needed to reduce the accidental background.
                    One possible design for such a detector is shown in the figure.
                </p>
                <img class="sub-block-image" src='<?php echo $figures;?>/mu3e/mu3e_phase2.png' alt='mu3e_phase2_header'/>
            </div>
            </br>
            <h3 class="western">MuPix 2.0</h3>
            <div class="sub-block-content">
                <p class="sub-block-text">
                    In order to withstand the higher rate of the upcoming HIMB beamline, more robust silicon sensors need to be developed in order to exploit the full potential for physics discovery.
                    Three types of sensors, generally with lower power consumption and serial powering but with different requirements need to be produced: 
                    more granular pixel sensors with multiple 10 Gbps links for the Vertex layers, ultra fast timing sensors with at least 100 ps timing resolution
                    for the timing layer replacing the scintillating fibres, and improved time resolution down to 1 ns for the Outer Pixel layers.
                </p>
                <img class="sub-block-image" src="<?php echo $figures;?>/mu3e/phase2-sensors.png" alt="mu3e-p2-sensors">
            </div>
            </br>
            <h3 class="western">Phase-II Vertex Detector & DAQ</h3>
            <div class="sub-block-content">
                <p class="sub-block-text">
                    A longer Vertex detector, with at least 10 chips instead of the current six, is envisioned to be deployed for Mu3e Phase-2. Carbon fibre reinforcing structures are an ideal candidate to support the detector, while detector services will likely need a revamp & R&D in order to simplify it for future commissioning. 
                    Other possible avenues for improvement include a redesign of the High-Density Interconnects (HDIs), endpiece flexible printable circuit boards (flex PCBs) and an earlier switch to optical cables for detector communication.
                </p>
            </div>

<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>