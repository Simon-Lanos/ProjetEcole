<?php
include_once("getPage.php");
function callPage(){

    $page = getPage();

    $files = glob("./Includes/*.inc.php");

    if (in_array("./Includes/$page.inc.php", $files)) {
        $page = "./Includes/$page.inc.php";
    }
    else
        $page = "./Includes/home.inc.php";
    include $page;

    /*echo "<pre>";
    print_r($files);
    echo "</pre>";*/
}