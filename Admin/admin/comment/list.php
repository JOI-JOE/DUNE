<style>
    table th,
    td {
        text-align: center;
    }
</style>
<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách comment </h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">New</th>
                <th scope="col">Old</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($st_comments as $comment) {
                extract($comment);
                echo '
                <tr>
                <td>' . $name_product . '</td>
                <td>' . $quantity . '</td>
                <td>' . $newest_comment_date . '</td>
                <td>' . $oldest_comment_date . '</td>
                <td>
                <a href="index.php?act=detail&id_product=' . $id_product . '" class="button-86 btn btn-outline-success">Detail</a>
                </td>
                </tr>
                ';
            }
            ?>
            <tr>

            </tr>
        </tbody>

    </table>
    <tfoot>
        <!-- <td colspan="4">
            <button type="button" class="btn btn-primary">xóa tất cả </button>
        </td> -->
    </tfoot>
</div>