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

    if (isset($_FILES['picture']) && $_FILES['picture'] != null) {
        $picture = $_FILES['picture'];
    } else
        $picture = "";

    var_dump($_FILES);
    die('yolo');

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

        $hpassword = password_hash($password, PASSWORD_DEFAULT);
        $requete = "INSERT INTO users (idUser, lastName, firstName, mail, password, rolesUser)
                    VALUES (NULL, '$name', '$firstName', '$mail', '$hpassword', 2)";

        $success = sqlInsert($requete);
    }

    if ($success) {
        echo "<p>Inscrition ok</p>";
    } else {
        echo "<p>Problème a l'inscription</p>";
    }
} else
    include "formRegister.php";
