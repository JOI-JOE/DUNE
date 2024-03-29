<?php

function add_his_cart($quantity, $id_cart, $id_customer, $date)
{
    $sql =  "INSERT INTO `history_order`(`id_cart`, `id_customer`, `quantity`, `order_date`) 
    VALUES ('$id_cart','$id_customer','$quantity','$date')";
    pdo_execute($sql);
}

function select_his_cart($order_date, $id_customer)
{
    $sql = "SELECT * FROM `history_order` WHERE `order_date` = '$order_date' AND `id_customer` = '$id_customer'";
    return pdo_query($sql);
}
