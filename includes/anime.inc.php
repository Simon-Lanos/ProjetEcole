<?php

$connection = mysqli_connect("localhost","root","", "turtuledb");
if (!$connection) {
    die("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error() );
}
else {
    $sql = "SELECT * 
      FROM users;
      ";

    $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));

    echo sqlDebug($result);

    
}

include "anime.php";
