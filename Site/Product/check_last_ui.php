<style>
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
        text-align: center;

        padding: 10px 15px;
        border: 1px solid #ddd;
        vertical-align: top;
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
</style>

<body>
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
                            <h3><?= $address_customer ?></h3>
                        </div>
                        <div>PHONE:
                            <h3><?= $phone_customer ?></h3>
                        </div>
                        <div>EMAIL:
                            <h3><?= $email_customer ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_cart as $lc) {
                    extract($lc);
                    $products =  show_product_one($lc['id_product']);
                    // print_r($products);
                    extract($products);
                    echo '
                    <tr>
                     <td>' . $name_product . '</td>
                    <td>' . $name_size . '</td>
                    <td>' . $name_color . '</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>Id_Cart</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <form action="" method="POST">
                <tbody>
                    <?php
                    foreach ($order_item as $lc) {
                        extract($lc);
                        echo '<tr>
                    <td>' . $id_cart . '</td>
                    <td>' . $price . '$</td>
                    <td>' . $quantity . '</td>
                    <td>' . $total_item . '$</td>
                    <input type="hidden" name="id_order" value="' . $id_cart . '">
                    </tr>';
                    }
                    ?>
                </tbody>
            </form>
        </table>

        <form action="" method="post">
            <div class="checkout-section">
                <h2>Total Price</h2>
                <p id="totalPrice">
                    $<?= $total ?>
                </p>
                <input type="submit" name="checkout" value="Checkout">
            </div>
        </form>
    </div>