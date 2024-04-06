<div>
  <h1 class="alert alert-success" style="color: green"> Thêm mới catergory </h1>

  <form action="index.php?act=addcatergory " method="post" onsubmit="return validateForm();">

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Mã catergory </label>
      <input type="text" class="form-control" placeholder="auto_number" readonly>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Tên catergory </label>
      <input type="text" class="form-control" placeholder="tên catergory " name="name_catergory " id="name_catergory ">
    </div>

    <br>
    <div>
      <button type="submit" name="themmoi" value="themmoi" class="btn btn-primary">thêm mới</button>
      <button type="reset" class="btn btn-primary">nhập lại</button>
      <a href="index.php?act=listcatergory " class="btn btn-primary">danh sách</a>
    </div>

    <script>
      function validateForm() {
        var name_catergory = document.getElementById('name_catergory ').value;

        if (name_catergory.trim() === '') {
          alert('Vui lòng nhập tên catergory .');
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