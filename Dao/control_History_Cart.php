<?php

function add_his_cart($quantity, $id_cart, $id_customer, $date)
{
    $sql =  "INSERT INTO `history_order`(`id_cart`, `id_customer`, `quantity`, `order_date`) 
    VALUES ('$id_cart','$id_customer','$quantity','$date')";
    pdo_execute($sql);
}
