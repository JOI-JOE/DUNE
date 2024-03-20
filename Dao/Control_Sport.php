<?php
require_once "pdo.php";

function insert_sport($name_sport)
{
    $sql = "INSERT INTO sport(name_sport) VALUES('$name_sport')";
    pdo_execute($sql);
}

function delete_sport($id_sport)
{
    $sql = "DELETE FROM sport WHERE id_sport=" . $id_sport;
    pdo_execute($sql);
}
function loadall_sport()
{
    $sql = "SELECT * FROM sport ORDER BY id_sport DESC";
    return pdo_query($sql);
}
