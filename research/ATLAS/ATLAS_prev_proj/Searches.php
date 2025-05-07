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
    <title>ATLAS</title>
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
        <h1 class="western">Searches for New Physics</h1> 
        </br>

        <p class="block-text">
        Many theories beyond the Standard Model predict new heavy resonance that can decay to top quarks, e.g. \(Z'\) bosons. A search for resonances decaying into top-quark pairs using fully 
        hadronic decays has been performed at the PI (<a href="http://link.springer.com/article/10.1007%2FJHEP01%282013%29116">JHEP 1301 (2013) 116</a>). By using the HTT to reconstruct 
            two top quarks the di-top quark mass can be measured. The data are in agreement with the Standard Model prediction and limits on the mass and production cross-section of the hypothetical 
            heavy particles have been set. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/fig_13a.png' width='60%'>
        </div>
        </br>
        <p class="caption-text">
        Distribution of the \(t\bar{t}\) invariant mass \(m_{t\bar{t}}\). The data, the Standard Model \(t\bar{t}\) background prediction, the QCD multijet background prediction and a hypothetical \(Z'\) 
        signal with \(m_{Z'} = 1\) TeV are shown. Data points show statistical uncertainties only.  <a href="http://link.springer.com/article/10.1007%2FJHEP01%282013%29116">JHEP 1301 (2013) 116</a>
        </p>
        </br>

        <h2 class="western">Top-quark-pair resonance search</h2> 

        <p class="block-text">
        The top-quark is the heaviest particle in the Standard Model, as a result of its large coupling to the Higgs boson. Due to such a fundamental role of the top-quark, many theories that could address 
        existing questions within the Standard Model rely on new particles that also couple with the top quark. In many of such models, such as models for quantum gravitation, one would expect a new 
        undiscovered particle to decay into a top-quark pair. Our group searches for a particle decaying into top-quark pair, by comparing the spectrum of the mass of the top-quark pair to a simulation, 
        of what one would expect to see if a new particle exists. 
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/fig_09a.png' width='60%'>
        </div>
        </br>
        <p class="caption-text">
        Reconstructed di-top quark mass as predicted in simulation and measured in data. <a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-014/">ATLAS-CONF-2016-014</a>
        </p>
        </br>
        <h2 class="western">Buckets of Top and Higgs</h2> 

        <p class="block-text">
        In addition to the HTT (which of course can also be employed in measurements of Standard Model processes like the production of a 
        Higgs boson in association with a pair of top quarks ("\(ttH\)")) a second method to reconstruct pairs of hadronically decaying top 
        quarks is used by the ATLAS PI group. The "Buckets of Top" algorithm 
        (<a href="http://link.springer.com/article/10.1007%2FJHEP08%282013%29086">JHEP 1308 (2013) 086</a>) aims to reconstruct top quarks 
        with transverse momenta \(100 \mathrm{ GeV} < p_T < 400\) GeV, by sorting jets into three "buckets". The first two buckets \(B_1\)/\(B_2\) 
        will ideally contain the decay products of the two top quarks, while the third one \(B_{ISR}\) collects the extra radiation in the event. 
        The performance and applicability of the method have been studied and  method was  validated in a Monte-Carlo to data comparison. 
        For the \(ttH\)  channel the bucket algorithm could be used to solve the combinatorial problem of assigning four b-quarks to the two 
        top decays and the \(H\rightarrow b\bar{b}\) Higgs boson decay, as suggested in 
        <a href="http://dx.doi.org/10.1007/JHEP02(2014)130">JHEP 1402 (2014) 130</a>.
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/ttbarbitbucket2.png' width='60%'>
        </div>
        </br>
        <p class="caption-text">
        Sketch of the buckets of top algorithm, \(j_1\) to \(j_10\) correspond to jets recontructed in the event.
        </p>
        </br>
        <h2 class="western">Single Vector Like Quark search</h2> 

        <p class="block-text">
        The Standard Model has several open questions waiting to be answered,such as why we have only six quarks and not more. The discovery of the Higgs boson 
        excludes the existence of new quarks similar to the ones we already have observed. However, a new class of quarks, called Vector Like Quarks (VLQs) has not been excluded, 
        as they do not receive their masses through a coupling to the Higgs boson. 
        </p>
        </br>
        <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
            <img src='<?php echo $figures;?>/ATLAS/fig_01.png' width='40%'>
            <img src='<?php echo $figures;?>/ATLAS/fig_04a.png' width='26%'>
        </div>
        </br>
        <p class="caption-text">
        Leading-order Feynman diagram of single Q (Q=T,Y) production in Wb fusion and subsequent decay into Wb [<a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-072/">ATLAS-CONF-2016-072</a>] (left).
        Distributions of the reconstructed VLQ mass in simulation and data [<a href="https://atlas.web.cern.ch/Atlas/GROUPS/PHYSICS/CONFNOTES/ATLAS-CONF-2016-072/">ATLAS-CONF-2016-072</a>] (right).
        </p>
        </br>
        <p class="block-text">
        Such Vector Like Quarks have not been observed, but they are a key component in several Beyond the Standard Model theories, which address existing problems of the Standard Model. 
        Our group works on the search for a new Vector Like Quark particle, which would be produced in association with a b-quark and a light-quark, and further decays in a W-boson and a b-quark. 
        This search is performed in the channel on which the W boson decays into an electron or muon. 
        </p>
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>