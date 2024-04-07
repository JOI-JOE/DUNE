<style>
    .order-details {
        padding: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
        display: grid;
        background-color: white;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        border-bottom: 1px solid #7a7fe2;
        border-radius: 20px;
        padding-bottom: 20px;
    }

    .order-details .form input {
        width: 100%;
        padding: 10px 20px;
        box-sizing: border-box;
        border-radius: 10px;
        margin-top: 10px;
        border: none;
        background-color: black;
        color: #fff;
    }

    .order-details .right .return .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        color: black;
    }

    .checkoutLayout {
        gap: 50px;
        padding: 20px;
    }

    .returnCart h1 {
        border-top: 1px solid #eee;
        padding: 20px 0;
    }

    .returnCart .list .item img {
        height: 80px;
        padding: 5px;
        border-radius: 10px;
    }

    .returnCart .list .item {
        display: grid;
        grid-template-columns: 80px 1fr 50px 80px;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
        padding: 0 10px;
        box-shadow: 0 10px 20px #5555;
        border-radius: 20px;
    }

    .returnCart .list .item .name,
    .returnCart .list .item .returnPrice {
        font-size: large;
        font-weight: bold;
    }

    .checkoutLayout {
        background-color: #fff;
        border-radius: 20px;
        padding: 40px;
        color: black;
    }

    .check_road .road_shipping {
        display: grid;
        border-radius: 10px;
        color: black;
        gap: 10px;
        padding: 10px;
        margin-top: 10px;
        width: 100%;
    }

    .road_shipping h2 {
        padding: 5px;
        background-color: hsl(202, 15%, 54%);
        ;
        border-radius: 20px;
    }

    .circle {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #fff;
        margin-right: 5px;
    }

    .circle.active {
        background-color: yellow;
    }
</style>
<div class="container">
    <h2 style="color:black;font-weight:600">
        <a href="../Main/index.php?his_cart"> CHI TIẾT ĐƠN HÀNG</a>
    </h2>
    <div class="order-details">
        <div class="right">

            <div class="form">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" value="<?= $name_customer ?>" disabled>
                </div>

                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="<?= $phone_customer ?>" disabled>
                </div>

                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="<?= $address_order ?>" disabled>
                </div>
            </div>
            <div class="return">
                <div class="row">
                    <div>Pay method:</div>
                    <?php
                    $method = ($method_pay == 1) ? "Pay in cash" : "Pay by PayPa";

                    ?>
                    <div class="totalQuantity"><?= $method ?></div>
                </div>
                <div class="row">
                    <div>Total Price:</div>
                    <div class="totalPrice">$<?= number_format($total_price) ?></div>
                </div>
            </div>

        </div>
        <div class="check_road">
            <h1>Checkout</h1>
            <div class="road_shipping">

                <h2><span class="circle"></span>- Time Order : <?= $date_order ?></h2>
                <h2> <span class="circle active"></span>Status - <?= $status_order  ?></h2>
                <!-- <h2> <span class="circle"></span>- Đang giao hàng</h2>
                <h2> <span class="circle"></span>- Hoàn Tất</h2> -->
            </div>


        </div>
    </div>


    <div class="checkoutLayout">
        <div class="returnCart">
            <a href="../Main/index.php">keep shopping</a>
            <h1>Your Order</h1>
            <?php
            $order_history = select_his_cart($id_order, $id_customer);
            foreach ($order_history as $order) {
                extract($order);
                $box_product = show_product_one($id_product);
                extract($box_product);
                echo '
      
        <div class="list">
            <div class="item">
                <img src="../../Content/Images/product/' . $img_product . '" >
                <div class="info">
                    <div class="name">' . $name_product . '</div>
                    <div class="price">$' . $price . ' / 1 product / 
                    </span>size : ' . $order['size'] . ' </span>
                    </div>

                </div>
                <div class="quantity">' . $order['quantity']  . '</div>
                <div class="returnPrice">$' . ($order['quantity'] * $price) . '</div>
            </div>

        </div>
              ';
            }
            ?>
        </div>
    </div>

</div>
<!-- ------------------------------------------- -->