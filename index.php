<?php
session_start();
include_once("./Functions/callPage.php");
include_once("./Functions/getPage.php");
include_once("./Entities/db.php");

if (isset($_GET['ajax'])) {
    header("Content-Type: text/plain");
    $var1 = isset($_GET['param1']) ? $_GET['param1'] : "";
    $var2 = isset($_GET['param2']) ? $_GET['param2'] : "";

    if ($var1 !== "" && $var2 !== "") {
        echo "youpi";
        exit();
    }
    else {
        echo "Boulet";
    }
}
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
