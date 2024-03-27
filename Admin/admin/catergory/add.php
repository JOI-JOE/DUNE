<div>
<h1 class="alert alert-success" style="color: green"> Thêm mới catergory </h1>

<form action="index.php?act=addcatergory" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Mã catergory</label>
          <input type="text" class="form-control" placeholder="auto_number"   readonly>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" >name catergory</label>
          <input type="text" class="form-control"  placeholder="name catergory"  name="name_catergory">
        </div>
        
        <br>
        <div>
        <button type="submit" name="themmoi" value="themmoi" class="btn btn-primary">thêm mới</button>
        <button type="reset" class="btn btn-primary">nhập lại </button>
        <a href="index.php?act=listcatergory" class="btn btn-primary" > danh sách </a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            } 
        ?>
        </form>
</div>