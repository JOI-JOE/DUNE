<?php

function select_order_item()
{
    $sql = "SELECT * FROM `order_item` ";
    return pdo_query($sql);
}

function add_order_item($id_cart, $price, $amount)
{
    $sql = "INSERT INTO `order_item`(`id_cart`, `price`, `amount`) 
    VALUES ('$id_cart','$price','$amount')";
    pdo_execute($sql);
}
