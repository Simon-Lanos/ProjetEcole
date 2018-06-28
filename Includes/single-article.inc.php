<?php

if (isset($_GET['article'])) {
    $requestedArticle = $_GET['article'];
} else {
    $requestedArticle = '';
}

$request = '
    SELECT idArticle
    FROM articles;
';

$result = sqlFetch($request, FETCH_MODE_MULTIPLE);

$idRequestedArticle = null;

foreach ($result as $resultSet) {
    foreach ($resultSet as $idArticle) {

        if ($idArticle === $requestedArticle) {
            $idRequestedArticle = $idArticle;
        }
    }
}

if ($idRequestedArticle === null) {
    include '404.php';
}
else {
    $request = "
        SELECT *
        FROM articles
        WHERE idArticle = '$idRequestedArticle';
    ";

    $result = sqlFetch($request);

    $article = loadTemplate('article', $result);

    echo $article;
}
