<h1>Login</h1>
<?php

if (isset($_POST['formLogin'])) {

    if (isset($_POST['mail']) && $_POST['mail'] != "") {
        $mail = trim($_POST['mail']);
    } else
        $mail = "";

    if (isset($_POST['password']) && $_POST['password'] != "") {
        $password = trim($_POST['password']);
    } else
        $password = "";

    $erreur = array();

    if ($mail == "") array_push($erreur, "Veuillez saisir une adresse mail");
    if ($password == "") array_push($erreur, "Veuillez saisir un mot de passe");

    if (count($erreur) > 0) {
        $message = "<ul>";

        for ($i = 0; $i < count($erreur); $i++) {
            $message .= "<li>" . $erreur[$i] . "</li>";
        }

        $message .= "</ul>";

        echo $message;
        include "formLogin.php";
    }
    else {
        $password = sha1($password);
        $requete = "SELECT * 
                    FROM users
                    WHERE mail='$mail' AND password='$password'";

        $result = sqlFetch($requete , false);
        if (mysqli_num_rows($result) == 0 ) {
            include "formLogin.php";
            echo "<p>L'adresse ou le mdp n'est pas correcte, êtes vous <a href='./index.php?page=register'>inscript</a> ?</p>";
        }
        else {
            $requete = "SELECT firstName
                        FROM users
                        WHERE mail='$mail'";

            $result = sqlFetch($requete);

            $_SESSION['user'] = $result;
        }
    }
}
else
include "formLogin.php";
