<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách Product</h1>

    <form action="#" method="post">
        <input type="text" name="kyw" id="" style="height: 37px;width: 200px;border-radius: 7px;;">
        <select name="id_brand" id="" style="height: 37px;width: 70px;border-radius: 7px;;">
            <option value="0" select>ALL</option>
            <?php
            foreach ($listbrand as $brand) {
                extract($brand);
                echo '<option value="' . $id_brand . '">' . $name_brand . '</option>';
            }
            ?>
        </select>


        <button type="submit" name="listok" value="GO" class="btn btn-success">check</button>

    </form>


    <br>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">mã product</th>
                <th scope="col">name product</th>
                <th scope="col">price </th>
                <th scope="col">quanity</th>
                <th scope="col">view</th>
                <th scope="col">image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listproduct as $product) {
                extract($product);
                $editproduct =   "index.php?act=editproduct&id_product=" . $id_product;
                // $deleteproduct = "index.php?act=deleteproduct&id_product=" . $id_product;
                $detailproduct = "index.php?act=detailproduct&id_product=" . $id_product;
                $hinhpath = "../../Content/Images/product/" . $img_product;
                if (is_file($hinhpath)) {
                    $hinhanh = "<img src='" . $hinhpath . "' width='80'>";
                } else {
                    $hinhanh = "no photo";
                }


                echo '<tr>
                <td></td>
                <td>' . $id_product . '</td>
                <td> ' . $name_product . '</td>
                <td>' . $price . '</td>
                <td>' . $quanity . '</td>
                <td>' . $view . '</td>
                <td>' . $hinhanh . '</td>
                <td> <a href="' . $editproduct . '"  class="btn btn-outline-success">edit</a>
                <a href="' . $detailproduct . '"  class="btn btn-outline-success">detail</a>
                </td>
                </tr>';
            }
            ?>
            <!-- <a href="' . $deleteproduct . '"  class="btn btn-outline-success">delete</a> -->
        </tbody>

    </table>
    <tfoot>
        <td colspan="4">
            <!-- <button type="button" class="btn btn-primary">chọn tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa tất cả </button> -->
            <!-- <button type="button" class="btn btn-primary">xóa các mục đã chọn </button> -->
            <a href="index.php?act=addproduct" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot>
</div>