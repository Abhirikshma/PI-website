<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
	<script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
</head>

<body lang="en-US" dir="ltr">
	<div class = "sub-body">
		<br/>
		<h1 class="western" style="text-align: center;">Welcome to Prof. Schöning's High Energy  Group</h1> 
		
		<!-- Collage of our pictures -->
		<div class="row" style="text-align: center;" id="image-container">
			<script>
			// Fetch the list of images from the PHP script and loop over them to show collage
				fetch("<?php echo dirname($subpath);?>/assets/inc/read_images.php")	
				.then(response => response.json())
				.then(images => {
					const container = document.getElementById('image-container');
					// Empty space on the sides of the collage
					container.style.marginLeft = '20%';
					container.style.marginRight = '20%';

					images.forEach(image => {
						const imageElement = document.createElement('a');
						imageElement.href = "<?php echo dirname($subpath);?>/people.php";
						imageElement.style.marginLeft = '2px'; // Add space on the left of each image
						imageElement.style.marginRight = '2px'; // Add space on the right of each image

		const img = document.createElement('img');
		img.src = `<?php echo $figures;?>/group_members/${image}`;
		img.alt = image;
		img.style.width = '120px';  // Set the desired width for the image
      	img.style.height = '160px'; // If you want to set the height too
     	img.style.objectFit = 'cover';  // Ensure the image maintains aspect ratio

						imageElement.appendChild(img);
						container.appendChild(imageElement);
					});
				})
				.catch(err => console.error('Error loading images:', err));
			</script>
		</div>

		<p style="margin-bottom: 0cm; text-align:center;">
			Our group is involved in several research projects in the field of experimental particle physics,
            with a focus on the study of fundamental particles and their interactions.
            This includes the participation in the ATLAS experiment at the Large Hadron Collider (LHC) at CERN,
            the Mu3e experiment at PSI and the development of new high resolution Silicon detector technologies.
		</p>
	
		<h2 style="text-align: center;">Our Research Subgroups</h2>
		<!-- Dropdown menu with 3 buttons for the research subgroups -->	
		<div class ="dropdown-container", style="text-align: center; width: 100%;" >
			<div class="dropdown", style="width:  33%;" >
				<button class="dropdown-btn">Mu3e</button>
				<div class="dropdown-content">
					<a href="<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php">
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<img src="<?php echo $figures;?>/mu3e.jpg" alt="mu3e-exp" style="width:40%; object-fit: caution;">
							<p style="text-align: justify; width: 55%;object-fit: caution;">
								Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
								Its goal is to search for an anti-muon decaying into two positrons and one electron, \(\small \mu^+~\rightarrow~e^+ e^- e^+\). 
								This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
								at very low branching ratios \(\small\mathcal{O}(10^{-50})\).
								While the current limit for the branching ratio is about \(\small 10^{-12}\), Mu3e aims to exclude it,
								or observe it, at a sensitivity of \(\small 10^{-16}\).
							</p>
						</div>
					</a>
				</div>
  			</div>
			  <div class="dropdown", style="width: 33%;" >
    			<button class="dropdown-btn">ATLAS</button>
    			<div class="dropdown-content">
				<a href="<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php">
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<img src="<?php echo $figures;?>/atlas.png" alt="atlas-exp" style="width:40%">
							<p style="text-align: right; width: 55%;">
								The ATLAS experiment is one of the four large experiments currently conducted at the Large Hadron Collider (LHC) at CERN.
								It is a general-purpose detector, aiming to provide precise measurements of the Standard Model's parameters and to investigate
								BSM physics at the high energy scales reached by the LHC.
							</p>
						</div>
					</a>
    			</div>
  			</div>
			<div class="dropdown", style="width:  33%;" >
    			<button class="dropdown-btn">HV-MAPS</button>
    			<div class="dropdown-content">
				<a href="<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php">
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<img src="<?php echo $figures;?>/mu3e.jpg" alt="hvmaps-exp" style="width:40%">
							<p style="text-align: right; width: 55%;">
								Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
								The goal is to search for the anti-muon decay into two positrons and one electron. 
									This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
							at very low branching ratios. While the current limit for the branching ratio is about, Mu3e aims to exclude it, or observe it, at a sensitivity of.
							</p>
						</div>
					</a>
    			</div>
			</div>
		</div>
    
		<div class="content"> <!-- Put in a new div to ensure this is pushed down when the buttons are opened -->
			<h2 style="text-align: center;"> News</h2>
			<ul> 
				<li> Our group members had two hackaton days to create this new website!</li>
					<video width="300" height=auto controls autoplay muted loop>
						<source src="<?php echo $figures;?>/hackaton.MOV">
						Your browser does not support the video tag.<!-- Error message if video isn't supported -->
					</video>
			</ul>
		</div>
		<br>


	<!-- Load Javascript to toggle buttons visibility -->
	<script type="text/javascript" src="<?php echo $buttonsJs;?>"></script>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include($footerInc); 
?>
