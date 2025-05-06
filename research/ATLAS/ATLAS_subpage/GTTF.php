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
        <h1 class="western"> Track fitting on GPUs (and FPGAs)</h1> 
        </br>
        <h2 class="western">Track fitting</h2> 

        <p class="block-text">
            A track fit refers to the process of reconstructing the trajectory of a charged particle from measurements recorded by particle (tracking) detectors. The detectors capture
            information such as the position and energy of the particle at various points along its path. The track fitting algorithm analyzes this data to determine the most probable 
            trajectory the particle followed as it traversed the detector. This reconstructed track is essential for understanding the properties of the particles involved, including their type, 
            momentum, and the location where they were produced. For the ATLAS Event Filter system, we currently investigate two different algorithms and their performance on hardware 
            accelerators. 
        </p>
        </br>
        <h2 class="western">General Triplet Track Fit</h2> 

        <p class="block-text">
            The General Triplet Track Fit is a new, <b>parallelizable track fitting algorithm</b>. It is an extension of the Multiple-Scattering-only Triplet Fit developed for the Mu3e experiment, by 
            including hit uncertainties in the calculations. This is essential because, at high particle momenta, uncertainties in the measured position of the hits become the predominant 
            source of uncertainty in determining particle momenta. The fitting process operates on sets of three hits (triplets), and forms tracks by combining triplets with shared hits. 
            <b>Implementations on CPU, GPUs and AMD FPGAs</b> are currently under development. 
        </p>
        </br>
        <div class="image-pair">
            <img src='<?php echo $figures;?>/ATLAS/global_fit_triplet.png' alt="Triplets">
            <img src='<?php echo $figures;?>/ATLAS/global_fit_track.png' alt="Track">
        </div>
        </br>
        <p class="caption-text">
            Triplets are constructed from three consecutive hits (left). The combined triplets form a track through all hits (right).
        </p>
        </br>
        <p class="block-text">
        <b>What you learn:</b> Requires coding in C++ in general, CUDA for Nvidia GPUs, HLS for FPGAs. Additionally Git for version control (collaborating between developers), 
            Python (mostly for data visualization). 
        </p>
        </br>
        <h2 class="western">Linearized &chi;<sup>2</sup> Track Fit</h2> 

        <p class="block-text">
            The linearized &chi;<sup>2</sup> track fit builds on top of a Principal Component Analysis (PCA) algorithm to determine the track parameters for a given set of clusters. A specific PCA is only 
            applicable within a small detector region, referred to as a sector. The minimization of the distance between the expected and real track parameters in the PCA follows a 
            &chi;<sup>2</sup>-distribution, allowing the use of the &chi;<sup>2</sup>-variable to evaluate the track quality, and remove bad candidates before the actual evaluation of the track parameters. 
            This method, originally intended to be used for the Hardware Track Trigger project, has been successfully implemented on an FPGA. Its implementation on Nvidia GPUs is 
            currently under way. 
        </p>
        </br>
        
        
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>