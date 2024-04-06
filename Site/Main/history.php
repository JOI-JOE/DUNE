<?php
require "../../Dao/control_Order.php";
require "../../Dao/control_History_Cart.php";

// $user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$id_customer = $_SESSION['user']['id_customer'] ?  $_SESSION['user']['id_customer'] : "";

$orders = show_order($id_customer);
extract($orders);


$box_state = count_status($id_customer);


if (isset($_REQUEST['cancel_order'])) {
    $id_order = $cancel_order;
    cancel_order($id_order);
    header("Location: ../Main/index.php?his_cart");
}
