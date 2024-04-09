<div>

    <h1 class="alert alert-success" style="color: green"> List Order</h1>
    <form action="" method="post">
        <input type="text" placeholder="#..." name="id_order" id="" style="height: 37px;width: 100px;border-radius: 7px;;">
        <select name="status_order" style="height: 37px;width: 150px;border-radius: 7px;;">
            <option value="" select>All Option</option>
            <option value="Order Confirmed">Order Confirmed</option>
            <option value="Preparing your order">Preparing your order</option>
            <option value="Shipped">Shipped</option>
            <option value="Delivered">Delivered</option>
            <option value="Cancelled">Cancelled</option>
        </select>
        <button type="submit" name="listok" value="GO" class="btn btn-success">check</button>

    </form>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">ID ORDER </th>
                <th scope="col">mã customer</th>
                <th scope="col">date order</th>
                <th scope="col">order status</th>
                <th scope="col"> order address </th>
                <th scope="col">total_price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            <?php
            foreach ($listorder as $order) {
                extract($order);
                $alert_status = ($status_order == "Cancelled") ? 'style="color:  #ff0060;"' : 'style="color:  #1b9c85;"';

                echo '
                <tr>
                <td>' . $id_order . '</td>
                <td>' . $name_customer . '</td>
                <td>' . $date_order . '</td>
                <td ' . $alert_status . '>' . $status_order . '</td>
                <td>' . $address_order . '</td>
                <td>' . $total_price . '$</td>

                <td>
                <a href="index.php?act=updateOrd&id_order=' . $id_order . '"><button class="btn btn-outline-success">Detail</button></a>
                </td>
            </tr>
                ';
            }
            ?>
        </tbody>

    </table>
    <!-- <tfoot>
        <td colspan="4">
            <button type="button" class="btn btn-primary">chọn tất cả </button>
            <button type="button" class="btn btn-primary">xóa tất cả </button>
            <button type="button" class="btn btn-primary">xóa các mục đã chọn </button>
            <a href="" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot> -->
</div>