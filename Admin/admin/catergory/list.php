<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách catergory</h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã catergory</th>
                <th scope="col"> name catergory</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listcatergory as $catergory) {
                extract($catergory);
                $editcatergory =   "index.php?act=editcatergory&id_catergory=" . $id_catergory;
                $deletecatergory = "index.php?act=deletecatergory&id_catergory=" . $id_catergory;

                echo '<tr>
                <td></td>
                <td>' . $id_catergory . '</td>
                <td>' . $name_catergory . '</td>
                <td> <a href="' . $editcatergory . '"  class="btn btn-outline-success">edit</a>
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
            <a href="index.php?act=addcatergory" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>