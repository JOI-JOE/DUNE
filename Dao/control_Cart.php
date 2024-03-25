<?php
require_once "pdo.php";

function show_list_cart($email)
{
    $sql = "SELECT C.*, CU.*, Pr.*
          FROM `cart` C
          INNER JOIN `customer` CU ON CU.id_customer = C.id_customer
          INNER JOIN `product` Pr ON Pr.id_product = C.id_product
          INNER JOIN `size` sz ON Pr.id_size = sz.id_size
          WHERE CU.email_customer = '$email' AND C.status = '1'
          ";
    return pdo_query($sql);
}

function show_list_his_cart($id_customer)
{
    $sql = "SELECT *
    FROM `cart` C
    INNER JOIN `product` Pr ON Pr.id_product = C.id_product
    WHERE C.id_customer = '$id_customer' 
          ";
    return pdo_query($sql);
}

function add_to_cart($id_customer, $id_product)
{
    $sql = "INSERT INTO `cart`(`id_customer`, `id_product`,`status`) 
    VALUES ('$id_customer','$id_product','1')";
    pdo_execute($sql);
}

function select_cart_one($id_product)
{
    $sql = "SELECT * FROM `cart` WHERE `id_customer` = '$id_product'";
    return pdo_query_one($sql);
}

function delete_cart($id_cart)
{
    $sql = "DELETE FROM `cart` WHERE `id_cart` = '$id_cart'";
    pdo_execute($sql);
}

function update_cart_1($id_product)
{
    $sql = "UPDATE `cart` 
    SET `status`='1' WHERE `id_product` = '$id_product'";
    pdo_execute($sql);
}

function update_cart_remove_1()
{
    $sql = "UPDATE `cart` 
    SET `status`='0'";
    pdo_execute($sql);
}


function delete_all_cart($id_customer)
{
    $sql = "DELETE FROM `cart` WHERE `id_customer` = '$id_customer'";
    pdo_execute($sql);
}

function count_cart($email)
{
    if (isset($email)) {
        $sql = "SELECT COUNT(*) AS number_cart FROM `cart` C
        JOIN `customer` CU ON CU.id_customer = C.id_customer
        WHERE CU.email_customer = '$email' AND C.status = '1'
        ";
    }
    return pdo_query($sql);
}

function check_Status_Cart()
{
    $sql = "SELECT * FROM  `cart` WHERE `status` = '0'";
    return pdo_check_data($sql) > 0;
}


function check_product_in_cart($id_customer, $id_product)
{
    $sql = "SELECT COUNT(*) AS product_count FROM cart
            WHERE `id_customer` = :id_customer AND `id_product` = :id_product";

    return (bool) pdo_query_value($sql, [
        ':id_customer' => $id_customer,
        ':id_product' => $id_product
    ]);
}
