<?php
if (isset($_SESSION['user']) && $_SESSION['user']['rolesUser'] >= 2) {
    echo ('
        <button>
            ajouter un nouvelle article
        </button>
        <form action="#" method="post">
            <fieldset>
                <label>Titre : </label><input name="title" type="text">
                <label>Sous titre : </label><input name="sub-title" type="text">
                <label>Contenu : </label><textarea name="content"></textarea>
                <input type="submit">
            </fieldset>
        </form>'
    );
}

if (isset($_POST['title']) && isset($_POST['sub-title']) && isset($_POST['content'])) {
    if ($_POST['title'] !== '' || $_POST['sub-title'] !== '' || $_POST['content'] !== '') {

        $title = escChars($_POST['title']);
        $subTitle = escChars($_POST['sub-title']);
        $content = escChars($_POST['content']);
        $idUser= escChars($_SESSION['idUser']);
        $usersRoles= escChars($_SESSION['rolesUser']);

        $request = "
            INSERT INTO articles (title, subTitle, content, idUser, usersRoles)
                    VALUES ('$title', '$subTitle', '$content', '$idUser', '$usersRoles')
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

$request = "SELECT * FROM articles";

$result = sqlFetch($request, FETCH_MODE_MULTIPLE);
foreach ($result as $data) {
    $article = loadTemplate('article-minimal', $data);
    echo('<div>'.$article.'</div>');
}
