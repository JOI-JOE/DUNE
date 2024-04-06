<div>
  <h1 class="alert alert-success" style="color: green"> Thêm mới sport</h1>

  <form action="index.php?act=addsport" method="post" enctype="multipart/form-data" id="addSportForm" onsubmit="return validateForm();">

    <div class="mb-3">
      <label for="sportCode" class="form-label">Mã sport</label>
      <input type="text" class="form-control" id="sportCode" placeholder="Auto number" readonly>
    </div>

    <div class="mb-3">
      <label for="name_sport" class="form-label">Tên sport</label>
      <input type="text" class="form-control" id="name_sport" placeholder="Nhập tên sport" name="name_sport">
      <span id="name_sport_error" style="color: red;"></span>
    </div>

    <br>
    <div>
      <button type="submit" name="themmoi" value="themmoi" class="btn btn-primary">Thêm mới</button>
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="index.php?act=listsport" class="btn btn-primary">Danh sách</a>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
  </form>
</div>

<script>
  function validateForm() {
    var name_sport = document.getElementById('name_sport').value;
    var name_sport_error = document.getElementById('name_sport_error');

    if (name_sport.trim() == "") {
      name_sport_error.textContent = "Tên sport không được để trống";
      return false;
    } else {
      name_sport_error.textContent = "";
      return true;
    }
  }
</script>