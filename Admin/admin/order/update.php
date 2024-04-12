<style>
    .cart {
        margin: 20px 0;
        background-color: #F6F5FA;
        ;
        padding: 60px 0;
    }

    .total-price {
        padding-bottom: 15px;
    }

    .cart-item {
        background-color: #fff;
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 20px;
    }

    .center-item {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .cart-item img {
        width: 50px;
    }

    .cart-item h5 {
        padding: 0 45px;
    }

    .cart-item .remove-item {
        width: 25px !important;
    }

    .btn-default {
        background-color: #fff;
    }

    .cart-item .form-control {
        background-color: #F6F5FA;
        border: none;
        width: 65px;
        border-radius: 10px !important;
        font-weight: 700;
        font-size: 20px;
    }

    .input-group {
        width: unset;
        flex-wrap: nowrap;
    }

    .status {
        text-align: right;
    }
</style>
<div>
    <h1 class="alert alert-success" style="color: green"> Update Order </h1>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo '
        <h6 class="alert alert-primary" style="color:chartreuse">' . $thongbao . '</h6>
        ';
    }
    ?>
    <form action="" method="post">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ID Order </label>
            <input type="text" class="form-control" name="id_order" value="<?= $id_order ?>" placeholder="auto_number" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Name Customer</label>
            <input type="text" class="form-control" placeholder="tên brand" name="name_customer" value="<?= $name_customer ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="" name="" value="<?= $address_order ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Total price</label>
            <input type="text" class="form-control" placeholder="" name="" value="<?= $total_price ?>$" disabled>
        </div>



        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Date Order</label>
            <input type="text" class="form-control" placeholder="tên brand" name="date_order" value="<?= $date_order ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="inputPassword4" class="form-label">Status</label>
            <?php
            $lock = ($status_order === "Delivered") ? "disabled" : "";
            ?>
            <select class="form-select" id="validationDefault04" name="status_order">

                <option value="<?= $status_order ?>" selected><?= $status_order ?></option>
                <option value="Order Confirmed" <?= $lock ?>>Order Confirmed</option>
                <option value="Preparing your order" <?= $lock ?>>Preparing your order</option>
                <option value="Shipped" <?= $lock ?>>Shipped</option>
                <option value="Delivered" <?= $lock ?>>Delivered</option>
                <option value="Cancelled" <?= $lock ?>>Cancelled</option>
            </select>
        </div>

        <input type="hidden" name="id_customer" value="<?= $id_customer ?>">

        <br>

        <section>
            <div class="container">
                <div class="cart">
                    <h2 class="px-5 p-2"><?= $name_customer ?>'s Order</h2>
                    <div class="col-md-12 col-lg-10 mx-auto">
                        <?php
                        foreach ($his_order as $ho) {
                            $box_product = loadone_product($ho['id_product']);
                            echo '
                            
                            <div class="cart-item">
                            <div class="row">
                                <div class="col-md-7 center-item">
                                    <img src="../../Content/Images/product/' . $box_product['img_product'] . '" alt="" />
                                    <h5>' . $box_product['name_product'] . '</h5>
                                </div>

                                <div class="col-md-5 center-item">
                                    <div class="input-group number-spinner">
                                    
                                    <input id="phone-number" type="number" id="quantity" min="0" class="form-control text-center" value=' . $ho['quantity'] . ' disabled />
                                    </div>
                                    <h5>$ <span id="phone-total">' . ($ho['quantity'] * $box_product['price']) . '</span></h5>
                                </div>
                            </div>
                        </div>

                            ';
                        }
                        ?>
                        <div class="cart-item">
                            <div class="row g-2">
                                <div class="col-6">
                                    <h5>Paymethod:</h5>
                                </div>
                                <?php
                                $method = ($method_pay == 1) ? "Pay in cash" : "Pay by PayPal";
                                ?>
                                <div class="col-6 status">
                                    <h7><span id="total-price"><?= $method ?></span></h7>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row g-2">
                                <div class="col-6">
                                    <!-- <h5>Subtotal:</h5> -->
                                    <!-- <h5>Tax:</h5> -->
                                    <h5>Total:</h5>
                                </div>

                                <div class="col-6 status">
                                    <h5>$<span id="total-price"><?= $total_price ?></span></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div>
            <button type="submit" name="capnhatOrder" value="capnhat" class="btn btn-primary">cập nhật </button>
            <a href="index.php?act=listorder" class="btn btn-primary"> danh sách </a>
        </div>
    </form>



</div>