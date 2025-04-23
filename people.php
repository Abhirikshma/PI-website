<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
include($incpath . "/config.php");
include($headerInc);
include("header_common_he.php.inc")
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
        <h1 class="western">Group Members</h1> 
        <!-- Use function from PI to get the list from the database -TODO: find out how to make it resizable-->
        <?php
            $title = "HE group";
            $sel = ("gruppe2='ATLAS' OR gruppe2='ATLAS,H1' OR gruppe3='ATLAS' 
                                                                    OR gruppe3='ATLAS,H1' OR gruppe2='H1' OR gruppe2='mu3e'
                                                                    OR gruppe2='mu3e,H1'");  
            physi_maliste_we($sel);
        ?>
        <br/>
        <h2 class="western">Former Group Members</h2>   

        <div style="width:95%; margin:auto;">
            <h3>PhD Students</h3>

            Dr. Christof Sauer <br>
            Dr. Marta Czurylo <br>
            Dr. Jens Kroeger <br>
            Dr. Alena Weber <br>
            Dr. Adrian Herkert <br>
            Dr. Tamasi Kar <br>
            Dr. Arthur Bolz <br>
            Dr. Mathis Kolb <br>
            Dr. Lennart Huth <br>
            Dr. Ann-Kathrin Perrevoort <br>
            Dr. Dorothea vom Bruch <br>
            Dr. Maddalena Guilini <br>
            Dr. Moritz Kiehn <br>
            Dr. David Sosa <br>
            Dr. Rohin Narayan <br>
            Dr. Sebastian Schmitt <br>
            Dr. Gregor Kasieczka <br>
            Dr. Hayk Pirumov<br>
            Dr. Florian Huber <br>
        
            <h3>Master</h3>
            Tobias Linker <br>
            Poppy Hicks <br>
            Sachin Gupta <br>
            Dohun Kim <br>
            Jan Hammerich <br>
            Lars Noehte <br>
            Christof Sauer <br>
            Lukas Gerritzen <br>
            Caren Kresse <br>
            Jonathan Phillip <br>
            Jan Patrick Hammerich <br>
            Arthur Bolz <br>
            Mathis Kolb <br>
            Sebastian Dittmeier <br>
            David Sosa <br>

            <h3>Bachelor</h3>
            David Karres <br>
            Aleem Sheikh <br>
            Jakob Stricker <br>
            Stephan Lachnit <br>
            Florian Frauen <br>
            Marius Menzel <br>
            Sebastian Preuss <br>
            Lukas Mandok <br>
            Konstantin Neureither <br>
            Christoph Blattgerste <br>
            Michele Blago <br>
            Jens Petersen <br>
            Thomas Hugle <br>
            Sven Pirner <br>
            Daniel Glodeck <br>

            <h3>Diploma</h3>
            Robert Weidel <br>
            Patricia Sauer <br>
            Sascha Lischer <br>
            Arno John <br>
        </div>

<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->
    </div>
</body>
</html>

<?php
include($footerInc); 
?>