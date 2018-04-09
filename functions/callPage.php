<?php
include_once("getPage.php");
function callPage(){

    $page = getPage();

    $files = glob("./includes/*.inc.php");

    if (in_array("./includes/$page.inc.php", $files)) {
        $page = "./includes/$page.inc.php";
    }
    else
        $page = "./includes/home.inc.php";
    include $page;

    /*echo "<pre>";
    print_r($files);
    echo "</pre>";*/
}