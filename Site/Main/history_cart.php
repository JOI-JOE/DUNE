<style>
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .order {
        margin-bottom: 30px;
        border: 1px solid #000;
        border-radius: 10px;
        overflow: hidden;
        background-color: #000;
        color: #fff;
    }

    .order-header {
        background-color: #333;
        padding: 3px;
        color: #fff;
        text-align: center;
    }

    h1 {
        margin: 0;
        font-size: 40px;
    }

    .order-header p {
        margin: 5px 0;
    }

    .order-details {
        padding: 20px;
    }

    .product-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .product-info img {
        max-width: 100px;
        margin-right: 20px;
        border-radius: 5px;
    }

    .product-text p {
        margin: 5px 0;
        font-size: 18px;
    }

    .product-text p:last-child {
        margin-bottom: 0;
    }

    .order-total {
        font-weight: bold;
        text-align: right;
        padding-top: 10px;
        border-top: 1px solid #fff;
        margin-top: 10px;
    }
</style>
</style>
<div class="his container">
    <h1>Order History</h1>
    <?php
    foreach ($orders as $order) {
        extract($order);
        echo '
        <div class="order">
        <div class="order-header">
            <h2>Order: ' . $id_order . '</h2>
            <p>Date: ' . $date_order . '</p>
            <p>Total: $' . $total_price . '</p>
        </div>
        ';
    }
    ?>

    <?php
    foreach ($list_cart_his as $ls) {
        extract($ls);
        echo '
        <div class="order-total">
            <p>Date: ' . $date_order . '</p>
        </div>
        <div class="order-details">
        <div class="product-info">
            <img src="../../Content/Images/product/' . $img_product . '" alt="">
            <div class="product-text">
                <p>Product: ' . $name_product . '</p>
                <p>Price: ' . $price . '$</p>
            </div>
        </div>
        </div> 
        
        
        ';
    }
    ?>

</div>

</div>