<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
include($incpath . "/config.php");
include("header_common_he.php.inc");
include($headerInc);
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>People</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $peopleCss;?>">
</head>

<body>
    <div class="sub-body">
<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->

<div class="people-container">
            <h1 class="page-title">Group Members</h1>
        </div>
        <!-- Use function from PI to get the list from the database -TODO: find out how to make it resizable-->
        <?php
            function getNames($content) {
                $names = [];
            
                
                $doc = new DOMDocument();
                libxml_use_internal_errors(true); // Suppress HTML parsing warnings
                $doc->loadHTML($content);
                libxml_clear_errors();
            
                // Find all <a> tags in <td> elements
                $xpath = new DOMXPath($doc);
                $rows = $xpath->query('//tr[td]/td[1]/a');
            
                foreach ($rows as $row) {
                    $names[] = trim($row->nodeValue);
                }
            
                return $names;
            }

            function getDrButNotProfNames($content) {
                $names = [];
            
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML($content);
                libxml_clear_errors();
            
                $xpath = new DOMXPath($doc);
                $rows = $xpath->query('//tr[td]/td[1]/a');
            
                foreach ($rows as $row) {
                    $name = trim($row->nodeValue);
                    if (stripos($name, 'Dr.') !== false && stripos($name, 'Prof.') === false) {
                        $names[] = $name;
                    }
                }
            
                return $names;
            }

            function getNamesWithoutTitles($content) {
                $names = [];
            
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML($content);
                libxml_clear_errors();
            
                $xpath = new DOMXPath($doc);
                $rows = $xpath->query('//tr[td]/td[1]/a');
            
                foreach ($rows as $row) {
                    $name = trim($row->nodeValue);
                    if (stripos($name, 'Dr.') === false && stripos($name, 'Prof.') === false) {
                        $names[] = $name;
                    }
                }
            
                return $names;
            }
            
            
            
            function getPersonDetails($content, $name) {
                $details = '';
            
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML($content);
                libxml_clear_errors();
            
                $xpath = new DOMXPath($doc);
                $rows = $xpath->query('//tr[td]/td[1]/a');
            
                // Normalize input name (trim, collapse spaces)
                $normalizedInputName = preg_replace('/\s+/', ' ', trim($name));
            
                foreach ($rows as $aTag) {
                    $rowName = preg_replace('/\s+/', ' ', trim($aTag->nodeValue));
            
                    if ($rowName === $normalizedInputName) {
                        $tr = $aTag->parentNode->parentNode;
                        $tds = $tr->getElementsByTagName('td');
            
                        $group = $tds->length > 1 ? trim($tds->item(1)->nodeValue) : 'N/A';
                        $room  = $tds->length > 2 ? trim($tds->item(2)->nodeValue) : 'N/A';
                        $phone = $tds->length > 3 ? trim($tds->item(3)->nodeValue) : 'N/A';
                        $link  = $aTag->getAttribute('href');
            
                        // Extract last name and normalize it (for image file lookup)
                        $lastNameParts = explode(',', $normalizedInputName);
                        $lastName = isset($lastNameParts[0]) ? preg_replace('/\s+/', '', $lastNameParts[0]) : 'member';
            
                        // Find image file by any extension
                        $imageDir = 'assets/figs/group_members/';
                        $imagePattern = $imageDir . $lastName . '.*';
                        $imageFiles = glob($imagePattern);
                        $imgPath = count($imageFiles) > 0 ? $imageFiles[0] : $imageDir . '../member.jpg';
            
                        // Format display name: "FirstName LastName"
                        $nameParts = explode(',', $rowName);
                        $displayName = isset($nameParts[1]) && isset($nameParts[0])
                            ? trim($nameParts[1]) . ' ' . trim($nameParts[0])
                            : $rowName;
            
                        // Build HTML output
                        $details = '
                        <ul class="people">
                            <li style="display: flex; align-items: flex-start; gap: 1em;">
                                <img src="' . htmlspecialchars($imgPath) . '" alt="' . htmlspecialchars($lastName) . '" style="width: 120px; height: 160px; object-fit: cover; border-radius: 8px;">
                                <div>
                                    <p class="title">' . htmlspecialchars($displayName) . '</p>
                                    <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Group: ' . htmlspecialchars($group) . '</p>
                                    <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Room: ' . htmlspecialchars($room) . '</p>
                                    <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Tel.: ' . htmlspecialchars($phone) . '</p>
                                    <div class="people-links">
                                        <span class="link-wrapper"><a href="' . htmlspecialchars($link) . '">Contact >>></a></span>
                                    </div>
                                </div>
                            </li>
                        </ul>';
                        break;
                    }
                }
            
                return $details;
            }
            
            
            
            

            $title = "HE group";
            $sel = ("gruppe2='ATLAS' OR gruppe2='ATLAS,H1' OR gruppe3='ATLAS' 
                                    OR gruppe3='ATLAS,H1' OR gruppe2='H1' OR gruppe2='mu3e'
                                    OR gruppe2='mu3e,H1'");  

            // Start output buffering
            ob_start();

            // Call the function (this will output content into the buffer)
            physi_maliste_we($sel);

            // Get the content from the buffer and clean it
            $content = ob_get_clean();

            $encoding = mb_detect_encoding($content, ['UTF-8', 'ISO-8859-1', 'Windows-1252'], true);
            //echo "<!-- Detected encoding: $encoding -->";

            // Ensure content is treated as UTF-8 during DOM parsing
            $content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');

            // Inject <meta charset="UTF-8"> if missing, so DOMDocument parses correctly
            if (stripos($content, '<head>') !== false) {
                $content = preg_replace('/<head>/', '<head><meta charset="UTF-8">', $content, 1);
            } else {
                // fallback: prepend if <head> is missing
                $content = '<meta charset="UTF-8">' . $content;
            }

            // Clean up table cell attributes
            $content = preg_replace('/<td\s+bgcolor="#EFEFEF"\s+nowrap="">/', '<td>', $content);
            $content = preg_replace('/<td\s+bgcolor="#F8F8F8"\s+nowrap="">/', '<td>', $content);

            
            // Apply regex cleanup

            $group_leader = '<!-- Year divider -->
            <div class="people-year">
                <h3>Group Leader</h3>
            </div>

            <ul class="people">
                <li style="display: flex; align-items: flex-start; gap: 1em;">
                    <img src="assets/figs/group_members/main_schoening.jpg" alt="schoening" style="width: 120px; height: 160px; object-fit: cover; border-radius: 8px;">
                    <div>
                        <p class="title">Prof. Dr. André Schöning</p>
                        <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Group: HE mu3e ATLAS HVMAPS</p>
                        <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Room: INF 226 - 03.105</p>
                        <p style="display: flex; align-items: flex-start; gap: 1em; margin-bottom: 0.5em;">Tel.: 19401</p>
                        <div class="people-links">
                                        <span class="link-wrapper"><a href="http://www.physi.uni-heidelberg.de/~schoning">Contact >>></a></span>
                        </div>
                    </div>
                </li>
            </ul>';
            echo $group_leader;

            echo '<!-- Year divider -->
            <div class="people-year">
                <h3>Postdocs</h3>
            </div>';

            $postDocs = getDrButNotProfNames($content);
            foreach ($postDocs as $postDoc) {
                $details = getPersonDetails($content, $postDoc);
                echo $details;
            }

            echo '<!-- Year divider -->
            <div class="people-year">
                <h3>Students</h3>
            </div>';

            $Students = getNamesWithoutTitles($content);
            foreach ($Students as $Student) {
                $details = getPersonDetails($content, $Student);
                echo $details;
            }

            // Echo or manipulate $content as needed
            ?>
        <br/>
        <h2 class="western">Former Group Members</h2>   

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