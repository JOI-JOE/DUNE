<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách sport </h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã sport</th>
                <th scope="col"> name sport</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listsport as $sport) {
                extract($sport);
                $editsport =   "index.php?act=editsport&id_sport=" . $id_sport;
                $deletesport = "index.php?act=deletesport&id_sport=" . $id_sport;

                echo '<tr>
                <td></td>
                <td>' . $id_sport . '</td>
                <td>' . $name_sport . '</td>
                <td> <a href="' . $editsport . '"  class="btn btn-outline-success">edit</a>
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
            <a href="index.php?act=addsport" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>