<?php

function add_his_cart($quantity, $id_product, $id_customer, $id_order, $size)
{
    $sql =  "INSERT INTO `history_order`(`id_product`, `quantity`, `id_customer`, `id_order`, `size`) 
    VALUES ('$id_product','$quantity','$id_customer','$id_order','$size')";
    pdo_execute($sql);
}

function select_his_cart($id_order, $id_customer)
{
    $sql = "SELECT *
    FROM `history_order` 

    WHERE  `id_order` ='$id_order' AND `id_customer` ='$id_customer'";
    return pdo_query($sql);
}


// function cancel_his_order($id_order)
// {
//     $sql = "DELETE FROM `history_order` WHERE `id_order` ='$id_order'";
//     pdo_execute($sql);
// }
