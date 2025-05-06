<?php
$headerInc = $incpath . "/header.php";
$footerInc = $incpath . "/footer.php";
$assets = dirname($subpath) . "/assets";
$figures = $assets . "/figs";
$designCss = $assets . "/css/design.css";
$publicationCss = $assets . "/css/publication.css";
$headerCss = $assets . "/css/header.css";
$footerCss = $assets . "/css/footer.css";
$buttonsJs = $assets . "/js/buttons.js";
$menu_mobile_toggleJs = $assets . "/js/menu_mobile_toggle.js";

$ATLASMainpagePath = "/research/ATLAS/ATLAS_mainpage.php";
$mu3eMainpagePath = "/research/mu3e/mu3e_mainpage.php";
$HVMapsMainpagePath = "/research/HV-Maps/HV-Maps_mainpage.php";

$siteRoot = dirname($subpath); // Gets the site root for proper URL construction
$ATLASMainpageURL = $siteRoot . $ATLASMainpagePath;
$mu3eMainpageURL = $siteRoot . $mu3eMainpagePath;
$HVMapsMainpageURL = $siteRoot . $HVMapsMainpagePath;
$ATLASLogo = $figures . "/ATLAS/ATLAS_logo_white.svg";
$mu3eLogo = $figures . "/mu3e/mu3e_logo_white.svg";
$HVMapsLogo = $figures . "/HV-Maps/hv_maps_logo_v4.svg";

// echo $figures;
// echo "<br>";
// echo $headerInc;
// echo "<br>";
// echo $footerInc;
// echo "<br>";
// echo $designCss;
// echo "<br>";
// echo $headerCss;
// echo "<br>";
// echo $footerCss;
// echo "<br>";
// echo $buttonsJs;
// echo "<br>";
?>