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
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
    <!-- to enable mathjax (LaTeX code rendering) -->
    <script type="text/javascript" async
	  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML">
	</script>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        <h1 class="western">Main Heading</h1> 
        <h2 class="western">Sub Heading</h2> 
        <ul>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio. 
            Vitae scelerisque enim ligula venenatis dolor. 
            Mauris at tellus at urna condimentum mattis. 
            Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        </ul>
        <h2 class="western">Sub Heading</h2> 
        <ul> 
            <h3 class="western">Sub Sub Heading</h3>
            <div class="sub-block-content">
                <p class="sub-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.
                    Vitae scelerisque enim ligula venenatis dolor.
                    </br>
                    </br>
                    <button class="btn btn-danger" 
                    onclick="location.href='<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php';">
                        To Add Button <i class="fas fa-arrow-right"></i>
                    </button>
                </p>
                <img class="sub-block-image" src="<?php echo $figures;?>/mu3e/mupix10.jpg" alt="mu3e-mupix">
            </div>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>