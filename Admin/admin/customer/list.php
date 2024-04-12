<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách customer</h1>
    <table class="table">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">ID Customer</th>
                <th scope="col">Img Customer</th>
                <th scope="col">name Customer</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">role</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listcustomer as $customer) {
                extract($customer);
                $editcustomer =   "index.php?act=editcustomer&id_customer=" . $id_customer;

                if ($role != "boss") {
                    echo '<tr>
                    <td></td>
                    <td>' . $id_customer . '</td>
                    <td><img src="../../Content/Images/customer/' . $img_customer . '" width="50" height="50" style="border-radius:50%;object-fit:cover"></td>
                    <td>' . $name_customer . '</td>
                    <td>' . $email_customer . '</td>
                    <td>' . $password_customer . '</td>
                    <td>' . $role . '</td>
                    <td> <a href="' . $editcustomer . '"  class="btn btn-outline-success">edit</a>
                   </tr>';
                }
            }
            ?>



        </tbody>

    </table>
    <!-- <tfoot>
        <td colspan="4">
            <button type="button" class="btn btn-primary">chọn tất cả </button>
            <button type="button" class="btn btn-primary">xóa tất cả </button>
            <button type="button" class="btn btn-primary">xóa các mục đã chọn </button>

        </td>
    </tfoot> -->
</div>