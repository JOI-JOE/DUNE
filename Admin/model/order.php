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

// THống kê 
function count_status()
{
    $sql = "SELECT
    COUNT(*) AS total_orders,
    COUNT(CASE WHEN `status_order` = 'Order Confirmed' THEN 1 END) AS Order_Confirmed,
    COUNT(CASE WHEN `status_order` = 'Preparing your order' THEN 1 END) AS Preparing_your_order,
    COUNT(CASE WHEN `status_order` = 'Shipped' THEN 1 END) AS Shipped,
    COUNT(CASE WHEN `status_order` = 'Delivered' THEN 1 END) AS Delivered,
    COUNT(CASE WHEN `status_order` = 'Cancelled' THEN 1 END) AS Cancelled
    FROM `order`";
    return pdo_query($sql);
}


function statistic_product()
{
    $sql = "SELECT H.*, P.*,CU.*,
    MIN(H.quantity) AS quantity_min,
    MAX(H.quantity) AS quantity_max
    FROM history_order H
    JOIN `product` P ON H.id_product = P.id_product
    JOIN `order` CU ON CU.id_order = H.id_order
    WHERE CU.status_order != 'Cancelled'
    GROUP BY H.id_product";

    return pdo_query($sql);
}

function statistic_order()
{
    $sql = "SELECT O.id_customer, CU.*, 
    MIN(O.total_price) AS price_min,
    MAX(O.total_price) AS price_max, 
    AVG(O.total_price) AS average_price, 
    COUNT(*) AS order_count FROM `order` O 
    JOIN `customer` CU ON CU.id_customer = O.id_customer 
    WHERE O.status_order != 'Cancelled'
    AND
    O.id_customer IN ( SELECT id_customer FROM `order` 
    WHERE O.status_order != 'Cancelled'
    GROUP BY id_customer ) GROUP BY O.id_customer, CU.id_customer";

    return pdo_query($sql);
}
// -- JOIN `product` P ON P.id_product = H.id_product
