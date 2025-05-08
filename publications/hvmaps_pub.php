<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
$subPageLogo = $HVMapsLogo; // Use centralized HV-Maps logo
$subPageLink = $HVMapsMainpageURL; // Link to HV-Maps mainpage
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HV-MAPS Publications</title>
        <!-- Include style file -->
        <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $publicationCss;?>">
        <!-- to enable mathjax (LaTeX code rendering) -->
        <script type="text/javascript" async
          src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
        <!-- js-yaml library for parsing YAML -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-yaml/4.1.0/js-yaml.min.js"></script>
    </head>
    <body lang="en-US" dir="ltr" style="text-align:left;">
        <div class="sub-body">
            <!-- Simple Publication Navigation -->
            <div id="pub-nav-container" class="pub-nav-container">
                <!-- Navigation will be auto-populated here -->
            </div>

            <div class="publications-container">
                <!-- Main Page Heading -->
                <h1 class="page-title">HV-MAPS Publications</h1>

                <!-- This container will be populated by JavaScript -->
                <div id="dynamic-publications-content">
                    <p>Loading publications...</p> 
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo $pub_loaderJs;?>"></script>
        <script type="text/javascript" src="<?php echo $pub_navJs;?>"></script>

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                const hvmapsPageSections = [
                    { 
                        id: 'journal-publications', 
                        title: 'Journals', 
                        subtitle: '(with significant contributions from members of our group)', 
                        types: ['Journal'] 
                    },
                    { 
                        id: 'preprints-proceedings-pubnotes', 
                        title: 'Pre-prints, Proceedings and Pub Notes', 
                        types: ['Proceeding', 'Preprint', 'PubNote'] 
                    },
                    { 
                        id: 'conference-invited-talks', 
                        title: 'Conference and Invited Talks', 
                        types: ['Conference Talk', 'Invited Talk'] 
                    },
                    { 
                        id: 'posters', 
                        title: 'Posters', 
                        types: ['Poster'] 
                    }
                ];

                // Path to the YAML file for HV-MAPS publications
                const yamlFilePath = '<?php echo $subpath; ?>/data/hvmaps_publications.yaml'; 
                
                loadPublications(yamlFilePath, 'dynamic-publications-content', hvmapsPageSections);
            });
        </script>
    </body>
</html>

<?php
include($footerInc);
?>
