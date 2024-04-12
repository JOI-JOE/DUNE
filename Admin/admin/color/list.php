<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách color </h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã color</th>
                <th scope="col"> name color</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listcolor as $color) {
                extract($color);
                $editcolor =   "index.php?act=editcolor&id_color=" . $id_color;

                echo '<tr>
                <td></td>
                <td>' . $id_color . '</td>
                <td>' . $name_color . '</td>
                <td> <a href="' . $editcolor . '"  class="btn btn-outline-success">edit</a>
               </tr>';
            }
            ?>

        </tbody>

        </tbody>

    </table>
    <tfoot>
        <td colspan="4">
            <!-- <button type="button" class="btn btn-primary">chọn tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa các mục đã chọn </button> -->
            <a href="index.php?act=addcolor" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>