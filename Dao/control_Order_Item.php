<?php

function select_order_item()
{
    $sql = "SELECT * FROM `order_item` ";
    return pdo_query($sql);
}

function add_order_item($id_cart, $price, $total_item, $quatity)
{
    $sql = "INSERT INTO `order_item`(`id_cart`, `price`, `quantity`, `total_item`) 
    VALUES ('$id_cart','$price','$quatity','$total_item')";
    pdo_execute($sql);
}

function calculate_total_order_items()
{
    $sql = "SELECT total_item FROM order_item";
    return pdo_query($sql);
}


function check_order_item($id_cart)
{
    $sql = "SELECT * FROM `order_item` WHERE `id_cart` ='$id_cart'";
    return pdo_check_data($sql) > 0;
}

function total_order()
{
    $sql = "SELECT * FROM order_item";
    return pdo_query($sql);
}

function show_order_item()
{
    $sql = "SELECT * FROM `order_item` ";
    return pdo_query($sql);
}
