<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Footer</title>
    <link rel="stylesheet" href="<?php echo $footerCss;?>"> <!-- Link to external CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<footer class="tab-bar-footer">
    <!-- Begin table. tr: table row, td: table data, th: table header.-->
    <div class="tab-bar-footer-left">
        <table>
            <tr>
                <th style="color: var(--PI-darkred)"> Contacts </th>
            </tr>
            <tr>
                <td><span class="contact-role">Group Leader:</span> <a href="mailto:schoning@physi.uni-heidelberg.de" class="contact-email">André Schöning <i class="bi bi-envelope-fill contact-email-icon"></i></a></td>
            </tr>
            <tr>
                <td><span class="contact-role">Mu3e:</span> <a href="mailto:kar@physi.uni-heidelberg.de" class="contact-email">Tamasi Kar <i class="bi bi-envelope-fill contact-email-icon"></i></a></td>
            </tr>
            <tr>
                <td><span class="contact-role">ATLAS:</span> <a href="mailto:dittmeier@physi.uni-heidelberg.de" class="contact-email">Sebastian Dittmeier <i class="bi bi-envelope-fill contact-email-icon"></i></a></td>
            </tr>
            <tr>
                <td><span class="contact-role">HV-MAPS:</span> <a href="mailto:augustin@physi.uni-heidelberg.de" class="contact-email">Heiko Augustin <i class="bi bi-envelope-fill contact-email-icon"></i></a></td>
            </tr>
        </table>
        <!-- End table -->
    </div>
    <div class="tab-bar-footer-right">
        <!-- Remove height attributes from table/tr and rely on CSS -->
        <table>
            <tr>
                <td>
                    <a href="#"><img src="<?php echo $figures?>/hd_uni_logo.png" alt="UNILogo"></a>
                </td>
            </tr>
        </table>
        <!-- End table -->
    </div>
</footer>
&copy Copyright Universität Heidelberg. <a href="https://www.uni-heidelberg.de/de/impressum">Impressum</a> | <a href="https://www.uni-heidelberg.de/de/datenschutzerklaerung">Datenschutzerklärung.</a>

</body>
</html>
