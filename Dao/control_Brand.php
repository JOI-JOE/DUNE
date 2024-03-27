<?php
require_once "pdo.php";

function show_brand()
{
    $sql = "SELECT * FROM `brand` ORDER BY `id_brand` ASC";
    $list_brand =  pdo_query($sql);
    return $list_brand;
}
