# Code for PI-website

## Current Directory Structure:

<pre><code>
.
├── assets
│   ├── css
│   ├── inc
│   └── js
├── figures
│   ├── test_images
│   ├── hd_uni_logo.png
│   └── logo-pi.png
├── publications
│   ├── atlas_pub.php
│   ├── hvmaps_pub.php
│   └── mu3e_pub.php
├── <b><i>main_page.php</i></b>
├── people.php
└── teaching.php
</code>
</pre>

- The home page is under main_page.php
- Other files at the same level (level = 1): teaching.php, people.php
- The style, java script and some important include files are located under assets
- Some *path variables* are defined under `assets/inc/config.php`
- This config file together with some other paths must be exported *correctly* in all the php files 

Below are examples of the includes for php files at level=1 and 2.
These lines must be placed around the content to add header and footers correctly.

```
<?php
$subpath = $_SERVER['REQUEST_URI']; /*change if level other than 1*/
$incpath = "assets/inc";            /*change if level other than 1*/
include($incpath . "/config.php");
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Page Title</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
</head>
<body>
<!-- Add your Content here -->
</body>
</html>

<?php
include($footerInc); 
?>
```
The first two line in the above code need to be modified based on the level of the php file.
For example, for the php file under publications, the two line above should be modified to:
```
<?php
$subpath = dirname($_SERVER['REQUEST_URI']); /*change if level other than 2*/
$incpath = "../assets/inc";                 /*change if level other than 2*/
?>
```
The rest of the variables are then correctly taken care in config.php.

## GUIDELINES:

- Include any new assest in the corresponding directory.
- Do not use absolute paths/links unless necessary.
- Define variables in the `config.php` and use these variables to get the path, e.g.,
```
<!-- This includes the variable defined as designCss in config.php correctly under href -->

href="<?php echo $designCss;?>
```
## Authors:
- Tamasi Kar (<a href="mailto:kar@physi.uni-heidelberg.de">kar@physi.uni-heidelberg.de</a>)
- Giulia Fazzino (<a href="mailto:gfazzino@physi.uni-heidelberg.de">gfazzino@physi.uni-heidelberg.de</a>)
- Abhi Nandi (<a href="mailto:nandi@physi.uni-heidelberg.de">nandi@physi.uni-heidelberg.de</a>)
- David Fritz (<a href="mailto:fritz@physi.uni-heidelberg.de">fritz@physi.uni-heidelberg.de</a>)