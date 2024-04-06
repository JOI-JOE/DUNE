<?php
function show_order()
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    
    ";
    return pdo_query($sql);
}


function select_order($id_order, $status)
{
    $sql = "SELECT * FROM `order` O
    JOIN customer CU ON CU.id_customer = O.id_customer
    where 1";
    if ($id_order != "") {
        $sql .= " and id_order like '%" . $id_order . "%'";
    }
    if ($status != "") {
        $sql .= " and status_order ='$status'";
    }
    $sql .= " ORDER BY id_order DESC";
    $listorder = pdo_query($sql);
    return $listorder;
}


function show_one_order($id_order)
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    WHERE O.id_order = '$id_order'
    ";
    return pdo_query_one($sql);
}

function update_status_order($id_order, $status_order)
{
    $sql = "UPDATE `order`
    SET
    `status_order`='$status_order'
    WHERE  `id_order`='$id_order'";
    pdo_execute($sql);
}

function select_his_cart($id_order, $id_customer)
{
    $sql = "SELECT * FROM `history_order` 
    WHERE  `id_order` ='$id_order' AND `id_customer` ='$id_customer'";
    return pdo_query($sql);
}
