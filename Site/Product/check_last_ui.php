<style>
    input {
        color: black;
        border: 1px solid gray;
        width: 150px;
        outline: none;
        border-radius: 5px;
        padding: 0 5px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    thead {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    th {
        padding: 10px 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    td {
        width: 20px;
        height: 50px;
        text-align: center;
        color: black;
        padding: 10px 15px;
        border: 1px solid #ddd;
        vertical-align: center;
    }


    .button-86 {
        background-color: #3498db;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .button-86:hover {
        background-color: #2980b9;
    }

    #totalPrice {
        color: black;
        margin: 10px;
        font-size: 30px;
    }

    h3 {
        color: black;
    }

    h1 {
        font-size: large;
        color: #3498db;
    }

    .pay_method {
        margin-top: 10px;
        padding-top: 20px;
    }

    .pay_method input {
        display: none;
    }

    .pay_method .category {

        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 15px;
    }

    .category label {
        /* width: 100%; */
        /* height: 65px; */
        height: 100px;
        padding: 20px;
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: space-between;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
    }

    #visa:checked~.category .visaMethod,
    #paypal:checked~.category .paypalMethod {
        box-shadow: 0px 0px 0px 1px #6064b6;
    }

    #visa:checked~.category .visaMethod .check,
    #paypal:checked~.category .paypalMethod .check {
        display: block;
    }

    label .imgName {
        display: flex;
        /* justify-content: space-between;
     */
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
        gap: 50px;
    }

    .imgName .imgContainer {
        width: 100px;
        display: flex;
        justify-content: center;
        align-items: center;

        position: absolute;
        top: 35%;
        transform: translateY(-35%);
    }

    /* img {
        width: 50px;
        height: auto;
    } */

    .visa img {
        width: 100px;
        /* margin-left: 5px; */
    }

    .paypal img {
        width: 100px;
    }

    .check {
        display: none;
        position: absolute;
        top: -4px;
        right: -4px;
    }

    .check i {
        font-size: 18px;
    }
</style>

<body>
    <form action="" method="post">
        <div class="container">
            <div class="checkout-items">
                <div class="product" id="product1">
                    <div class="product-details">
                        <div class="product-title">
                            <h1>USER: <?= $name_customer ?></h1>
                        </div>
                        <div class="product-price">
                        </div>
                        <div class="quantity">
                            <div>ADDRESS:
                                <input type="text" name="new_address" placeholder="your address" value="<?= $address_customer ?>">
                            </div>
                            <div>PHONE:
                                <h3><?= $phone_customer ?></h3>
                            </div>
                            <div>EMAIL:
                                <h3><?= $email_customer ?></h3>
                            </div>
                        </div>
                        <!-- ----------------------- -->
                        <div class="pay_method">
                            <h1>Pay Method:</h1>
                            <input type="radio" name="payment" id="visa" value="1" checked>
                            <input type="radio" name="payment" id="paypal" value="0">


                            <div class="category">
                                <label for="visa" class="visaMethod">
                                    <div class="imgName">
                                        <div class="imgContainer visa">
                                            <img src="../../Content/Images/icon/payment (1).png" alt="">
                                        </div>
                                        <!-- <span class="name">VISA</span> -->
                                    </div>
                                    <span class="check"><i class="bx bxs-chevron-down-circle" style="color: #6064b6;"></i></span>
                                </label>

                                <label for="paypal" class="paypalMethod">
                                    <div class="imgName">
                                        <div class="imgContainer paypal">
                                            <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                                        </div>
                                        <!-- <span class="name">Paypal</span> -->
                                    </div>
                                    <span class="check"><i class="bx bxs-chevron-down-circle" style="color: #6064b6;"></i></span>
                                </label>
                            </div>
                        </div>

                        <!-- ----------------------- -->
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $total = 0;
                    foreach ($cart_items as $item) {
                        $products =  show_product_one($item['id_product']);

                        $_SESSION['subtotal'] = $item['subtotal'] . "<br>";  // Access subtotal directly
                        $total += $item['subtotal'];
                        extract($products);
                        echo '
                    <tr>
                    
                    <td >
                    <img src="../../Content/Images/product/' . $img_product . '" alt="" >
                    </td>
                     <td>' . $name_product . '</td>
                     <td>' . $item['size'] . '</td>
                     <td>' . $name_color . '</td>
                     <td>' . $item['price'] . '$</td>
                     <td>' . $item['quantity'] . '</td>
                     <td>' . $item['subtotal'] . '$</td>
                    </tr>
                    ';
                    }
                    // foreach ($list_cart as $lc) {
                    //     extract($lc);
                    //     // print_r($products);

                    // }
                    ?>
                </tbody>
            </table>


            <div class="checkout-section">
                <h2>Total Price</h2>
                <p id="totalPrice">
                    $<?= number_format($total) ?>
                </p>
                <input type="submit" name="checkout" value="Checkout">
            </div>
    </form>
    </div>