<div>
  <h1 class="alert alert-success" style="color: green"> Thêm mới Size </h1>

  <form action="index.php?act=addsize" method="post" onsubmit="return validateForm();">

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Mã size</label>
      <input type="text" class="form-control" placeholder="auto_number" readonly>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Tên size</label>
      <input type="text" class="form-control" placeholder="tên size" name="name_size" id="name_size">
    </div>

    <br>
    <div>
      <button type="submit" name="themmoi" value="themmoi" class="btn btn-primary">thêm mới</button>
      <button type="reset" class="btn btn-primary">nhập lại</button>
      <a href="index.php?act=listsize" class="btn btn-primary">danh sách</a>
    </div>

    <script>
      function validateForm() {
        var name_size = document.getElementById('name_size').value;

        if (name_size.trim() === '') {
          alert('Vui lòng nhập tên size.');
          return false;
        }
        return true;
      }
    </script>

    <?php
    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
  </form>
</div>