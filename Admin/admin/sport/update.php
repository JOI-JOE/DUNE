<?php
if (is_array($sport)) {
  extract($sport);
}
?>


<div>
  <h1 class="alert alert-success" style="color: green"> sửa sport</h1>

  <form action="index.php?act=updatesport" method="post">

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Mã sport</label>
      <input type="text" class="form-control" placeholder="auto_number" readonly>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Tên sport</label>
      <input type="text" class="form-control" placeholder="tên sport" name="name_sport" value="<?= $name_sport ?>">
    </div>

    <br>
    <div>
      <input type="hidden" name="id_sport" value="<?= $id_sport ?>">
      <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>
      <!-- <button type="reset" class="btn btn-primary">nhập lại </button> -->
      <a href="index.php?act=listsport" class="btn btn-primary"> danh sách </a>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
  </form>
</div>