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
    <title>Thesis Opportunities</title>
    <!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">
</head>

<body>
    <div class="sub-body">
    

<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        
        <h1 class="western">Theses Opportunities</h1> 

        <?php
        $url = "https://www.physi.uni-heidelberg.de/Jobs/jobs.php";
        $raw_html_content = file_get_contents($url);
        $output_html_for_theses = '';

        if ($raw_html_content !== false) {
            $doc = new DOMDocument();
            // Use @ to suppress warnings from potentially malformed HTML from the source
            // Prepending XML encoding declaration can help with character encoding issues
            @$doc->loadHTML('<?xml encoding="utf-8" ?>' . $raw_html_content);
            $xpath = new DOMXPath($doc);

            // Helper function to extract and format theses
            function extractAndFormatThesesForProfessor(DOMXPath $xpath, $sourceSectionHeading, $displaySectionHeading, $professorKeyword) {
                $thesesData = [];
                $sectionOutput = '';

                // Find the h2 heading for the section
                $headingNodes = $xpath->query("//h2[contains(text(), '$sourceSectionHeading')]");

                if ($headingNodes->length > 0) {
                    $currentHeadingNode = $headingNodes->item(0);
                    
                    // The table is expected inside a <div style="overflow: auto;"> following the h2
                    $tableContainerDiv = $xpath->query("following-sibling::div[contains(@style, 'overflow: auto')][1]", $currentHeadingNode)->item(0);
                    $tableNode = null;
                    if ($tableContainerDiv) {
                        $tableNode = $xpath->query("./table[1]", $tableContainerDiv)->item(0);
                    }

                    if ($tableNode) {
                        $rows = $xpath->query(".//tr", $tableNode);
                        foreach ($rows as $row) {
                            $cells = $xpath->query(".//td", $row);
                            $professorCellText = '';
                            if ($cells->length > 1) { // Professor name is usually in the second cell
                                $professorCellText = $cells->item(1)->nodeValue;
                            }

                            if (strpos($professorCellText, $professorKeyword) !== false) {
                                $titleLinkNode = $xpath->query(".//a", $cells->item(0))->item(0);
                                if ($titleLinkNode) {
                                    $title = trim($titleLinkNode->nodeValue);
                                    $href = trim($titleLinkNode->getAttribute('href'));
                                    // Ensure URL is absolute
                                    if (!preg_match('/^https?:\/\//i', $href)) {
                                        $href = 'http://www.physi.uni-heidelberg.de' . (substr($href, 0, 1) === '/' ? '' : '/') . $href;
                                    }
                                    $thesesData[] = ['title' => $title, 'link' => $href];
                                }
                            }
                        }
                    }
                }

                if (!empty($thesesData)) {
                    // This div.opportunity-section-box will now be inside .all-opportunities-box
                    $sectionOutput .= '<div class="opportunity-section-box">'; 
                    $sectionOutput .= '<h2 class="publication-section-title">' . htmlspecialchars($displaySectionHeading) . '</h2>';
                    $sectionOutput .= '<ul class="opportunity-list">'; 
                    foreach ($thesesData as $thesis) {
                        $sectionOutput .= '<li><a href="' . htmlspecialchars($thesis['link']) . '">' . htmlspecialchars($thesis['title']) . '</a></li>';
                    }
                    $sectionOutput .= '</ul>';
                    $sectionOutput .= '</div>'; 
                }
                return $sectionOutput;
            }

            // Extract Bachelor Theses
            $bachelor_theses_html = extractAndFormatThesesForProfessor($xpath, 'Bachelorarbeiten', 'Bachelor Theses', 'Schöning');
            
            // Extract Master Theses
            $master_theses_html = extractAndFormatThesesForProfessor($xpath, 'Master Arbeiten', 'Master Theses', 'Schöning');

            // If there's content for either, wrap them in the main box
            if (!empty($bachelor_theses_html) || !empty($master_theses_html)) {
                echo '<div class="all-opportunities-box">';
                echo $bachelor_theses_html;
                // Add a small separator if both sections have content and are displayed
                if (!empty($bachelor_theses_html) && !empty($master_theses_html)) {
                    // This could be a styled div or just rely on margins of .opportunity-section-box
                }
                echo $master_theses_html;
                echo '</div>';
            }

        } else {
            echo "<p>Error fetching content for Theses Opportunities.</p>";
        }
        ?>

        <div class="publications-container">
            <div id="past-theses" class="publication-section">
                <h2>Past Theses</h2>   

                <ul class="publications">
                    <?php
                      physi_publications("gruppe='ATLAS' OR gruppe = 'mu3e' OR titel='Characterization of a Monolithic Pixel Sensor Prototype in HV-CMOS Technology for the High-Luminosity LHC' OR autor='Arthur E. Bolz' OR autor='Sebastian Dittmeier'
                      OR autor='Aleem Ahmad Tariq Sheikh'");
                    ?>
                </ul>
            </div>
        </div>


<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->
        <br>
    </div>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const styleTags = document.querySelectorAll('style');
        styleTags.forEach(tag => {
            // Check for the specific @import rule that identifies the problematic block
            if (tag.innerHTML.includes('@import url(https://www.physi.uni-heidelberg.de/design/css/style.css)')) {
                tag.remove();
            }
        });

        const sectionContainer = document.getElementById('past-theses');
        if (!sectionContainer) {
            return;
        }

        const originalUl = sectionContainer.querySelector('ul.publications');
        if (!originalUl) {
            return;
        }

        const tableCell = originalUl.querySelector('table td');
        if (!tableCell) {
            // No table cell found, likely no theses output or structure is different.
            return;
        }

        const newContentFragment = document.createDocumentFragment();
        let currentYearUl = null;

        tableCell.childNodes.forEach(node => {
            if (node.nodeType === Node.ELEMENT_NODE) { // Process only element nodes
                if (node.tagName === 'H3') {
                    // If a currentYearUl exists from the previous year, append it.
                    if (currentYearUl && currentYearUl.hasChildNodes()) {
                        newContentFragment.appendChild(currentYearUl);
                    }
                    
                    const yearDiv = document.createElement('div');
                    yearDiv.className = 'publication-year';
                    yearDiv.appendChild(node.cloneNode(true)); // Clone the H3
                    newContentFragment.appendChild(yearDiv);

                    currentYearUl = document.createElement('ul');
                    currentYearUl.className = 'publications';
                } else if (node.tagName === 'B') {
                    if (!currentYearUl) {
                        // This handles cases where thesis items might appear before any H3,
                        // though the typical structure has H3 first.
                        currentYearUl = document.createElement('ul');
                        currentYearUl.className = 'publications';
                        // If this is the very first set of items without a year, this UL needs to be added to the fragment.
                        // However, the logic appends currentYearUl when next H3 is found or at the end.
                        // For items truly without a year header, they'd be grouped into the first UL.
                    }

                    const li = document.createElement('li');
                    const titleLinkOriginal = node.querySelector('a');

                    if (titleLinkOriginal) {
                        const pTitle = document.createElement('p');
                        pTitle.className = 'title';
                        pTitle.textContent = titleLinkOriginal.textContent;
                        li.appendChild(pTitle);

                        let currentNodePtr = node.nextSibling; // Expected: <br>
                        let authorText = '';
                        let detailsText = '';

                        // Traverse to find <i> (author) and subsequent text node (details)
                        // Skip the <br> immediately after <b>
                        if (currentNodePtr && currentNodePtr.nodeType === Node.ELEMENT_NODE && currentNodePtr.tagName === 'BR') {
                            currentNodePtr = currentNodePtr.nextSibling;
                        }
                        // Skip any whitespace text nodes before <i>
                        while (currentNodePtr && currentNodePtr.nodeType === Node.TEXT_NODE && currentNodePtr.textContent.trim() === '') {
                            currentNodePtr = currentNodePtr.nextSibling;
                        }

                        // Check if current node is <i> for author
                        if (currentNodePtr && currentNodePtr.nodeType === Node.ELEMENT_NODE && currentNodePtr.tagName === 'I') {
                            authorText = currentNodePtr.textContent;
                            // The details text node (e.g., "(Masterarbeit, 2024)") is the next sibling of <i>
                            let detailsNodeCandidate = currentNodePtr.nextSibling;
                            if (detailsNodeCandidate && detailsNodeCandidate.nodeType === Node.TEXT_NODE) {
                                detailsText = detailsNodeCandidate.textContent.trim();
                            }
                        }
                        
                        // Append author if found
                        if (authorText) {
                            li.appendChild(document.createTextNode(authorText));
                            li.appendChild(document.createElement('br'));
                        }

                        // Create and append publication links div
                        const linksDiv = document.createElement('div');
                        linksDiv.className = 'publication-links';
                        const pdfLink = document.createElement('a');
                        pdfLink.href = titleLinkOriginal.href;
                        pdfLink.textContent = 'PDF'; // Or a more descriptive text like "Thesis Document"
                        linksDiv.appendChild(pdfLink);
                        li.appendChild(linksDiv);

                        // Append details text if found
                        if (detailsText) {
                            // Add a leading space if author was also present, for better formatting.
                            li.appendChild(document.createTextNode((authorText ? ' ' : '') + detailsText));
                        }
                        
                        if (currentYearUl) {
                           currentYearUl.appendChild(li);
                        } else {
                            // Fallback for items not under a year (should ideally not happen with H3 structure)
                            newContentFragment.appendChild(li); 
                        }
                    }
                }
            }
        });

        // Append the UL for the last processed year
        if (currentYearUl && currentYearUl.hasChildNodes()) {
            newContentFragment.appendChild(currentYearUl);
        }

        // Replace the old table structure with the new structured content
        if (newContentFragment.hasChildNodes()) {
            originalUl.remove(); // Remove the old <ul> which contains the table
            sectionContainer.appendChild(newContentFragment); 
        } else if (tableCell.childNodes.length > 0) {
            // Content was present but not transformed, log a warning.
            console.warn('Past theses content found in table but could not be transformed. HTML structure might be unexpected.');
        }
    });
    </script>
</body>
</html>

<?php
include($footerInc); 
?>
