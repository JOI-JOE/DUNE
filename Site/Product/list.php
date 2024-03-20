<?php
extract($_REQUEST);

if (exist_param("id_brand")) {
    $products = select_product_by_brand($id_brand);
} elseif (exist_param("search")) {
    $kwy = isset($_GET['seach']) ? $_GET['search'] : '';
    $products = show_product($kwy);
} elseif (exist_param("id_sport")) {
    $products = select_product_by_sport($id_sport);
} else {
    $products = select_all_product();
}

$VIEW_NAME = "list-ui.php";
require "../layout.php";
