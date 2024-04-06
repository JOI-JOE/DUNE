<?php
require_once "pdo.php";

function show_order($id_customer)
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    WHERE CU.id_customer = '$id_customer'  ORDER BY id_order DESC
    ";
    return pdo_query($sql);
}


// function add_order($id_customer, $date, $status, $address, $total_price)
// {
//     $sql = "INSERT INTO `order`(`id_customer`, `date_order`, `status_order`, `address_order`, `total_price`) 
//     VALUES ('$id_customer','$date','$status','$address','$total_price')";

//     pdo_execute($sql);
// }

function get_last_order($id_customer, $date, $status, $address, $total_price, $paymethod)
{
    $sql = "INSERT INTO `order`(`id_customer`, `date_order`, `status_order`, `address_order`, `total_price`, `method_pay`) 
    VALUES ('$id_customer','$date','$status','$address','$total_price','$paymethod')";

    return insert_get_last_id($sql);
}

function cancel_order($id_order)
{
    $sql = "UPDATE `order` SET `status_order`='Cancelled' WHERE `id_order`='$id_order'";
    pdo_execute($sql);
}


function select_one_order($id_order)
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    WHERE O.id_order = '$id_order'
    ";
    return pdo_query_one($sql);
}

function count_status($id_customer)
{
    $sql = "SELECT
    COUNT(*) AS total_orders,
    COUNT(CASE WHEN `status_order` = 'Order Confirmed' THEN 1 END) AS Order_Confirmed,
    COUNT(CASE WHEN `status_order` = 'Preparing your order' THEN 1 END) AS Preparing_your_order,
    COUNT(CASE WHEN `status_order` = 'Shipped' THEN 1 END) AS Shipped,
    COUNT(CASE WHEN `status_order` = 'Delivered' THEN 1 END) AS Delivered,
    COUNT(CASE WHEN `status_order` = 'Cancelled' THEN 1 END) AS Cancelled
    FROM `order`
    WHERE `id_customer` ='$id_customer'";
    return pdo_query($sql);
}
