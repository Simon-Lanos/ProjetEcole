<?php
/*
 *@return string
 */
function getPage() {
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
    foreach ($result as $key=>$rows) {
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
function sqlCommit($request)
{
    //Etablie la connection avec la base
    $connection = mysqli_connect("localhost","root","", "turtuledb");
    if (!$connection) {
        return ("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error() );
    }

    try
    {
        mysqli_query($connection, $request);
        $result = true;
    }
    catch (Exception $exception)
    {
        $result = false;
        throw new $exception;
    }

    mysqli_close($connection);
    return $result;
}

/** lance une requête d'extraction SQL
 * TODO bouger ce code dans sa propre fonction sql
 * @param  string $request
 * @return mixed
 */
function sqlFetch($request)
{
    //Etablie la connection avec la base
    $connection = mysqli_connect("localhost","root","", "turtuledb");
    if (!$connection) {
        return ("Erreur SQL" . mysqli_connect_errno() . " : " . mysqli_connect_error() );
    }

    try
    {
        $result = mysqli_fetch_assoc(mysqli_query($connection, $request));
    }
    catch (Exception $exception)
    {
        $result = false;
        throw new $exception;
    }

    mysqli_close($connection);
    return $result;
}
