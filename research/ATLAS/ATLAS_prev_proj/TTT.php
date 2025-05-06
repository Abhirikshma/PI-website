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
        <h1 class="western">Studies for Future Hadron Collider Experiments</h1> 
    
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/FCC_satelite.jpg' width='90%'>
        </div>
        </br>
        <p class="caption-text">
            Satellite image with a sketch of a possible 100 km long Future Circular Collider that uses the exsiting accelerator sytem for beam injection (Image: CERN).
        </p>
        </br>
        <p class="block-text">
            In the years 2023-2025, the LHC accelerator and its experiments will undergo major upgrades to increase the proton beam luminosities to ~5 times the designed value (Phase 2).
            Post-upgrade, about 200 simultaneous proton-proton (p-p) interactions per collision (pile-up) are expected in a luminous region of ~20 cm at a collision rate of 40 MHz.
            There are also studies being done for the post-LHC era, i.e. beyond 2040, for a gigantic hadron-hadron Future Circular Collider (FCC-hh).
            This study considers a circular collider with a circumference of 100 km, where proton-proton collisions would occur at a center of mass energy (√s = 100 TeV) every 25 ns or 5 ns.
            The 27 km long LHC ring will be used as an injector to FCC-hh, where the p-p beams will circulate with luminosities of ~30 times the designed luminosity of the LHC.
            A schematic drawing of the FCC is shown in the satellite image below. 
            Such high energies and luminosities at the FCC-hh would result in around 1000 simultaneous p-p collisions.
            Our ATLAS group at the Physikalisches Institut is involved in studying a new concept of a track based trigger for the future hadron collider experiments.
        </p>
        </br>
        <h2 class="western">Motivation</h2> 

        <p class="block-text">
            The physics motivation to collide protons with very high √s and luminosities is not only to increase the mass reach (for discovery of heavier particles) but also to do precision measurements for some of the very rare SM processes.
            Let's consider as an example the production of a pair of Higgs bosons, which involves coupling of the Higgs's to itself, the trilinear Higgs self coupling (λ) (see figure below) and is about a thousand times rarer than the single Higgs boson production.
            Higher √s and luminosity of the proton beams will not only make di-Higgs production more accessible but also give insights on the nature or the shape of the Higgs potential (whether it is a mexican hat potential as in the case of the Standard Model or not).
            A feasibility study with a triggerless readout, negligible pile-up and systematic uncertainties for FCC-hh shows that λ can be measured with a precision of 5% using the HH->4b decay channel.
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/Lambda.png' alt="Lambda Diagram">
            <img src='<?php echo $figures;?>/ATLAS/HiggsPotential.png' alt="Higgs Potential">
        </div>
        </br>
        <p class="caption-text">
            The triangle contribution to di-Higgs production via gluon gluon fusion at leading order and the shape of the standard model Higgs potential.
        </p>

        </br>
        <h2 class="western">Pile-up: The real enemy</h2> 

        <p class="block-text">
            However, an average pile-up (<μ>) of 200 at HL-LHC and 1000 at FCC-hh posses an enormous challenge, not only to the detector sub-systems and data aquisition, but also to the analyses for various physics cases.
            A large pile-up increases the confusion in object (e.g. jets, tracks, etc.) reconstruction and selection of events of interest.
            This can be visualised using a simplified figure below, where the luminous region with six simultaneous p-p collisions are displayed along the beamline. 
            One can nicely see how pile-up biases the kinematics of the reconstructed jets which in turn reflect in the physics performances of different analyses.
            This problem arises already at trigger level where only the few interesting physics events are selected and all other events are rejected. 
            The pile-up problem can be effectively reduced by using tracking information as tracks allow to distinguish the different event vertices. 
            However, readout bandwidth and latency requirements have prevented the use of track based triggers at the very first level.
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/pileup.png' width='70%'>
        </div>
        </br>
        <p class="caption-text">
            A sketch illustrating the effect of pile-up on the reconstructed jets.
        </p>
        </br>
        <h2 class="western">TTT - Triplet Track Trigger</h2> 

        <p class="block-text">
            Our group at the PI proposes a new concept of Triplet Track Trigger that allows for fast track reconstruction using three closely stacked pixel detector layers at large radii (~1 m).
            A charged particle in a uniform magnetic field traces a circular trajectory in a plane transverse to the field.
            Hence, three pixel hit positions are enough to determine the track (circle) parameters. 
            In the longitudinal plane, the particle traces a straigt line and one can extrapolate the z-vertex just by determining the slope of this straight line.
            The knowledge that most particles originate very close to the origin in x-y is used as a beamline constraint, resulting in very good momentum resolution of the reconstructed TTT tracks. 
            <br>
            Such a TTT design is being studied in our group for the inner tracker of ATLAS at HL-LHC, and the FCC-hh using full Geant4 simulations. Due to the simplicity of the TTT algorithm, it can be implement on hardware for e.g. an FPGA.
            We are also designing a chip that performs the Triplet Track Trigger algorithm to reconstruct particle tracks in the detector in real time with as little latency as possible.
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/a_withBML_1.png' alt="Tracking detector">
            <img src='<?php echo $figures;?>/ATLAS/b_2.png' alt="Track Reconstruction Event">
            <img src='<?php echo $figures;?>/ATLAS/ATLAS_G4_2.png' alt="Geant4 Simulation">
        </div>
        </br>
        <p class="caption-text">
            Track reconstruction using the TTT in the transverse and the longitudinal plane. TTT barrel geometry implementation in the full ATLAS-ITK Geant4 simulation.
        </p>
        </br>

<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>