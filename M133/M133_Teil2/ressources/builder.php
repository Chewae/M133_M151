<?php

/**
 * This function will be called to build the correct view within
 * the site template.
 */
function build($filename)
{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <script src="js/jquery-3.3.1.min.js"></script>
        <link href="css/layout.css" rel="stylesheet" type="text/css">
        <script src="js/validation.js"></script>
    </head>
    <body class="font">
    <?php
        require_once 'header.php';
    ?>
    <section>
    <?php
        require_once './view/'.$filename;
    ?>
    </section>
    <footer>
        <h6>&copy 2018 Kevin Looser<br/><br/>Module 133</h6>
    </footer>
    </body>
    </html>

<?php
}
?>
