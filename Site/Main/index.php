<?php

require "../../global.php";
require "../../Dao/control_Product.php";
require "../../Dao/control_Brand.php";
require "../../Dao/control_Sport.php";
require "../../Dao/control_Cart.php";
require '../../Dao/control_Color.php';
require '../../Dao/control_Size.php';
require '../../Dao/control_Catergory.php';
require '../../Dao/control_History_Cart.php';



extract($_REQUEST);
// ---------------- PAGE MEN ---------------- //
if (exist_param('men', $_REQUEST)) {
    $list_cate = loadall_catergory();
    $list_color = loadall_color();
    $list_size = loadall_size();
    $list_brand  = show_brand();
    $list_sport = loadall_sport();
    $box = $_GET['men'];

    if (preg_match('/id_color=(.*)/', $box, $matches)) {
        $id_color = $matches[1];
        // echo "Giá trị id_color: " . $id_color;
        $list_product = select_product_by_color($id_color);
    } elseif (preg_match('/id_sport=(.*)/', $box, $matches)) {
        $id_sport = $matches[1];
        // echo "Giá trị id_sport: " . $id_sport;
        $list_product = select_product_by_sport($id_sport);
    } elseif (preg_match('/id_size=(.*)/', $box, $matches)) {
        $id_size = $matches[1];
        // echo "Giá trị id_size: " . $id_size;
        $list_product = select_product_by_size($id_size);
    } elseif (preg_match('/id_catergory=(.*)/', $box, $matches)) {
        $id_catergory = $matches[1];
        // echo "Giá trị id_catergory: " . $id_catergory;
        $list_product = select_product_by_catergory($id_catergory);
    } elseif (preg_match('/id_brand=(.*)/', $box, $matches)) {
        $id_brand = $matches[1];
        // echo "Giá trị id_brand: " . $id_brand;
        $list_product =  select_product_by_brand($id_brand);
    } else {
        $list_product =  show_product();
    }
    $VIEW_NAME = "men.php";

    // ---------------- PAGE NEW ---------------- //
} elseif (exist_param('new', $_REQUEST)) {
    $VIEW_NAME = "new.php";

    // ---------------- PAGE LOGIN ---------------- //
} elseif (exist_param('login', $_REQUEST)) {
    include_once "../Account/login.php";
    $VIEW_NAME = "../Account/login_form.php";

    // ---------------- PAGE FORGET PASS ---------------- //
} elseif (exist_param('fgPw', $_REQUEST)) {
    include_once "../Account/forget_Ps.php";
    $VIEW_NAME = "../Account/forget_Ps_form.php";

    // ---------------- PAGE SIGNUP ---------------- //
} elseif (exist_param('signup', $_REQUEST)) {
    include_once "../Account/signup.php";
    $VIEW_NAME = "../Account/signup_form.php";

    // ---------------- PAGE CHANGE PASS ---------------- //
} elseif (exist_param('changePs', $_REQUEST)) {
    include_once "../Account/change_Ps.php";
    $VIEW_NAME = "../Account/change_Ps_form.php";

    // ============== SEARCH PRODUCTS ================= //
} elseif (exist_param('search', $_REQUEST)) {
    // $kyw = $_GET['search'];
    $kwy = isset($_GET['search']) ? $_GET['search'] : '';
    $products = show_product($kwy);
    $VIEW_NAME = "../Product/list-ui.php";
} elseif (exist_param('cart', $_REQUEST)) {
    $VIEW_NAME = "../Product/checkout_ui.php";
    // ============== DETAIL PRODUCTS ================= //
} elseif (exist_param('id_product', $_REQUEST)) {
    $products = show_product_one($id_product);
    extract($products);
    $color = loadall_color();
    $size = loadall_size();
    increase_view_product($id_product);
    $VIEW_NAME = "../Product/detail_ui.php";
    // ============== ADD PRODUCTS TO CART ================= //
} elseif (exist_param('add_cart', $_REQUEST)) {
    $id_product = $_REQUEST['add_cart'];
    if (isset($_POST['name_size'])) {
        $choose_size = $_POST['name_size'];
        update_size_one($id_product, $choose_size);
    }
    $id_customer = $_SESSION['user']['id_customer'] ?  $_SESSION['user']['id_customer'] : "";

    if (check_product_in_cart($id_customer, $id_product)) {
        update_cart_1($id_product);
    } else {
        add_to_cart($id_customer, $id_product);
    }
    $VIEW_NAME = "../Product/checkout_ui.php";
    // ============== ADD CART TO ORDER ITEM ================= //
} elseif (exist_param('ad_orI', $_REQUEST)) {
    include_once "../Product/check_last.php";
    $VIEW_NAME = "../Product/check_last_ui.php";
    // ============== CHECK LAST CART ================= //
} elseif (exist_param('ck_ls', $_REQUEST)) {
    if (isset($_REQUEST['ck_ls'])) {
        update_cart_remove_1();
    }
    $VIEW_NAME = "home.php";
    // ============== CHECK HISTORY CART ================= //
} elseif (exist_param('his_cart', $_REQUEST)) {
    require "history.php";
    $VIEW_NAME = "history_cart.php";
    // ============== CHECKOUT CART ================= //
} elseif (exist_param('checkout', $_REQUEST)) {
    $VIEW_NAME = "../Product/checkout_ui.php";
    // ============== DELETE CART ================= //
} elseif (exist_param('del_cart', $_REQUEST)) {
    $id_cart = $_REQUEST['del_cart'];
    header("Refresh: 0.2; url=../Main/index.php?cart");
    delete_cart($id_cart);
    $VIEW_NAME = "../Product/checkout_ui.php";
    // ==============  DELETE ALL CART ================= //
} elseif (exist_param('del_all', $_REQUEST)) {
    $id_customer = $_SESSION['user']['id_customer'] ?  $_SESSION['user']['id_customer'] : "";
    delete_all_cart($id_customer);
    $VIEW_NAME = "../Product/checkout_ui.php";
    // ==============  LOGOUT ================= //
} elseif (exist_param('logout', $_REQUEST)) {
    session_unset();
    $VIEW_NAME = "../Account/login_form.php";
} else {
    $VIEW_NAME = "home.php";
}

$user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$id_customer = isset($_SESSION['user']['id_customer']) ?  $_SESSION['user']['id_customer'] : "";

$number = count_cart($user_email);
$list_cart = show_list_cart($user_email);


$list_size = loadall_size();
$list_iconic = select_product_iconic();
$list_brand  = show_brand();
$list_sport = loadall_sport();
require "../layout.php";
