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
    <style>
    table {
        border-collapse: collapse;
        border-color: white !important;
        width: auto !important;
    }
    td {
        width: auto !important;
    }
    </style>
</head>

<body>
    <div class="sub-body">
    

<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        
        <h1 class="western">Theses Opportunities</h1> 

        <?php
// Fetch the content from an external PHP file
$url = "https://www.physi.uni-heidelberg.de/Jobs/jobs.php";
$content = file_get_contents($url);

if ($content !== false) {
    // Remove everything before the main content
    $content = preg_replace('/.*?<h2>Bachelorarbeiten<\/h2>/s', '<body><h2>Bachelor Theses</h2>', $content);
    $content = preg_replace('/.<\/div><h2>Master Arbeiten<\/h2>/s', '</div><h2>Master Theses</h2>', $content);

    // Modify the table to remove width and set the border color to white
    $content = preg_replace('/<table border=\'1\' style=\'border-collapse: collapse\' bordercolor=\'#000\' width=\'650\' cellpadding=\'5\' cellspacing=\'0\'>/s',
        '<table style="border-collapse: collapse; border-color: white; width: auto;" cellpadding="4" cellspacing="0">', $content);

    // Also remove any width attributes in <td> and ensure it adjusts dynamically
    $content = preg_replace('/<td width=[\'"]?450[\'"]?>/s', '<td>', $content);

    // Remove everything after the footer (closing body, scripts, additional HTML)
    $content = preg_replace('/.<\/div><h2>Projektpraktika<\/h2>.*?<\/html>/s', '</div></body></html>', $content);

    // Remove rows that do not contain "André Schöning"
    $content = preg_replace_callback(
        '/<tr>(.*?)<\/tr>/s',
        function ($matches) {
            // Check if "André Schöning" or variations appear inside the row
            if (preg_match('/André Schöning|Andre Schöning/', $matches[1])) {
                return "<tr>" . $matches[1] . "</tr>"; // Keep the row
            }
            return ''; // Remove the row
        },
        $content
    );

    // Remove André Schöning's td from the rows (cleanup)
    $content = preg_replace(
        '/<td><a href=\'http:\/\/www\.physi\.uni-heidelberg\.de\/Mitarbeiter\/madetails\.php\?fakid=16010\'.*?>André Schöning<\/a>,?\s*<\/td>/s',
        '',
        $content
    );

    // Remove André Schöning's td for "Andre Schöning"
    $content = preg_replace(
        '/<td><a href=\'http:\/\/www\.physi\.uni-heidelberg\.de\/Mitarbeiter\/madetails\.php\?fakid=16208\'.*?>Andre Schöning<\/a>,?\s*<\/td>/s',
        '',
        $content
    );

    // Output the cleaned content
    echo $content;
} else {
    echo "<p>Error fetching content.</p>";
}
?>


<h3 class="western">Past Theses</h2>   

<?php
  physi_publications("gruppe='ATLAS' OR gruppe = 'mu3e' OR titel='Characterization of a Monolithic Pixel Sensor Prototype in HV-CMOS Technology for the High-Luminosity LHC' OR autor='Arthur E. Bolz' OR autor='Sebastian Dittmeier'
  OR autor='Aleem Ahmad Tariq Sheikh'");
?>



<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->
        <br>
    </div>
</body>
</html>

<?php
include($footerInc); 
?>
