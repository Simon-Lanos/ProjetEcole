<?php
session_start();
include_once("./Functions/callPage.php");
include_once("./Functions/getPage.php");
include_once("./Entities/Abstracte.php");
include_once("./Entities/User.php");
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
    include "./Includes/header.php";

    callPage();

    include "./Includes/footer.php";
    ?>
    </body>
    </html>
<?php
