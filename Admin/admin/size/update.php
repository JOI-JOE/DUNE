<?php
if(is_array($size)){
    extract($size);
}
?>


    <div>
<h1 class="alert alert-success" style="color: green"> sửa size</h1>

<form action="index.php?act=updatesize" method="post">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Mã size</label>
          <input type="text" class="form-control" placeholder="auto_number"   readonly>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" >Tên size</label>
          <input type="text" class="form-control"  placeholder="tên size" name="name_size" value="<?=$name_size?>" >
        </div>
        
        <br>
        <div>
        <input type="hidden" name="id_size" value="<?= $id_size?>">
        <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>
        <button type="reset" class="btn btn-primary">nhập lại </button>
        <a href="index.php?act=listsize" class="btn btn-primary" > danh sách </a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            } 
        ?>
</form>
</div>