<?php
require_once "pdo.php";

function insert_size($name_size)
{
    $sql = "INSERT INTO size(name_size) VALUES('$name_size')";
    pdo_execute($sql);
}

function delete_size($id_size)
{
    $sql = "DELETE FROM size WHERE id_size=" . $id_size;
    pdo_execute($sql);
}
function loadall_size()
{
    $sql = "SELECT * FROM size ORDER BY id_size DESC";
    $listsize = pdo_query($sql);
    return $listsize;
}

function select_size_by_id($id_size)
{
    $sql = "SELECT `name_size` FROM `size` WHERE `id_size`='$id_size'";
    return pdo_query_one($sql);
}
