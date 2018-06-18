<?php
if (isset($_SESSION['user']) && $_SESSION['user']['rolesUser'] >= 2) {
    echo ('
        <button>
            ajouter un nouvelle article
        </button>
        <form action="#" method="post">
            <fieldset>
                <label>Titre : </label><input name="title" type="text">
                <label>Contenu : </label><textarea name="content"></textarea>
                <input type="submit">
            </fieldset>
        </form>'
    );
}

if (isset($_POST['title']) && isset($_POST['content'])) {
    if ($_POST['title'] !== '' || $_POST['content'] !== '') {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $idUser= $_SESSION['idUser'];
        $usersRoles= $_SESSION['rolesUser'];

        $request = "
            INSERT INTO articles (title, content, idUser, usersRoles)
                    VALUES ('$title', '$content', '$idUser', '$usersRoles')
        ";

        $succes = sqlInsert($request);

        if ($succes === true) {
            echo '<pre>l\'article à bien été ajouté</pre>';
        }
    }
    else {
        echo '<pre>tout les champs doivent être remplie</pre>';
    }
}

/*
 * @TODO boucle qui affiche les articles
 */

$request = "SELECT * FROM articles";

$result = sqlFetch($request, FETCH_MODE_MULTIPLE);
foreach ($result as $data) {
    $article = loadTemplate('article', $data);
    echo('<div>'.$article.'</div>');
}
