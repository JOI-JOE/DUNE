<?php
require_once "pdo.php";


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
