<style>
    h1 {
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
        border-bottom: 2px solid yellow;

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
        background-color: #f2f2f2;
        font-weight: bold;
    }

    #my-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<div class=" container">
    <h1>My Order</h1>
    <table id="my-table">
        <thead>
            <tr>
                <th>1</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="active">All Order</th>
                <th>Wait For Pay</th>
                <th>Wait for confirmation</th>
                <th>Processing</th>
                <th>Completed</th>
            </tr>
        </tbody>
    </table>
    <table id="my-table">
        <thead>
            <tr>
                <th>Id_Order</th>
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
                echo '
                <tr>
                <td>' . $id_order . '</td>
                <td>' . $date_order . '</td>
                <td>' . $name_customer . '</td>
                <td>' . $total_price . '$</td>
                <td>' . $status_order . '</td>
                <td><a href="../Main/index.php?detail_order=' . $id_order . '">See Detail</a></td>
            </tr>
                ';
            }
            ?>



        </tbody>
    </table>

</div>