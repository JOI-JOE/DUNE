<?php
require "../../Dao/control_Order.php";
require "../../Dao/control_Customer.php";
require "../../Dao/control_Order_Item.php";
$user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$id_customer = $_SESSION['user']['id_customer'] ?  $_SESSION['user']['id_customer'] : "";

$orders = show_order($id_customer);

$list_cart_his =  show_list_his_cart($id_customer);
