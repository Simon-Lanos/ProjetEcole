<?php
session_start();
include_once("./functions/callPage.php");
include_once("./functions/getPage.php");
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" lang="fr"/>
        <meta description="yolo"/>
        <meta meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <title>
            <?php
            echo getPage() . " page";
            ?>
        </title>
    </head>
    <body>
    <?php
    include "./includes/header.php";

    callPage();

    include "./includes/footer.php";
    ?>
    </body>
    </html>
<?php
