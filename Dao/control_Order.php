<?php
require_once "pdo.php";

function show_order($id_customer)
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    WHERE CU.id_customer = '$id_customer'
    ";
    return pdo_query($sql);
}

function add_order($id_customer, $date, $status, $address, $total_price)
{
    $sql = "INSERT INTO `order`(`id_customer`, `date_order`, `status_order`, `address_order`, `total_price`) 
    VALUES ('$id_customer','$date','$status','$address','$total_price')";
    pdo_execute($sql);
}
