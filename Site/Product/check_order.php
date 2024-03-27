<?php
require '../../Dao/control_Order_Item.php';
require '../../Dao/control_Order.php';
require "../../Dao/control_Customer.php";

// echo $name_customer;
// echo $dateOrder = date('Y-m-d');
// echo $status = "Bắt đầu";
// echo $address = $address_customer;
// echo $id_customer = $id_customer;

if (exist_param('btn_checkout', $_REQUEST)) {
    // Flag to prevent multiple submissions
    static $isProcessing = false;
    if (!$isProcessing) {
        $cart_items = array_map(function ($quantity, $item) {
            return array(
                'quantity' => $quantity,
                'price' => $item['price'],
                'id_cart' => $item['id_cart'],
                'subtotal' => $quantity * $item['price'],
            );
        }, $quantities, $list_cart);

        $total = 0; // Initialize total to zero
        $dateOrder = date('Y-m-d');
        foreach ($cart_items as $item) {
            $id_cart = $item['id_cart'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            $total_item = $price * $quantity;
            if (!check_order_item($id_cart)) {
                add_order_item($id_cart, $price, $total_item, $quantity);
                add_his_cart($quantity, $id_cart, $id_customer, $dateOrder);
            }

            $total += $item['subtotal'];
        }
        $isProcessing = true;
    }
}
if (!exist_param('btn_checkout', $_REQUEST)) {
    delete_order_item();
}
// echo $total;
