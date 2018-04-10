<?php

$requete = "SELECT * 
      FROM users;
      ";

$result = sqlFetch($requete);
sqlDebug($result);

include "anime.php";
