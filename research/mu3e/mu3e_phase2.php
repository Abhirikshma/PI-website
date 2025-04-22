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
        <img src='<?php echo $figures;?>/mu3e/mu3e-phase2.png' width='100%' alt='mu3e_phase2_header' /> 

        <h1 class="western">Mu3e Experiment Phase-II R&D</h1> 
        <h2 class="western">Phase-II Motivations</h2> 
        <ul style="text-align: justify;"    > 
            The Mu3e Experiment aims to search for the decays of muons into an electron and a pair of positrons, <mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="0" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D707 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-mo class="mjx-n" space="4"><mjx-c class="mjx-c2192"></mjx-c></mjx-mo><mjx-msup space="4"><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>μ</mi><mo>+</mo></msup><mo accent="false" stretchy="false">→</mo><msup><mi>e</mi><mo>+</mo></msup><msup><mi>e</mi><mo>+</mo></msup><msup><mi>e</mi><mo>−</mo></msup></math></mjx-assistive-mml></mjx-container>, which is only foreseen in the Standard Model at a very low branching rate (<mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="1" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-mo class="mjx-n"><mjx-c class="mjx-c223C"></mjx-c></mjx-mo><mjx-msup space="4"><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c30"></mjx-c></mjx-mn><mjx-script style="vertical-align: 0.393em;"><mjx-texatom size="s" texclass="ORD"><mjx-mo class="mjx-n"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo><mjx-mn class="mjx-n"><mjx-c class="mjx-c35"></mjx-c><mjx-c class="mjx-c34"></mjx-c></mjx-mn></mjx-texatom></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>∼</mo><msup><mn>10</mn><mrow data-mjx-texclass="ORD"><mo>−</mo><mn>54</mn></mrow></msup></math></mjx-assistive-mml></mjx-container>). 
            Any observations in this decay channel above the branching ratio will be a clear indicator of the violation of lepton flavour conservation. 
            The experiment is under commissioning at the Paul Scherrer Institute (PSI), in Villigen, Switzerland. 
        </ul>
        <h2 class="western">Research & Development Activites</h2> 
        <ul> 
            <h3 class="western">MuPix 2.0</h3>
            <ul style="text-align: justify;background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
            In order to withstand the higher rate of the upcoming HIMB beamline, more robust silicon sensors need to be developed in order to exploit the full potential for physics discovery.
            Three types of sensors, generally with lower power consumption and serial powering but with different requirements need to be produced: more granular pixel sensors with multiple 10 Gbps links for the Vertex layers, ultra fast timing sensors with at least 100 ps timing resolution for the timing layer replacing the scintillating fibres, and improved time resolution down to 1 ns for the Outer Pixel layers.
            <br>
            </br>
            <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/phase2-sensors.png" alt="mu3e-p2-sensors" style="width:75%;min-width:200px;height:auto;">
            </div>
            </ul>
            <h3 class="western">Phase-II Vertex Detector & DAQ</h3>
            <ul style="text-align: justify;background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
            A longer Vertex detector, with at least 10 chips instead of the current six, is envisioned to be deployed for Mu3e Phase-2. Carbon fibre reinforcing structures are an ideal candidate to support the detector, while detector services will likely need a revamp & R&D in order to simplify it for future commissioning. 
            Other possible avenues for improvement include a redesign of the High-Density Interconnects (HDIs), endpiece flexible printable circuit boards (flex PCBs) and an earlier switch to optical cables for detector communication.
            </ul>
            <h3 class="western">Simulation Studies</h3>
            <ul style="text-align: justify;background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
            Better detector simulations via Geant 4 and improved reconstruction algorithms are needed in order to have a control of, and to suppress, the far higher accidental background events brought upon by the more intense HIMB rate.
            </ul>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>