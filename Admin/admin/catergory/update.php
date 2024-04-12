<?php
if (is_array($catergory)) {
  extract($catergory);
}
?>


<div>
  <h1 class="alert alert-success" style="color: green"> sửa catergory</h1>

  <form action="index.php?act=updatecatergory" method="post">

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Mã catergory </label>
      <input type="text" class="form-control" placeholder="auto_number" readonly>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Tên catergory</label>
      <input type="text" class="form-control" placeholder="tên brand" name="name_catergory" value="<?= $name_catergory ?>">
    </div>

    <br>
    <div>
      <input type="hidden" name="id_catergory" value="<?= $id_catergory ?>">
      <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>
      <!-- <button type="reset" class="btn btn-primary">nhập lại </button> -->
      <a href="index.php?act=listcatergory" class="btn btn-primary"> danh sách </a>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
  </form>
</div>