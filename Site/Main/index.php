<?php
require "../../global.php";
require "../../Dao/control_Product.php";
require "../../Dao/control_Brand.php";
require "../../Dao/control_Sport.php";

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
} elseif (exist_param('cart', $_REQUEST)) {
    $VIEW_NAME = "../Product/cart_ui.php";
} elseif (exist_param('edit', $_REQUEST)) {
    $VIEW_NAME = "../Account/update_Ac_form.php";
} elseif (exist_param('checkout', $_REQUEST)) {
    $VIEW_NAME = "../Product/checkout_ui.php";
} elseif (exist_param('logout', $_REQUEST)) {
    session_unset();
    $VIEW_NAME = "../Account/login_form.php";
} else {
    $VIEW_NAME = "home.php";
}

$list_iconic = select_product_iconic();
$list_product =  show_product();
$list_brand  = show_brand();
$list_sport = loadall_sport();
require "../layout.php";
