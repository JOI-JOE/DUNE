<?php
require_once "pdo.php";

function show_list_cart($email)
{
    $sql = "SELECT C.*, CU.*, Pr.*
          FROM `cart` C
          INNER JOIN `customer` CU ON CU.id_customer = C.id_customer
          INNER JOIN `product` Pr ON Pr.id_product = C.id_product
          INNER JOIN `size` sz ON Pr.id_size = sz.id_size
          WHERE CU.email_customer = '$email' 
          ";
    return pdo_query($sql);
}

// function show_list_his_cart($id_customer)
// {
//     $sql = "SELECT *
//     FROM `cart` C
//     INNER JOIN `product` Pr ON Pr.id_product = C.id_product
//     WHERE C.id_customer = '$id_customer' 
//           ";
//     return pdo_query($sql);
// }

function add_to_cart($id_customer, $id_product, $quantity, $size)
{
    $sql = "INSERT INTO `cart`( `id_customer`, `id_product`, `quantity`, `size`) 
    VALUES ('$id_customer','$id_product','$quantity','$size')";

    pdo_execute($sql);
}

function select_cart_id($id_customer)
{
    $sql = "SELECT * FROM `cart` WHERE `id_customer` = '$id_customer'";
    return pdo_query($sql);
}

function delete_cart($id_cart)
{
    $sql = "DELETE FROM `cart` WHERE `id_cart` = '$id_cart'";
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
        WHERE CU.email_customer = '$email' 
        ";
    }
    return pdo_query($sql);
}

// function check_Status_Cart()
// {
//     $sql = "SELECT * FROM  `cart` WHERE `status` = '0'";
//     return pdo_check_data($sql) > 0;
// }


function check_product_in_cart($id_customer, $id_product, $size)
{
    $sql = "SELECT * FROM cart
            WHERE `id_customer` = '$id_customer' AND `id_product` = '$id_product'
            AND `size` = '$size'";
    return pdo_query_value($sql) > 0;
}

function update_quatity($id_customer, $id_product, $size, $quantity)
{
    $sql = "UPDATE `cart` SET `quantity`= '$quantity' 
    WHERE `id_customer`= '$id_customer' AND `id_product` = '$id_product' AND `size`= '$size' ";
    pdo_execute($sql);
}

function get_product_quantity_in_cart($id_customer, $id_product, $choose_size)
{
    $sql = "SELECT `quantity` FROM `cart`
            WHERE `id_customer` = :id_customer AND `id_product` = :id_product
            AND `size` = :size";

    $result = pdo_query_value($sql, [
        ':id_customer' => $id_customer,
        ':id_product' => $id_product,
        ':size' => $choose_size,
    ]);

    return $result !== false ? (int) $result : 0; // Convert to integer and handle no product case
}
