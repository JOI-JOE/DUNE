<?php
require_once "pdo.php";

function show_list_cart($email)
{
    $sql = "SELECT C.*, CU.*, Pr.*
          FROM `cart` C
          INNER JOIN `customer` CU ON CU.id_customer = C.id_customer
          INNER JOIN `product` Pr ON Pr.id_product = C.id_product
          WHERE CU.email_customer = '$email'
          ";
    return pdo_query($sql);
}

function add_to_cart($id_customer, $id_product)
{
    $sql = "INSERT INTO `cart`(`id_customer`, `id_product`, `quanity`) 
    VALUES ('$id_customer','$id_product','1')";
    pdo_execute($sql);
}

function count_cart($email)
{
    if (isset($email)) {
        $sql = "SELECT COUNT(*) AS number_cart FROM `cart` C
        JOIN `customer` CU ON CU.id_customer = C.id_customer
        WHERE CU.email_customer = '$email' 
        ";
    }
    return pdo_query($sql);
}

function check_Cart($id_product)
{
    $sql = "SELECT * FROM `cart` WHERE `id_product` = '$id_product'";
    return pdo_check_data($sql);
}
