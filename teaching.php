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
    <title>Teaching</title>
    <!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        <h1 class="western">Teaching</h1> 
        
        <h2 class="western">Courses taught by Prof. Dr. Schöning</h2>

        <?php
        // Fetch the content from an external PHP file
        $url = "https://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/";
        $content = file_get_contents($url);

        if ($content !== false) {
            // Remove everything before the main content
            $content = preg_replace('/.*?<h1>Prof\. Dr\. Andre Sch&ouml;ning<\/h1>/s', '', $content);

            $content = preg_replace('/.<h2>Vorlesungen und Lehrveranstaltungen<\/h2>/s', '<h3>Lectures and Seminars</h3>', $content);
            $content = preg_replace('/.<h2>frühere Vorlesungen und Lehrveranstaltungen<\/h2>/s', '<h3>Previous Lectures</h3>', $content);
            $content = preg_replace('/.<table border="1" style="border-collapse: collapse" bordercolor="#000"  cellpadding="5" cellspacing="0">/s', '<table border="0" style="border-collapse: collapse" bordercolor="#000"  cellpadding="4" cellspacing="0">', $content);

            // Remove everything after the footer (closing body, scripts, additional HTML)
            $content = preg_replace('/.<\/body>.*?<\/html>/s', '</body></html>', $content);

            // Output the cleaned content
            echo $content;
        } else {
            echo "<p>Error fetching content.</p>";
        }
        ?>
        <h2 class="western">Courses taught by other Members of the Group</h2>
        <h3>Lectures and Seminars</h3>

        <table border="0" style="border-collapse: collapse" bordercolor="#000"  cellpadding="4" cellspacing="0">

        <tr> 
            <td> <b> SS 2024 </b> </td>
            <td> <a 
        href="https://uebungen.physik.uni-heidelberg.de/vorlesung/20241/1861">
        <b> Master Seminar: Challenges in Particle Tracking: Detectors, Methods and
            AI </b> </a> </td>
        </tr>
        <tr> 

        <tr> 
            <td> <b> SS 2024 </b> </td>
            <td> <a
        href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">
        <b> Particle Physics Colloquium</b> </a> </td>
        </tr>
        <tr> 

        </table>

        <b>  </b>
        <P>  </P>
        <b>  </b>

        <h3>Previous Lectures</h3>

        <table border="0" style="border-collapse: collapse" bordercolor="#000"  cellpadding="4" cellspacing="0">

        <tr> 
            <td> <b> WS 2023/4 </b> </td>
            <td> <a 
        href="http://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/Accelerator">
        <b> Lecture: Introduction to  Accelerator Physics </b> </a> </td>
        </tr>
        <tr> 

        <tr> 
            <td> <b> WS 2023/4 </b> </td>
            <td> <a
        href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">
        <b> Particle Physics Colloquium</b> </a> </td>
        </tr>

        </tr>
        <td> <b>  </b> </td>
        <tr>

        <tr> 
        <tr> 
            <td> <b> SS 2023 </b> </td>
            <td> <a
            href="https://uebungen.physik.uni-heidelberg.de//vorlesung/20231/pep2">
            <b> Lecture: Experimental Physics II (PEP2) </b> </a> </td>
        </tr>

        <tr> 
        <tr> 
            <td> <b> SS 2023 </b> </td>
            <td> <a
        href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">
        <b> Particle Physics Colloquium</b> </a> </td>
        </tr>

        <tr> 
        <tr> 
            <td> <b> SS 2022 </b> </td>
            <td> <a
            href="http://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/Poster_prak23.pdf">
            <b> Practical Particle Physics Course at the Paul-Scherrer Institut (Schweiz)</b> </a> </td>
        </tr>


        </tr>
        <td> <b>  </b> </td>
        <tr>



        <tr> 
            <td> <b> WS 2022/3 </b> </td>
            <td> <a
        href="">
        <b> Tutorial Experimental Physics I (PEP1)</b> </a> </td>
        </tr>
        <tr> 

        </table>

        <b>  </b>
        <P>  </P>
        <b>  </b>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->

    </div>
</body>
</html>

<?php
include($footerInc); 
?>
