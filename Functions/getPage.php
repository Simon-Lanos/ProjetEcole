<?php

CONST FETCH_MODE_DEFAULT = 0;
CONST FETCH_MODE_MULTIPLE = 1;
CONST FETCH_MODE_NO_ASSOC = 2;

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
    $return = '';
    foreach ($result as $keys => $rows) {

        if (is_array($rows)) {
            echo 'Array['. $keys .'] : ';
            sqlDebug($rows);
            echo '<hr>';
        }
        else {
            $return .= (' <br> [" ' . $keys . '"]  => ');
            $return .= ('(' . gettype($rows) . ') : ');
            $return .= ('"' . $result[$keys] . '"');
        }
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
        die(new $exception);
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
function sqlFetch($request, $mode = FETCH_MODE_DEFAULT)
{
    //Etablie la connection avec la base
    $connection = mysqli_connect("localhost", "root", "", "turtuledb");
    if (!$connection) {
        return ("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error());
    }

    try {
        switch ($mode) {
            case 0 :
                $result = mysqli_fetch_assoc(mysqli_query($connection, $request));
                break;
            case 1 :
                $result = mysqli_fetch_all(mysqli_query($connection, $request), 1);
                break;
            case 2 :
                $result = mysqli_query($connection, $request);
                break;
        }
    } catch (Exception $exception) {
        $result = false;
        die($exception);
    }

    mysqli_close($connection);
    return $result;
}

function loadTemplate($file, array $data) {
    $fullpath = './Includes/Templates/'.$file.'.php';
    $template = file_get_contents($fullpath);

    foreach ($data as $key => $value) {
        $template = str_replace('['.$key.']', $value, $template);
    }
    return $template;
}

function escChars($string) {
    $return = str_replace("'", "\'", $string);
    $return = str_replace('"', '\"', $return);

    return $return;
}