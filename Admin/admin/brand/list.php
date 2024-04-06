<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách Brand </h1>
    <table class="table">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã brand</th>
                <th scope="col"> name brand</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbrand as $brand) {
                extract($brand);
                $editbrand =   "index.php?act=editbrand&id_brand=" . $id_brand;

                echo '<tr>
                <td></td>
                <td>' . $id_brand . '</td>
                <td>' . $name_brand . '</td>
                <td> <a href="' . $editbrand . '"  class="btn btn-outline-success">edit</a>
               </tr>';
            }
            ?>

        </tbody>

    </table>
    <tfoot>
        <td colspan="4">
            <button type="button" class="btn btn-primary">chọn tất cả </button>
            <button type="button" class="btn btn-primary">xóa tất cả </button>
            <button type="button" class="btn btn-primary">xóa các mục đã chọn </button>
            <a href="index.php?act=addbrand" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>