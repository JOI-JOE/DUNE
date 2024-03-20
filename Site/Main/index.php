<?php
require "../../global.php";
require "../../Dao/control_Product.php";
require "../../Dao/control_Brand.php";
require "../../Dao/control_Sport.php";
require "../../Dao/control_Cart.php";
require '../../Dao/control_Color.php';
require '../../Dao/control_Size.php';


extract($_REQUEST);
if (exist_param('men', $_REQUEST)) {
    $VIEW_NAME = "men.php";
} elseif (exist_param('new', $_REQUEST)) {
    $VIEW_NAME = "new.php";
} elseif (exist_param('sale', $_REQUEST)) {
    $VIEW_NAME = "sale.php";
} elseif (exist_param('login', $_REQUEST)) {
    $VIEW_NAME = "../Account/login_form.php";
} elseif (exist_param('fgPw', $_REQUEST)) {
    $VIEW_NAME = "../Account/forget_Ps_form.php";
} elseif (exist_param('signup', $_REQUEST)) {
    $VIEW_NAME = "../Account/signup_form.php";
} elseif (exist_param('changePs', $_REQUEST)) {
    $VIEW_NAME = "../Account/change_Ps_form.php";
    // cart
} elseif (exist_param('cart', $_REQUEST)) {
    $VIEW_NAME = "../Product/cart_ui.php";

    // search
} elseif (exist_param('search', $_REQUEST)) {
    // $kyw = $_GET['search'];
    $kwy = isset($_GET['search']) ? $_GET['search'] : '';
    $products = show_product($kwy);
    $VIEW_NAME = "../Product/list-ui.php";
    // end search
} elseif (exist_param('id_brand', $_REQUEST)) {
    $products = select_product_by_brand($id_brand);
    $VIEW_NAME = "../Product/list-ui.php";
} elseif (exist_param('id_sport', $_REQUEST)) {
    $products = select_product_by_sport($id_sport);
    $VIEW_NAME = "../Product/list-ui.php";
} elseif (exist_param('id_product', $_REQUEST)) {
    $products = show_product_one($id_product);
    extract($products);

    $color = loadall_color();
    $size = loadall_size();
    // increase view 
    increase_view_product($id_product);


    $VIEW_NAME = "../Product/detail_ui.php";
} elseif (exist_param('edit', $_REQUEST)) {
    $VIEW_NAME = "../Account/update_Ac_form.php";
} elseif (exist_param('checkout', $_REQUEST)) {
    $VIEW_NAME = "../Product/checkout.php";
} elseif (exist_param('logout', $_REQUEST)) {
    session_unset();
    $VIEW_NAME = "../Account/login_form.php";
} else {
    $VIEW_NAME = "home.php";
}

$user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$number = count_cart($user_email);
$list_cart = show_list_cart($user_email);

$list_iconic = select_product_iconic();
$list_product =  show_product();
$list_brand  = show_brand();
$list_sport = loadall_sport();
require "../layout.php";
