<?php


session_start(); // Ensure session is started

defined('SITE_URL') || define('SITE_URL', 'http://localhost/BOX_PHP/DUNE');

function check_login()
{
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'boss') {
        // Check for both Admin/ and BOX_PHP/DUNE/Admin/ paths
        if (str_contains($_SERVER['REQUEST_URI'], '/Admin/') || str_contains($_SERVER['REQUEST_URI'], '/BOX_PHP/DUNE/Admin/')) {
            $_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
            header("Location: " . SITE_URL . "/Site/Main/index.php?return=" . rawurlencode($_SERVER['REQUEST_URI']));
            exit; // Terminate script execution
        }
    }
}

check_login();

include "../model/pdo.php";
include "../model/brand.php";
include "../model/size.php";
include "../model/color.php";
include "../model/sport.php";
include "../model/catergory.php";
include "../model/product.php";
include "../model/customer.php";


include "header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // danh muc
        case 'listbrand':
            $listbrand = loadall_brand();

            include "brand/list.php";
            break;
        case 'addbrand':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_brand = $_POST['name_brand'];
                insert_brand($name_brand);
                $thongbao = "them thanh cong";
            }
            include "brand/add.php";
            break;
        case 'deletebrand':
            if (isset($_GET['id_brand']) && ($_GET['id_brand'] > 0)) {
                delete_brand($_GET['id_brand']);
            }
            $listbrand = loadall_brand();
            include "brand/list.php";
            break;
        case 'editbrand':
            if (isset($_GET['id_brand']) && ($_GET['id_brand'] > 0)) {
                $brand = loadone_brand($_GET['id_brand']);
            }
            include "brand/update.php";
            break;
        case 'updatebrand':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_brand = $_POST['name_brand'];
                $id_brand = $_POST['id_brand'];
                update_brand($name_brand, $id_brand);
            }
            $listbrand = loadall_brand();
            include "brand/list.php";
            break;



            //size 
        case 'listsize':
            $listsize = loadall_size();

            include "size/list.php";
            break;
        case 'addsize':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_size = $_POST['name_size'];
                insert_size($name_size);
                $thongbao = "them thanh cong";
            }
            include "size/add.php";
            break;
        case 'deletesize':
            if (isset($_GET['id_size']) && ($_GET['id_size'] > 0)) {
                delete_size($_GET['id_size']);
            }
            $listsize = loadall_size();
            include "size/list.php";
            break;
        case 'editsize':
            if (isset($_GET['id_size']) && ($_GET['id_size'] > 0)) {
                $size = loadone_size($_GET['id_size']);
            }
            include "size/update.php";
            break;
        case 'updatesize':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_size = $_POST['name_size'];
                $id_size = $_POST['id_size'];
                update_size($name_size, $id_size);
            }
            $listsize = loadall_size();
            include "size/list.php";
            break;
            //sport


            //sport
        case 'listsport':
            $listsport = loadall_sport();

            include "sport/list.php";
            break;
        case 'addsport':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_sport = $_POST['name_sport'];
                insert_sport($name_sport);
                $thongbao = "them thanh cong";
            }
            include "sport/add.php";
            break;
        case 'deletesport':
            if (isset($_GET['id_sport']) && ($_GET['id_sport'] > 0)) {
                delete_sport($_GET['id_sport']);
            }

            $listsport = loadall_sport();
            include "sport/list.php";
            break;
        case 'editsport':
            if (isset($_GET['id_sport']) && ($_GET['id_sport'] > 0)) {
                $sport = loadone_sport($_GET['id_sport']);
            }
            include "sport/update.php";
            break;
        case 'updatesport':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_sport = $_POST['name_sport'];
                $id_sport = $_POST['id_sport'];
                update_sport($name_sport, $id_sport);
            }
            $listsport = loadall_sport();
            include "sport/list.php";
            break;


            //color

            //color
        case 'listcolor':
            $listcolor = loadall_color();

            include "color/list.php";
            break;
        case 'addcolor':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_color = $_POST['name_color'];
                insert_color($name_color);
                $thongbao = "them thanh cong";
            }
            include "color/add.php";
            break;
        case 'deletecolor':
            if (isset($_GET['id_color']) && ($_GET['id_color'] > 0)) {
                delete_color($_GET['id_color']);
            }
            $listcolor = loadall_color();
            include "color/list.php";
            break;
        case 'editcolor':
            if (isset($_GET['id_color']) && ($_GET['id_color'] > 0)) {
                $color = loadone_color($_GET['id_color']);
            }
            include "color/update.php";
            break;
        case 'updatecolor':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_color = $_POST['name_color'];
                $id_color = $_POST['id_color'];
                update_color($name_color, $id_color);
            }
            $listcolor = loadall_color();
            include "color/list.php";
            break;



            //catergory    
        case 'listcatergory':
            $listcatergory = loadall_catergory();

            include "catergory/list.php";
            break;
        case 'addcatergory':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_catergory = $_POST['name_catergory'];
                insert_catergory($name_catergory);
                $thongbao = "them thanh cong";
            }
            include "catergory/add.php";
            break;
        case 'deletecatergory':
            if (isset($_GET['id_catergory']) && ($_GET['id_catergory'] > 0)) {
                delete_catergory($_GET['id_catergory']);
            }

            $listcatergory = loadall_catergory();
            include "catergory/list.php";
            break;
        case 'editcatergory':
            if (isset($_GET['id_catergory']) && ($_GET['id_catergory'] > 0)) {
                $catergory = loadone_catergory($_GET['id_catergory']);
            }
            include "catergory/update.php";
            break;
        case 'updatecatergory':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_catergory = $_POST['name_catergory'];
                $id_catergory = $_POST['id_catergory'];
                update_catergory($name_catergory, $id_catergory);
            }
            $listcatergory = loadall_catergory();
            include "catergory/list.php";
            break;

            $listcatergory = loadall_catergory();
            include "catergory/list.php";
            break;
            //product

        case 'listproduct':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_brand = $_POST['id_brand'];
            } else {
                $kyw = '';
                $id_brand = 0;
            }
            $listbrand = loadall_brand();
            $listproduct = loadall_product($kyw, $id_brand);
            include "product/list.php";
            break;

        case 'addproduct':
            if (isset($_POST['themsp']) && ($_POST['themsp'])) {

                $name_product = $_POST['name_product'];
                $id_brand = $_POST['id_brand'];
                $id_color = $_POST['id_color'];
                $id_sport = $_POST['id_sport'];
                $id_size = $_POST['id_size'];
                $id_catergory = $_POST['id_catergory'];
                $sale = $_POST['sale'];
                $price = $_POST['price'];
                $quanity = $_POST['quanity'];
                $date_product = $_POST['date_product'];
                $view = $_POST['view'];
                $description = $_POST['description'];


                $file = $_FILES['img_product'];
                $img_product = $file['name'];
                move_uploaded_file($file['tmp_name'], "../../Content/Images/product/" . $img_product);
                insert_product($name_product, $id_brand, $id_color, $id_sport, $id_size, $id_catergory, $img_product, $sale, $price, $quanity, $date_product, $view, $description);
                $thongbao = "them thanh cong";
            }
            $listbrand = loadall_brand();
            $listcolor = loadall_color();
            $listsport = loadall_sport();
            $listsize = loadall_size();
            $listcatergory = loadall_catergory();
            include "product/add.php";
            break;

        case 'deleteproduct':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                delete_product($_GET['id_product']);
            }
            $listbrand = loadall_brand();
            $listproduct = loadall_product('', 0);
            include "product/list.php";
            break;
        case 'editproduct':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $product = loadone_product($_GET['id_product']);
            }
            $listbrand = loadall_brand();
            $listcolor = loadall_color();
            $listsport = loadall_sport();
            $listsize = loadall_size();
            $listcatergory = loadall_catergory();
            include "product/update.php";
            break;
        case 'updateproduct':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_product = $_POST['id_product'];
                $name_product = $_POST['name_product'];
                $id_brand = $_POST['id_brand'];
                $id_color = $_POST['id_color'];
                $id_sport = $_POST['id_sport'];
                $id_size = $_POST['id_size'];
                $id_catergory = $_POST['id_catergory'];
                $sale = $_POST['sale'];
                $price = $_POST['price'];
                $quanity = $_POST['quanity'];
                $date_product = $_POST['date_product'];
                $view = $_POST['view'];
                $description = $_POST['description'];
                $file = $_FILES['img_product'];
                $img_product = $file['name'];
                move_uploaded_file($file['tmp_name'], "../../Content/Images/product/" . $img_product);
                update_product($id_product, $name_product, $id_brand, $id_color, $id_sport, $id_size, $id_catergory, $img_product, $sale, $price, $quanity, $date_product, $view, $description);
                $thongbao = "them thanh cong";
            }
            $listbrand = loadall_brand();
            $listcolor = loadall_color();
            $listsport = loadall_sport();
            $listsize = loadall_size();
            $listcatergory = loadall_catergory();
            $listproduct = loadall_product('', 0);
            include "product/list.php";
            break;







            //comment    
        case 'listcomment':

            include "comment/list.php";
            break;



            //customer
        case 'listcustomer':
            $listcustomer = loadall_customer();
            include "customer/list.php";
            break;




            //cart
        case 'listcart':
            include "cart/list.php";
            break;


            //order
        case 'listorder':
            include "order/list.php";
            break;

            //order
        case 'listorder_item':
            include "order_item/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}




include "footer.php";
