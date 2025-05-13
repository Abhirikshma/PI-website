<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
$subPageLogo = $mu3eLogo; // Use centralized mu3e logo
$subPageLink = $mu3eMainpageURL; // Link to mu3e mainpage
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mu3e Publications</title>
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
                <h1 class="page-title">Mu3e Publications</h1>

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
                const mu3ePageSections = [
                    { 
                        id: 'journal-publications', 
                        title: 'Journals', 
                        subtitle: '(with significant contributions from members of our group)', 
                        types: ['Journal'] 
                    },
                    { 
                        id: 'preprints-proceedings-pubnotes', 
                        title: 'Pre-prints, Proceedings and Pub Notes', 
                        types: ['Proceeding', 'Preprint', 'PubNote'] // Added Preprint and PubNote for future flexibility
                    },
                    { 
                        id: 'all-mu3e-papers-section', 
                        title: 'All Mu3e Papers',
                        types: [] // This section is handled specially by the loader
                    },
                    { 
                        id: 'conference-invited-talks', 
                        title: 'Conference and Invited Talks', 
                        types: ['Conference Talk', 'Invited Talk'] 
                    },
                    { 
                        id: 'posters', // Changed ID to match existing HTML structure if needed, or can be 'poster-publications'
                        title: 'Posters', 
                        types: ['Poster'] 
                    }
                ];

                // Path to the YAML file for Mu3e publications
                const yamlFilePath = '<?php echo $subpath; ?>/data/mu3e_publications.yaml'; 
                
                loadPublications(yamlFilePath, 'dynamic-publications-content', mu3ePageSections);
            });
        </script>
    </body>
</html>

<?php
include($footerInc);
?>
