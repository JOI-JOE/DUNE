<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách size </h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã size </th>
                <th scope="col">size</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listsize as $size) {
                extract($size);
                $editsize =   "index.php?act=editsize&id_size=" . $id_size;

                echo '<tr>
                <td></td>
                <td>' . $id_size . '</td>
                <td>' . $name_size . '</td>
                <td> <a href="' . $editsize . '" class="btn btn-outline-success">edit</a>
               </tr>';
            }
            ?>

        </tbody>

    </table>
    <tfoot>
        <td colspan="4">
            <!-- <button type="button" class="btn btn-primary">chọn tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa các mục đã chọn </button> -->
            <a href="index.php?act=addsize" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>