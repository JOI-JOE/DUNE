<?php
require_once "pdo.php";

function show_brand()
{
    $sql = "SELECT * FROM `brand` ORDER BY `id_brand` ASC";
    $list_brand =  pdo_query($sql);
    return $list_brand;
}

function show_commodity_one($id_type)
{
    $sql = "SELECT * FROM `commodity` WHERE `id_commodity` =" . $id_type;
    $dm = pdo_query_one($sql);
    return $dm;
}

function insert_commodity($name_type)
{
    $sql = "INSERT INTO `commodity`(`name_commodity`)
    VALUES ('$name_type')";
    pdo_execute($sql);
}

function delete_commodity($id_type)
{
    $sql = "DELETE FROM `commodity` WHERE  `id_commodity` =" . $id_type;
    pdo_execute($sql);
}

function update_commodity_one($id_type, $name_type)
{
    $sql = "UPDATE `commodity` SET `name_commodity`='$name_type' WHERE `id_commodity`='$id_type'";
    pdo_execute($sql);
}

function check_name($name)
{
    $sql = "SELECT * FROM `commodity` WHERE `name_commodity` = '$name'";
    return pdo_check_data($sql);
}
