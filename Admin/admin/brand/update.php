<?php
if (is_array($brand)) {
    extract($brand);
}
?>

<!-- <div class="row bm frmtitle">
            <h1>Cap nhat hang hoa</h1>
        </div>
        <div class="row">
            <form action="index.php?act=updatedm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input type="text" name="maloai" id=""><br><br>
                    Ten loai <br>
                    <input type="text" name="tenloai" id="" value="<?= $name ?>" ><br>
                </div>
                
                <div class="row frmcontent">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <button type="submit" name="capnhat" value="capnhat" >Cập nhật</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button type="button">Danh sach</button></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo '<div class="thongbao">' . $thongbao . '</div>';
                }
                ?>
            </form>
        </div>
    </div> -->
<div>
    <h1 class="alert alert-success" style="color: green"> sửa Brand </h1>

    <form action="index.php?act=updatebrand" method="post">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Mã brand </label>
            <input type="text" class="form-control" placeholder="auto_number" readonly>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tên brand</label>
            <input type="text" class="form-control" placeholder="tên brand" name="name_brand" value="<?= $name_brand ?>">
        </div>

        <br>
        <div>
            <input type="hidden" name="id_brand" value="<?= $id_brand ?>">
            <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>
            <!-- <button type="reset" class="btn btn-primary">nhập lại </button> -->
            <a href="index.php?act=listbrand" class="btn btn-primary"> danh sách </a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>