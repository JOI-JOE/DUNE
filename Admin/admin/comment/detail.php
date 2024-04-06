<style>
    table th,
    td {
        text-align: center;
    }
</style>
<div>
    <h1 class="alert alert-success" style="color: green"> Detail comment base on product</h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th>Product</th>
                <th>Content_Comment</th>
                <th>Date</th>
                <th>Your_Comment</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($comments as $comment) {
                extract($comment);
                echo '
                <tr>
                <td>' . $name_product . '</td>
                <td>' . $content . '</td>
                <td>' . $date_comment . '</td>
                <td>' . $name_customer . '</td>
                <td>
                <a href="index.php?act=del_cmt&id_comment=' . $id_comment . '&id_product=' . $id_product . '" class="button-86 btn btn-outline-success" onclick="return confirm(\'Bạn Có Chắc Muốn Xóa Không ?\')">Remove</a>
                </td>
                </tr>
                ';
            }
            ?>
            <tr>

            </tr>
        </tbody>

    </table>
    <a href="index.php?act=listcomment" class="btn btn-primary"> danh sách </a>

    <tfoot>
        <td colspan="4">
        </td>
    </tfoot>
</div>