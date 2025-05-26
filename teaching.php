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
    <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">
</head>

<body>
    <div class="sub-body">

<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        
    <div class="publications-container">
        <h1 class="page-title">Courses taught by Prof. Dr. Schöning</h1>
        <?php

function transformSemesterContent($content, $semester, &$content_new) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $rows = $xpath->query('//tr');
    $items = [];

    // Normalize input semester
    $normalizedSemester = preg_replace('/\s+/', ' ', trim($semester));

    foreach ($rows as $row) {
        $cells = $row->getElementsByTagName('td');
        if ($cells->length < 2) continue;

        // Get raw text from first cell, trim & normalize
        $firstCellRaw = $cells->item(0)->textContent ?? '';
        $firstCell = preg_replace('/\s+/', ' ', trim($firstCellRaw));

        if ($firstCell === $normalizedSemester) {
            $secondCell = $cells->item(1);
            $linkElement = $secondCell->getElementsByTagName('a')->item(0);
            if ($linkElement) {
                $title = trim($linkElement->textContent);
                $href = $linkElement->getAttribute('href');
                $items[] = ['title' => $title, 'href' => $href];
            }
        }
    }

    // Only render output if we have matching entries
    if (!empty($items)) {
        $content_new .= "\n<!-- Year divider -->\n";
        $content_new .= "<div class=\"publication-year\">\n";
        $content_new .= "    <h3>" . htmlspecialchars($semester, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</h3>\n";
        $content_new .= "</div>\n\n";
        $content_new .= "<ul class=\"publications\">\n";

        foreach ($items as $item) {
            $title = htmlspecialchars($item['title'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $href = htmlspecialchars($item['href'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $content_new .= "    <li>\n";
            $content_new .= "        <p class=\"title\">$title</p>\n";
            $content_new .= "        <div class=\"publication-links\">\n";
            $content_new .= "            <span class=\"link-wrapper\"><a href=\"$href\">Learn more >>></a></span>\n";
            $content_new .= "        </div>\n";
            $content_new .= "    </li>\n";
        }

        $content_new .= "</ul>\n";
    }
}






        // Fetch the content from an external PHP file
        $url = "https://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/";
        $content = file_get_contents($url);

        if ($content !== false) {
            // Split everything into current and previous lectures
            $current = preg_replace('/.*?<h2>Vorlesungen und Lehrveranstaltungen<\/h2>/s', '<h2>Current Lectures and Seminars</h2>', $content);
            $current = preg_replace('/<h2>frühere Vorlesungen und Lehrveranstaltungen<\/h2>.*$/s', '', $current);
            $previous = preg_replace('/.*?<h2>frühere Vorlesungen und Lehrveranstaltungen<\/h2>/s', '<h2>Previous Lectures</h2>', $content);
            $previous = preg_replace('/<td>\s*<b>\s*(WS )(\d{2}\/\d{2})\s*<\/b>\s*<\/td>/s', '<td><b> \\1 20\\2 </b></td>', $previous);
            $previous = preg_replace('/<td>\s*<b>\s*(WS )(\d{4}\/)(\d{1})\s*<\/b>\s*<\/td>/s', '<td><b>\\1\\2 2\\3</b></td>', $previous);
            $previous = preg_replace('/<td>\s*<b>\s*(WS )(\d{4}\/)\s*(\d{2})\s*<\/b>\s*<\/td>/s', '<td><b>\\1\\2\\3</b></td>', $previous);
            $previous = preg_replace('/.<\/body>.*?<\/html>/s', '</body></html>', $previous);
            
            // find current semester
            preg_match('/<td>\s*<b>(\s*SS \d{4}\s*|\s*WS \d{4}\/\d{2}\s*)<\/b>\s*<\/td>/', $current, $matches);
            $current_semester = $matches[1] ?? 'Unknown Semester';

            // find all previous semesters
            preg_match_all('/<td>\s*<b>(\s*SS\s*\d{4}\s*|\s*WS\s*\d{4}\/\d{2}\s*)<\/b>\s*<\/td>/', $previous, $all_matches);
            $unique_semesters = array_unique($all_matches[1]);
            $previous_semester = implode(', ', $unique_semesters);

            // Modify Output for current semester
            $current_new = '';
            transformSemesterContent($current, $current_semester, $current_new);

            // Modify Output for previous semesters
            $previous_new = '';
            foreach ($unique_semesters as $semester) {
                transformSemesterContent($previous, $semester, $previous_new);
            }
            $previous_new = preg_replace('/<!-- Year divider -->\s*<div class="publication-year">\s*<h3>\s*SS\s*2020\s*<\/h3>\s*<\/div>/s', '<!-- Year divider -->
        <div class="publication-year">
            <h3>WS 2020/21</h3>
        </div>

        <!-- Example publication list -->
        <ul class="publications">
            <li>
                <p class="title">Sabbatical</p>
            </li>
        </ul>
        
        <!-- Year divider -->
        <div class="publication-year">
            <h3>SS 2020</h3>
        </div>', $previous_new);



            // Output the cleaned content
            echo "<h2>Current Lectures and Seminars</h2>";
            echo $current_new;
            echo "</br>";
            echo "<h2>Previous Lectures</h2>";
            echo $previous_new;
            echo "</br></br></br></br></br></br>";
        } else {
            echo "<p>Error fetching content.</p>";
        }
        ?>
    </div>

    <div class="publications-container">
        <h1 class="page-title">Courses taught by other Members of the Group</h1>
        <h2>Previous Lectures</h2>
        <!-- Year divider -->
        <div class="publication-year">
            <h3>SS 2024</h3>
        </div>

        <!-- Example publication list -->
        <ul class="publications">
            <li>
                <p class="title">Master Seminar: Challenges in Particle Tracking: Detectors, Methods and AI</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="https://uebungen.physik.uni-heidelberg.de/vorlesung/20241/1861">Learn more >>></a></span>
                </div>
            </li>
            <li>
                <p class="title">Particle Physics Colloquium</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">Learn more >>></a></span>
                </div>
            </li>
        </ul>

        <!-- Year divider -->
        <div class="publication-year">
            <h3>WS 2024/23</h3>
        </div>

        <!-- Example publication list -->
        <ul class="publications">
            <li>
                <p class="title">Lecture: Introduction to Accelerator Physics</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/Accelerator">Learn more >>></a></span>
                </div>
            </li>
            <li>
                <p class="title">Particle Physics Colloquium</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">Learn more >>></a></span>
                </div>
            </li>
        </ul>

        <!-- Year divider -->
        <div class="publication-year">
            <h3>SS 2023</h3>
        </div>

        <!-- Example publication list -->
        <ul class="publications">
            <li>
                <p class="title">Lecture: Experimental Physics II (PEP2)</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="https://uebungen.physik.uni-heidelberg.de//vorlesung/20231/pep2">Learn more >>></a></span>
                </div>
            </li>
            <li>
                <p class="title">Practical Particle Physics Course at the Paul-Scherrer Institute (Switzerland)</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/Poster_prak23.pdf">Learn more >>></a></span>
                </div>
            </li>
            <li>
                <p class="title">Particle Physics Colloquium</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/Veranstaltungen/vortraege.php?kol=PC">Learn more >>></a></span>
                </div>
            </li>
        </ul>

        <!-- Year divider -->
        <div class="publication-year">
            <h3>WS 2022/23</h3>
        </div>

        <!-- Example publication list -->
        <ul class="publications">
            <li>
                <p class="title">Tutorial Experimental Physics I (PEP1)</p>
                <div class="publication-links">
                    <span class="link-wrapper"><a href="https://uebungen.physik.uni-heidelberg.de/vorlesung/20222/pep1">Learn more >>></a></span>
                </div>
            </li>
        </ul>

    </br>
    </br>

<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->

    </div>
</body>
</html>

<?php
echo '</div>'; // Close the last opened div for the page content
include($footerInc); 
?>
