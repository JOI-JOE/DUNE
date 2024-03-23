<?php
require_once "pdo.php";

function show_product($kyw = "", $id_brand = 0, $id_color = 0, $id_size = 0, $id_catergory = 0)
{
    $sql = "SELECT *
    FROM product p
    INNER JOIN brand b ON p.id_brand = b.id_brand
    INNER JOIN sport s ON p.id_sport = s.id_sport
    INNER JOIN color c ON p.id_color = c.id_color
    INNER JOIN size sz ON p.id_size = sz.id_size
    INNER JOIN catergory ct ON p.id_catergory = ct.id_catergory
    WHERE 1";

    if ($kyw != "") {
        $sql .= " and name_product like '%" . $kyw . "%'";
    }
    if ($id_brand > 0) {
        $sql .= " and id_brand ='" . $id_brand . "'";
    }
    if ($id_color > 0) {
        $sql .= " and id_color ='" . $id_color . "'";
    }
    if ($id_size > 0) {
        $sql .= " and id_size ='" . $id_size . "'";
    }
    if ($id_catergory > 0) {
        $sql .= " and id_catergory ='" . $id_catergory . "'";
    }
    $sql .= "  ORDER BY id_product DESC";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// function show_product_one($id_product)
// {
//     $sql = "SELECT p.*, sz.name_size  -- Select specific columns for efficiency
//     FROM product AS p
//     JOIN size AS sz ON p.id_size = sz.id_size
//     WHERE p.id_product = '$id_product'";
//     return pdo_query($sql);
// }
function show_product_one($id_product)
{
    $sql = "SELECT * FROM `product` p
    INNER JOIN color c ON p.id_color = c.id_color
    INNER JOIN size sz ON p.id_size = sz.id_size
    WHERE `id_product` =  '$id_product'";
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

// ------------------ Function For Main ------------------ //
function select_all_product()
{
    $sql = "SELECT * FROM  `product`";
    return pdo_query($sql);
}



function select_product_by_brand($id_brand)
{
    $sql = "SELECT * FROM  `product` Where `id_brand`='$id_brand'";
    return pdo_query($sql);
}

function select_product_iconic()
{
    // $sql = "SELECT * FROM products WHERE view > 10 ORDER BY view DESC LIMIT 0,10";
    $sql = "SELECT * FROM product WHERE view >= 20 ORDER BY view DESC LIMIT 0,5";
    return pdo_query($sql);
}

function increase_view_product($id_product)
{
    $sql = "UPDATE product SET view = view + 1 WHERE id_product =" . $id_product;
    return pdo_query($sql);
}

function select_product_by_sport($id_sport)
{
    $sql = "SELECT * FROM  `product` Where `id_sport`='$id_sport'";
    return pdo_query($sql);
}

function update_size_one($id_product, $id_size)
{
    $sql = "UPDATE `product` SET `id_size`='$id_size' WHERE `id_product`='$id_product'";
    pdo_execute($sql);
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
