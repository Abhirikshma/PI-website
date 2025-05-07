<?php
$subpath = dirname(dirname(dirname($_SERVER['REQUEST_URI'])));
$incpath = "../../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $ATLASLogo; // Use centralized ATLAS logo path 
$subPageLink = $ATLASMainpageURL; // Use centralized ATLAS mainpage path
include($headerInc);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATLAS</title>
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
        <h1 class="western">Boosted Top Quarks</h1> 
        </br>
        
        <p class="block-text">
        The top quark is the heaviest known particle (m<sub>top</sub> &approx; 173 GeV). It is even heavier than the newly discovered Higgs boson (m<sub>Higgs</sub> &approx; 125 GeV). 
        Because of its high mass, the top quark plays an important role in both the Standard Model (in electroweak symmetry breaking, due to its large coupling to the Higgs boson) 
        and in Physics beyond the Standard Model scenarios. At the LHC, due to the large center-of-mass energy of the proton-proton collisions, top quark pairs (<span>\(t\bar{t}\)</span>) 
        are produced in large amounts. A significant fraction of the top quarks have momenta that are large compared to the top mass and are therefore called "boosted" top quarks. 
        </p>
        </br>
        <h2 class="western">Reconstruction with the HEPTopTagger</h2> 

        <p class="block-text">
        We use the <a href="./HTT.php" target="_blank" rel="noopener noreferrer">HEPTopTagger (HTT)</a> to reconstruct such boosted top quarks (\(P_T>200\) GeV) in the fully hadronic final state. 
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/hadtopdecaygraph.png' alt="Top quark decay">
            <img src='<?php echo $figures;?>/ATLAS/boosted.png' alt="Boosted top quark">
        </div>
        </br>
        <p class="caption-text">
        Top quark decaying to hadrons. \(t\rightarrow b + W(\rightarrow q\bar{q}') = b+q+\bar{q}'\), with \(q/q'=u,c,d,s,b\) (left). Sketch of a top quark decaying to hadrons, with the top quark at rest or boosted.
        </p>
        </br>
        <p class="block-text">
        The HTT uses large jets as inputs, assuming they contain all decay products of the top quark. The substructure of the large jets is then tested for compatibility with a hadronic top decay. 
        We have tested the performance of the HTT with ATLAS data in the lepton+jets final state. Assuming one top quarks decays via \(t\rightarrow b + W (\rightarrow \mu\nu)\) we reconstruct 
        events with a muon \(\mu\), missing transverse energy (to account for the neutrino) and apply the HTT to the hadronically decaying top quark. 
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/fig_10d.png' alt="Top quark candidate mass">
            <img src='<?php echo $figures;?>/ATLAS/mass_mu.png' alt="HTT vs interactions">
        </div>
        </br>
        <p class="caption-text">
        Top quark candidate mass, reconstructed with the HTT in lepton+jets events [<a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/PAPERS/PERF-2015-04/">JHEP 06 (2016) 093</a>] (left). HTT 
        top quark candidate mass versus average number of interactions \(<\mu>\) for events reconstructed with the HTT in the lepton+jets final state [<a href=https://cds.cern.ch/record/1571040>ATLAS-CONF-2013-084</a>] (right).
        </p>
        </br>
        <p class="block-text">
        The reconstructed top mass (fully hadronic!) and various control distributions are well behaved and agree with the Monte Carlo simulation within uncertainties. 
        Additionally the stability of the HTT with respect to additional proton-proton interactions, referred to as pile-up, has been tested and found to be excellent, by looking at the stability of the 
        reconstructed mass versus the average number of interactions \(<\mu>\). 
        </p>
        <p class="block-text">
        The PI ATLAS group has been leading in using the HTT in ATLAS, e.g. by<br>
        <ul>
        <li>establishing the HTT algorithm in the ATLAS Collaboration, by showing its usability in ATLAS data and simulation,</li>
        <li>providing calibrations and uncertainties for the HTT,</li>
        <li>using the HTT in a published ATLAS search.</li>
        </ul>
        </p>
        </br>
        
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>