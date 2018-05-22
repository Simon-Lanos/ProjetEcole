<?php
/*
 *@return string
 */
function getPage()
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else
        $page = "home";
    return $page;
}


/** Permet d'afficher de façon propre un retour de requête SQL
 * TODO bouger ce code dans sa propre fonction debug
 * @param  array $result
 * @return string
 */
function sqlDebug(array $result)
{
    $return = gettype($result);
    foreach ($result as $key => $rows) {
        $return .= (' <br> [" ' . $key . '"]  => ');
        $return .= ('(' . gettype($rows) . ') : ');
        $return .= ('"' . $result[$key] . '"');

    }
    echo $return;
    return;
}

/** lance une requête d'insertion SQL
 * TODO bouger ce code dans sa propre fonction sql
 * @param  string $request
 * @return bool
 */
function sqlInsert($request)
{
    //Etablie la connection avec la base
    $connection = mysqli_connect("localhost", "root", "", "turtuledb");
    if (!$connection) {
        return ("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error());
    }

    try {
        mysqli_query($connection, $request);
        $result = true;
    } catch (Exception $exception) {
        $result = false;
        throw new $exception;
    }

    mysqli_close($connection);
    return $result;
}

/** lance une requête d'extraction SQL
 * TODO bouger ce code dans sa propre fonction sql
 * @param  string $request
 * @param bool $assoc optional
 * @return mixed
 */
function sqlFetch($request, $assoc = true)
{
    //Etablie la connection avec la base
    $connection = mysqli_connect("localhost", "root", "", "turtuledb");
    if (!$connection) {
        return ("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error());
    }

    try {
        if ($assoc) {
            $result = mysqli_fetch_assoc(mysqli_query($connection, $request));
        } else {
            $result = mysqli_query($connection, $request);
        }
    } catch (Exception $exception) {
        $result = false;
        die($exception);
    }

    mysqli_close($connection);
    return $result;
}

function loadArticle($file,array $data) {
    $fullpath = './Includes/Templates/'.$file.'.php';
    $article = file_get_contents($fullpath);

    foreach ($data as $key => $value) {
        $article = str_replace('['.$key.']', $value, $article);
    }
    return $article;
}
