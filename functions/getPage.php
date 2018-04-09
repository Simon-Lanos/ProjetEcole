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
 * TODO bougé ce code dans sa propre fonction debug
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
    return $return;
}
