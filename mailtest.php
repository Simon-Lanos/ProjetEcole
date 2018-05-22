<?php

$token = hash("sha256", crypt(microtime(), "NWTroll"));
echo $token;

$to = 'example@ducon.fr';
$subject = 'NWT - votre plateforme de reservation de salle';
$message = '<p>Bonjour,</p>
<p>Nous vous remercions de votre enregistrement.</p>
<p>Afin de pouvoir utiliser nos services, veuillez valider votre compte.</p>
<p><a href="http://localhost/NWT/verif.php/token=' . $token . '"><img src="https://image.noelshack.com/fichiers/2018/15/5/1523612366-buttonvalidation.png"></img></a></p>';


mail($to, $subject , $message);
echo("votre message a ete envoye");

