<?php
require '../../global.php';

extract($_REQUEST);
if (exist_param("id_product")) {
    if (isset($_POST['add-cart']) && $_POST['add-cart']) {
        $id_customer = $_SESSION['user']['id_customer'] ?  $_SESSION['user']['id_customer'] : "";
        if (!check_Cart($id_product)) {
            echo "<script>alert('Sản phẩm đã có trong rỏ hàng');</script>";
        }
        add_to_cart($id_customer, $id_product);
    }
}


$VIEW_NAME = "Product/cart_ui.php";
require "../layout.php";
