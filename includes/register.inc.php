<h1>Inscription</h1>
<?php
if (isset($_POST['formRegister'])) {

    if (isset($_POST['name']) && $_POST['name'] != "") {
        $name = trim($_POST['name']);

    } else {
        $name = "";
    }

    if (isset($_POST['firstName']) && $_POST['firstName'] != "") {
        $firstName = trim($_POST['firstName']);
    } else
        $firstName = "";

    if (isset($_POST['mail']) && $_POST['mail'] != "") {
        $mail = trim($_POST['mail']);
    } else
        $mail = "";

    if (isset($_POST['password']) && $_POST['password'] != "") {
        $password = trim($_POST['password']);
    } else
        $password = "";

    $erreur = array();

    if ($name == "") array_push($erreur, "Veuillez saisir un prénom");
    if ($firstName == "") array_push($erreur, "Veuillez saisir un nom");
    if ($mail == "") array_push($erreur, "Veuillez saisir une adresse mail");
    if ($password == "") array_push($erreur, "Veuillez saisir un mot de passe");

    if (count($erreur) > 0) {
        $message = "<ul>";

        for ($i = 0; $i < count($erreur); $i++) {
            $message .= "<li>" . $erreur[$i] . "</li>";
        }

        $message .= "</ul>";

        echo $message;
        include "formRegister.php";
    } else {
        $connection = mysqli_connect("localhost","root","", "turtuledb");
        if (!$connection) {
            die("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error() );
        }
        else {
            $password = sha1($password);
            $requete = "INSERT INTO users (idUser, lastName, firstName, mail, password, rolesUser)
                        VALUES (NULL, '$name', '$firstName', '$mail', '$password', 2)";
        }

        if ( mysqli_query($connection, $requete)) {
            echo "<p>Inscrition ok</p>";
        }
        else {
            echo "<p>Problème a l'inscription</p>";
        }
        mysqli_close($connection);
        die('yolo');
    }
} else
    include "formRegister.php";
