<style>
    h1.order_logo {
        text-align: center;
        margin-bottom: 30px;
        font-size: 40px;
        color: black;
    }

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

    #my-table tr:nth-child(even) {
        background-color: hsl(192, 7%, 86%);
    }

    .button-27 {
        background-color: #000000;
        border: 2px solid #1A1A1A;
        border-radius: 15px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 15px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        outline: none;
        padding: 10px 10px;
        text-align: center;
        /* text-decoration: none; */
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
        margin-right: 5px;
    }

    .button-27:disabled {
        pointer-events: none;
    }

    .button-27:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    .button-27:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>

<div class="box_his container">
    <h1 class="order_logo">My Order</h1>

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
    <table id="my-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Receiver</th>
                <th>Total</th>
                <th>State</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($orders as $order) {
                extract($order);
                $cl = ($status_order == 'Cancelled') ?  "style='opacity:0.5'" : "";
                echo '
                <tr>
                <td ' . $cl . '>' . $id_order . '</td>
                <td ' . $cl . '>' . $date_order . '</td>
                <td ' . $cl . '>' . $name_customer . '</td>
                <td ' . $cl . '>' . $total_price . '$</td>
                <td ' . $cl . '>' . $status_order . '</td>
                <td ' . $cl . '><a href="../Main/index.php?detail_order=' . $id_order . '" class="button-27">See Detail</a>
                <a  href="../Main/index.php?cancel_order=' . $id_order . '" onclick="return confirmCancelOrder(' . $id_order . ')"  class="button-27">Cancel</a></td>
                </tr>
                ';
            }
            ?>
            <td></td>
            <script>
                function confirmCancelOrder(orderId) {
                    var message = "Are you sure you want to cancel order #" + orderId + "?";
                    return confirm(message);
                }
            </script>





        </tbody>
    </table>

</div>