<style>
    #my-table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 2rem;
        border: none;
    }

    #my-table th.active {
        border-bottom: 2px solid black;

    }

    #my-table th,
    #my-table td {
        padding: 8px;
        text-align: center;
        color: black;
    }

    #my-table a {
        cursor: pointer;
    }

    #my-table a:hover {
        text-decoration: underline;
    }


    #my-table th {
        background-color: hsl(192, 7%, 86%);
        font-weight: bold;
    }
</style>
<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách thống kê </h1>

    <table id="my-table">
        <thead>
            <?php
            foreach ($box_state as $bs) {
                extract($bs);
                // echo $total_orders;
                // echo $total_shipping_orders;
                // echo $total_prepare_shipping;
                echo '
                <tr>
                <th>' . $total_orders . '</th>
                <th>' . $Order_Confirmed . '</th>
                <th>' . $Preparing_your_order . '</th>
                <th>' . $Shipped . '</th>
                <th>' . $Delivered . '</th>
                <th>' . $Cancelled . '</th>
            </tr>
                ';
            }

            ?>

        </thead>
        <tbody>
            <tr>
                <th class="active">Total Order</th>
                <th>Order Confirmed</th>
                <th>Preparing your order</th>
                <th>Shipped</th>
                <th>Delivered</th>
                <th>Cancelled</th>
            </tr>
        </tbody>
    </table>

    <table class="table table-dark table-striped table-sm">
        <thead>
            <tr>
                <th>Name Product</th>
                <th>Min Quantity</th>
                <th>Max Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($box_statistic  as $or) {

                extract($or);
                echo '
            <tr>
            <td>' . $name_product . '</td>
            <td>' . $quantity_min . '</td>
            <td>' . $quantity_max . '</td>
            </tr>
            ';
            }
            ?>
        </tbody>
    </table>

    <table id="my-table" class="table table-sm">
        <thead>
            <tr>
                <th>Name Customer</th>
                <th>Min Price</th>
                <th>Max Price</th>
                <th>Order Count</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($box_order  as $or) {

                extract($or);
                echo '
            <tr>
            <td>' . $name_customer . '</td>
            <td>' . $price_min . '$</td>
            <td>' . $price_max . '$</td>
            <td>' . $order_count . '</td>
            </tr>
            ';
            }
            ?>
        </tbody>
    </table>


</div>