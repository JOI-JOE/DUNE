<style>
    .order-details {
        width: 100%;
        padding: 20px;
        background-color: white;
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
    }

    #my-table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 2rem;
        border: none;
    }

    #my-table th,
    #my-table td {
        padding: 8px;
        border: 1px solid black;
        text-align: center;
        color: black;
    }

    .order-details-2 {
        border-radius: 5px;
        width: 100%;
        padding: 20px;
        background-color: white;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .order-info,
    .order-rating {
        margin-bottom: 10px;
    }

    .order-info span {
        color: red;
        padding: 5px;
        border-radius: 10px;
        font-family: 500;
        background: aquamarine;
    }

    .order-info p,
    .order-rating p {
        margin: 15px;
    }

    .order-rating p {
        font-weight: bold;
    }
</style>
<div class="container">
    <h2 style="color:black;font-weight:600">CHI TIẾT ĐƠN HÀNG</h2>
    <div class="order-details">
        <div class="order-info">
            <p>Đơn hàng: <span><?= $status_order ?></span></p>
            <p>Mã đơn hàng: <span><?= $id_order ?></span></p>
            <p>Ngày mua: <span><?= $date_order ?></span></p>
            <p>Tổng Tiền: <span><?= $total_price . '$' ?></span></p>
            <p>Thông tin xuất hóa đơn GTGT: (Không có)</p>
        </div>
        <div class="product_rating">
            <button class="button">Comment Product</button>
        </div>
    </div>
    <div class="order-details-2">
        <table id="my-table">
            <thead>
                <tr>
                    <th>Information about Customer</th>
                    <th>Method Of Shipping</th>
                    <th>Payment Methods</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Name: <?= $name_customer ?> <br>
                        Address: <?= $address_order ?> <br>
                        Tel: <?= $phone_customer ?> <br>
                    </td>
                    <td>Standard delivery</td>
                    <td>Payment in cash upon receipt</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="order-details-2">
        <p style="font-size: 30px;color:brown">Total : <?= $total_price . '$' ?></p>
        <table id="my-table">
            <thead>
                <tr>
                    <th>Img</th>
                    <th>Name Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Money</th>
                    <th>Size</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $list_his_order =


                    $order_history = select_his_cart($date_order, $id_customer);

                foreach ($order_history as $order) {
                    $id_cart = $order["id_cart"]; // Extract cart ID
                    $quantity = $order["quantity"]; // Extract quantity

                    // Process each order here (e.g., calculate subtotal, display details)

                    // Example: Retrieve product details based on cart ID
                    $box_product = select_product_by_id_cart($id_cart);

                    if ($box_product) { // Check if product details are found
                        extract($box_product);
                        foreach ($list_size as $ls) {
                            if ($ls['id_size'] === $id_size) {
                                $isFirstMatch = true;

                                echo '<span>';
                                if ($isFirstMatch) {
                                    $box_size = $ls['name_size'];
                                    $isFirstMatch = false;
                                }
                                echo '</span>';
                                break;
                            }
                        }
                        $name_product = $box_product["name_product"];
                        echo '
                        <tr>
                        <td width="100"><img src="../../Content/Images/product/' . $img_product . '" ></td>
                        <td>' . $name_product . '</td>
                        <td>' . $price . '</td>
                        <td>' . $quantity . '</td>
                        <td>' . ($quantity * $price) . '</td>
                        <td>' . $box_size . '</td>
                        </tr>
                        ';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>


</div>