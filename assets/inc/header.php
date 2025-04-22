<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $headerCss;?>">    
</head>

<body>

<header>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light"> <!-- Adjust classes (e.g., navbar-dark bg-dark) as needed -->
        <div class="container-fluid"> <!-- Use container-fluid for full width -->
            <a class="navbar-brand" href="https://www.physi.uni-heidelberg.de/">
                <img src="<?php echo $figures;?>/logo-pi.png" alt="Logo" height="30"> <!-- Adjust height as needed -->
            </a>

            <!-- Bootstrap Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Added ms-auto back -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/main_page.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="researchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="-1" aria-disabled="true"> <!-- Added tabindex and aria-disabled -->
                            Research
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="researchDropdown">
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php">Mu3e</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php">ATLAS</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php">HV-MAPS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="-1" aria-disabled="true"> <!-- Added tabindex and aria-disabled -->
                            Publications
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="publicationsDropdown">
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/mu3e_pub.php">Mu3e</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/atlas_pub.php">ATLAS</a></li>
                            <li><a class="dropdown-item" href="<?php echo dirname($subpath);?>/publications/hvmaps_pub.php">HV-MAPS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/teaching.php">Teaching</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/people.php">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo dirname($subpath);?>/positions.php">Theses Opportunities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</body>
</html>