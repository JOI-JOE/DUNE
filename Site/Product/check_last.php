<?php
require "../../Dao/control_Customer.php";
require "../../Dao/control_Order_Item.php";

$user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$user = show_customer_by_email($user_email);
extract($user);

$name_customer;
$dateOrder = date('Y-m-d');
$status = "Bắt đầu";
$address = $address_customer;
$id_customer = $id_customer;

$total = 0; // Initialize total to 0
$items = total_order();  // Assuming $items is an array of results

foreach ($items as $item) {
    $total += $item['total_item']; // Add each item's total to the overall total
}

$order_item = show_order_item();
