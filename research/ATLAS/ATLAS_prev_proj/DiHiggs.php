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
        <h1 class="western">Background estimation for searches for the decay Di-Higgs to 4b using Neural Networks</h1> 
        </br>
        <h2 class="western">Di-Higgs</h2> 

        <p class="block-text">
        The Higgs boson discovery in 2012 has been the biggest achievement of the ATLAS experiment so far. 
Since then, one of the main goals of ATLAS is measurement of the Higgs' properties. 
Some of these can only be explored through the Higgs pair production. 
        </p>
        </br>
        <h2 class="western">Higgs Pair Production</h2> 

        <p class="block-text">
        Pairs of Higgs bosons can be produced in various ways with the two most dominant production modes being gluon-gluon fusion and vector boson fusion. 
Similarly, these pairs can also decay in a number of ways. 
Members of our group are involved in the analysis in which both Higgs bosons decay to pairs of b quarks.
        </p>
        </br>
        <div style="text-align: center;">
            <img src='<?php echo $figures;?>/ATLAS/event_display_HH4b.png' width='80%'>
        </div>
        </br>
        <p class="caption-text">
        Event Display of a DiHiggs candidate decaying into four b-quarks forming jets represented by the cones.
        </p>
        </br>

        <h2 class="western">HH to 4b</h2> 

        <p class="block-text">
        The Higgs’ decay to b-quarks has the highest branching ratio among all the dacays. 
So is the case for the di-Higgs system decaying to 4 b-quarks and such high BR motivates this analysis. 
On the other hand, because of this high jet multiplicity in the final state, the amount of underlying QCD multijet background is enormous and practically impossible to model with the Monte Carlo simulations. 
In particular, our group is involved in the challenge of estimating this background using Neural Networks. 
        </p>
        </br>
        <h2 class="western">Neural Networks and background estimation</h2> 

        <p class="block-text">
        The fully data-driven background estimation with the use of Neural Networks is a pretty novel, yet very exciting field to get involved in. 
The basic idea behind this task is to use the kinematic information from different jet-mutliplicity events in the control regions (where we do not expect our di-Higgs events) to infer the background in the signal rich region. 
Because of the novelty of the technique, a lot has to be considered, for example, network architecture and optimization, choice of input variables, uncertainty assessment. 
All these components have great influence on the final physics result while their development directly contributes to the increasingly important field of machine learning and data science in general. 
        </p>
        </br>
        


<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>