<?php
require_once "pdo.php";

function show_product($kyw = "", $id_commodity = 0)
{
    $sql = "SELECT * FROM `products`
            JOIN `commodity` ON products.id_commodity = commodity.id_commodity
            WHERE 1 ";
    if ($kyw != "") {
        $sql .= " AND `products`.`name_product` LIKE '%"  . $kyw . "%'";
    }
    if ($id_commodity > 0) {
        $sql .= " AND `products`.`id_commodity` = '" . $id_commodity . "'";
    }

    $sql .= " ORDER BY `id_product` ASC";
    $list_product =  pdo_query($sql);
    return $list_product;
}
function show_product_one($id_product)
{
    $sql = "SELECT * FROM `products`
    JOIN `commodity` ON products.id_commodity = commodity.id_commodity WHERE `id_product` =  '$id_product'";
    return pdo_query_one($sql);
}
function insert_product($name, $type, $genre, $date, $price, $sale, $option, $img)
{
    $sql = "INSERT INTO `products`(`name_product`, `price_product`, `sale_product`, `img_product`, `description`,`id_commodity`, `special`, `date_product`) 
    VALUES ('$name','$price','$sale','$img','$option','$type','$genre','$date')";
    pdo_execute($sql);
}
function delete_product($id_type)
{
    $sql = "DELETE FROM `products` WHERE  `id_product` =" . $id_type;
    pdo_execute($sql);
}
function update_product_one($id_product, $name, $price, $sale, $img_product, $description, $type, $genre, $date)
{
    if ($img_product !== "") {
        $sql = "UPDATE `products` 
        SET 
        `name_product`='$name',
        `price_product`='$price',
        `sale_product`='$sale',
        `img_product`='$img_product',
        `description`='$description',
        `id_commodity`='$type',
        `special`='$genre',
        `date_product`='$date' WHERE `id_product`='$id_product'";
    } else {
        $sql = "UPDATE `products` 
        SET 
        `name_product`='$name',
        `price_product`='$price',
        `sale_product`='$sale',
        `description`='$description',
        `id_commodity`='$type',
        `special`='$genre',
        `date_product`='$date' WHERE `id_product`='$id_product'";
    }
    pdo_execute($sql);
}

function select_all_product()
{
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}

function select_product_top10()
{
    $sql = "SELECT * FROM products WHERE view > 3 ORDER BY view DESC LIMIT 0,10";
    return pdo_query($sql);
}

function increase_view_product($id_product)
{
    $sql = "UPDATE products SET view = view + 1 WHERE id_product =" . $id_product;
    return pdo_query($sql);
}

function select_product_special()
{
    $sql = "SELECT * FROM `products` WHERE special = 'special'";
    return pdo_query($sql);
}

function select_product_by_commodity($id_commodity)
{
    $sql = "SELECT * FROM products WHERE id_commodity= $id_commodity LIMIT 0, 20";
    return pdo_query($sql);
}

function select_product_keyword($keyword)
{
    $sql = "SELECT * FROM products P "
        . "JOIN commodity C ON C.id_commodity = P.id_commodity"
        . " WHERE name_product LIKE '%' . $keyword . '%' OR id_commodity LIKE  '%' . $keyword . '%'";
    return pdo_query($sql);
}

function select_product_by_date()
{
    $sql = "SELECT * FROM products WHERE date_product BETWEEN '2024-01-01' AND '2025-04-01'";
    return pdo_query($sql);
}
// ----------------------------------------------------------------------------------------

function check_Name_Product($name_product)
{
    $sql = "SELECT * FROM `products` WHERE `name_product` = '$name_product'";
    return pdo_check_data($sql);
}

//  CHECK DATA EXISTS
function validate_Name_Product($name_product)
{
    $check_name = trim($name_product);
    $minLen = 2;
    $maxLen = 50;
    $nameLength = strlen($check_name);

    // check tên có tồn tại không
    if (empty($check_name)) {
        return "Name Product is required";
    }
    // check tên có độ dài của tên 
    if ($nameLength <= $minLen) {
        return "Name product must be at least $minLen characters long.";
    }
    if ($nameLength > $maxLen) {
        return "Name product must be less than $maxLen characters long.";
    }

    if (!check_Name_Product($check_name)) {
        return "Name product exists";
    }
    return $name_product;
}

function validate_Date_Product($date_product)
{
    $pattern = "/^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/";

    if (empty($date_product)) {
        return "Date is requried";
    }
    if (!preg_match($pattern, $date_product)) {
        return "Date is not valid";
    }
    return $date_product;
}

function validate_Price_Product($price_product)
{
    if (empty($price_product)) {
        return "Price is requried";
    }
    if ($price_product < 0) {
        return "Price is more than zero";
    }
    return $price_product;
}

function validate_Sale_Product($sale_product)
{
    if (empty($sale_product)) {
        return "Sale is requried";
    }
    if (!is_numeric($sale_product) || $sale_product < 0 || $sale_product > 1) {
        return "Sale value must be a number between 0 and 1.";
    }
    return $sale_product;
}
