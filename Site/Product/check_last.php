<?php
require "../../Dao/control_Customer.php";
require "../../Dao/control_Order.php";
require "../../Dao/control_History_Cart.php";

$user_email = isset($_SESSION['user']) ? $_SESSION['user']['email_customer'] : "";
$id_customer = isset($_SESSION['user']) ? $_SESSION['user']['id_customer'] : "";

if (isset($_POST['btn_checkout'])) {
    // echo "hau dep trai";
    static $isProcessing = false;
    if (!$isProcessing) {
        $_SESSION['cart_item'] = $cart_items = array_map(function ($quantity, $item) {
            return [
                'id_product' => $item['id_product'],
                'quantity' => $quantity,
                'price' => $item['price'],
                'size' => $item['size'],
                'subtotal' => $quantity * $item['price'],
            ];
        }, $quantities, $_SESSION['list_cart']);

        $total = 0;
        foreach ($cart_items as $item) {
            update_quatity($id_customer, $item['id_product'], $item['size'], $item['quantity']);
            $total += $item['subtotal'];
        }
        // print_r($cart_items);
        $_SESSION['total'] = $total;

        $isProcessing = true;
    }
}


$user = show_customer_by_email($user_email);
extract($user);

if (isset($_POST['checkout'])) {
    $paymethod =  $_POST['payment'];
    $total_price = $_SESSION['total'];
    $status = "Order Confirmed";

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_order = date('Y-m-d H:i');
    $new_address = empty($_POST['new_address']) ? $address_customer :  $_POST['new_address'];
    $id_order = get_last_order($id_customer, $date_order, $status, $new_address, $total_price, $paymethod);

    foreach ($_SESSION['cart_item'] as $item) {
        $id_product = $item['id_product'];
        $quantity = $item['quantity'];
        add_his_cart($quantity, $id_product, $id_customer, $id_order, $item['size']);
    }
    delete_all_cart($id_customer);
    echo "<script>alert('Cảm ơn ca ca đã mua hàng tại Dune!'); window.location.href = '  ../Main/index.php?his_cart';</script>";
}
