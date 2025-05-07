<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
include($incpath . "/config.php");
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>HE Group</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
	<script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
</head>

<body lang="en-US" dir="ltr">
	<div class = "sub-body">
		<br/>
		<h1 class="western" style="text-align: center;">Welcome to Prof. Schöning's High Energy Group</h1> 
		
		<?php
            // Include the image grid component
            include("image_grid.php");
        ?>
		<br/>
		<p style="margin-bottom: 0cm; text-align:center;">
			Our group is involved in several research projects in the field of experimental particle physics,
            with a focus on the study of fundamental particles and their interactions.
            This includes the participation in the ATLAS experiment at the Large Hadron Collider (LHC) at CERN,
            the Mu3e experiment at PSI and the development of new high resolution Silicon detector technologies.
		</p>
		<br/>
	
		<h2 style="text-align: center;">Our Research Subgroups</h2>
		<!-- Replace dropdown menu with Bootstrap cards -->
		<div class="row justify-content-center">
			<!-- Mu3e Card -->
			<div class="col-md-4 mb-4">
				<a href="<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php" class="card-link">
					<div class="card h-100 research-card">
						<img class="card-img-top" src="<?php echo $figures;?>/mu3e.jpg" alt="mu3e-exp">
						<div class="card-body">
							<h5 class="card-title">Mu3e</h5>
							<p class="card-text">
								Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
								Its goal is to search for an anti-muon decaying into two positrons and one electron, \(\small \mu^+~\rightarrow~e^+ e^- e^+\). 
								This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
								at very low branching ratios \(\small\mathcal{O}(10^{-50})\).
							</p>
							<div class="mobile-learn-more">
								<button class="btn btn-danger" 
								onclick="location.href='<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php';">
									Learn More <i class="fas fa-arrow-right"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<!-- ATLAS Card -->
			<div class="col-md-4 mb-4">
				<a href="<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php" class="card-link">
					<div class="card h-100 research-card">
						<img class="card-img-top" src="<?php echo $figures;?>/atlas.png" alt="atlas-exp">
						<div class="card-body">
							<h5 class="card-title">ATLAS</h5>
							<p class="card-text">
								The ATLAS experiment is one of the four large experiments currently conducted at the Large Hadron Collider (LHC) at CERN.
								It is a general-purpose detector, aiming to provide precise measurements of the Standard Model's parameters and to investigate
								BSM physics at the high energy scales reached by the LHC.
							</p>
							<div class="mobile-learn-more">
								<button class="btn btn-danger" 
								onclick="location.href='<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php';">
									Learn More <i class="fas fa-arrow-right"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<!-- HV-MAPS Card -->
			<div class="col-md-4 mb-4">
				<a href="<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php" class="card-link">
					<div class="card h-100 research-card">
						<img class="card-img-top" src="<?php echo $figures;?>/HV-Maps/hybrid_monolithic.png" alt="hvmaps-exp">
						<div class="card-body">
							<h5 class="card-title">HV-MAPS</h5>
							<p class="card-text">
								The High Energy of the Physics Institute is developing High Voltage – Monolithic Active Pixel Sensors (HV-MAPS) for future particle 
								physics experiments. Pixel sensors provide spatial information at micrometer precision for particles in the momentum range from a few MeV
								to hundreds of GeV/c.
							</p>
							<div class="mobile-learn-more">
								<button class="btn btn-danger" 
								onclick="location.href='<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php';">
									Learn More <i class="fas fa-arrow-right"></i>
								</button>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<br/>

        
		<div class="content">
			<h2 style="text-align: center;"> News</h2>
			<ul style="list-style-type: none; "> 
				<li style="margin-bottom: 10px;"> <b style="color: var(--PI-darkred);">Mar 31 - Apr 4, 2025</b> Abhi, David F. and Giulia present their work at the <a href = "https://goettingen25.dpg-tagungen.de">DPG Spring Meeting</a></li>
				<li style="margin-bottom: 10px;"> <b style="color: var(--PI-darkred);">Mar 17 - 20, 2025</b> The mu3e group has its annual retreat in Wengen, Switzerland </li>
					<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 10px;">
						<img src="<?php echo $figures;?>/news/wengen_andre.jpg" alt="Andre" style="width: 150px; height: auto; object-fit: cover;">
						<img src="<?php echo $figures;?>/news/wengen_heiko.jpg" alt="Heiko" style="width: 150px; height: auto; object-fit: cover;">
						<img src="<?php echo $figures;?>/news/wengen_joey.jpg" alt="Joey" style="width: 150px; height: auto; object-fit: cover;">
						<img src="<?php echo $figures;?>/news/wengen_thomi.jpg" alt="Thomi" style="width: 150px; height: auto; object-fit: cover;">
					</div>
				<li style="margin-bottom: 10px;"> <b style="color: var(--PI-darkred);">Mar 15, 2025</b> Prof. Schöning publishes <a href="https://doi.org/10.1016/j.nima.2025.170391">"A general track fit based on triplets"</a></li>
				<li style="margin-bottom: 10px;"> <b style="color: var(--PI-darkred);">Feb 11, 2025</b> Our group members have two hackathon days to create this new website!</li>
					<div style="text-align: center;">
						<video width="300" height="auto" controls autoplay muted loop>
							<source src="<?php echo $figures;?>/news/hackaton.MOV">
							Your browser does not support the video tag.<!-- Error message if video isn't supported -->
						</video>
					</div>
			</ul>
		</div>
		<br/>
	</div>
    <?php include($footerInc); ?>
	<script type="text/javascript" src="<?php echo $buttonsJs;?>"></script>
</body>
</html>