<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link rel="stylesheet" href="<?php echo $headerCss;?>">    
</head>

<body>

<header>
    <nav class="tab-bar" style="text-align: center;">
        <div class="logo">
            <a href="https://www.physi.uni-heidelberg.de/"> <!-- Add link here -->
                <img src="<?php echo $figures;?>/logo-pi.png" alt="Logo">
            </a>
        </div>

        <!-- Hamburger Menu Button -->
        <button class="hamburger" onclick="toggleMenu()">☰</button>

        <ul class="menu">
            <li><a href="<?php echo dirname($subpath);?>/main_page.php">Home</a></li>
            <li class="dropdown">
                <!-- this style prevents from clicking on the word in the menu -->
                <a style="pointer-events: none; cursor: default;" href="#">Research</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php">Mu3e</a></li>
                    <li><a href="<?php echo dirname($subpath);?>/research/ATLAS/ATLAS_mainpage.php">ATLAS</a></li>
                    <li><a href="<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php">HV-MAPS</a></li>
                </ul>
            </li>
            <li class="dropdown"> 
                <!-- this style prevents from clicking on the word in the menu -->
                <a style="pointer-events: none; cursor: default;" href="#">Publications</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo dirname($subpath);?>/publications/mu3e_pub.php">Mu3e</a></li>
                    <li><a href="<?php echo dirname($subpath);?>/publications/atlas_pub.php">ATLAS</a></li>
                    <li><a href="<?php echo dirname($subpath);?>/publications/hvmaps_pub.php">HV-MAPS</a></li>
                </ul>
            </li>
            <li><a href="<?php echo dirname($subpath);?>/teaching.php">Teaching</a></li>
            <li><a href="<?php echo dirname($subpath);?>/people.php">People</a></li>
            <li><a href="<?php echo dirname($subpath);?>/positions.php">Theses Opportunities</a></li>
        </ul>
    </nav>
</header>


<!-- JavaScripts -->
<script type="text/javascript" src="<?php echo $menu_mobile_toggleJs;?>"></script>


</body>
</html>