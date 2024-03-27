<h1 class="alert alert-success" style="color: green"> Thêm mới PRODUCT </h1>

<form action="index.php?act=addproduct" method="post" id="form" enctype="multipart/form-data" class="row mt-3">
    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">MÃ PRODUCT</label>
        <input class="form-control" type="text" name="" value="auto number" readonly>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">NAME PRODUCT</label>
        <input type="text" class="form-control" name="name_product">

    </div>


    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">BRAND</label>
        <select class="form-select" id="validationDefault04" name="id_brand">
            <option selected disabled value=""> mã brand</option>
            <?php foreach ($listbrand as $brand) {
                extract($brand);
                echo '<option value="' . $id_brand . '">' . $name_brand . '</option>';
            }
            ?>

        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">COLOR</label>
        <select class="form-select" id="validationDefault04" name="id_color">
            <option selected disabled value=""> mã color</option>
            <?php foreach ($listcolor as $color) {
                extract($color);
                echo '<option value="' . $id_color . '">' . $name_color . '</option>';
            }
            ?>

        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SPORT PRODUCT</label>
        <select class="form-select" id="validationDefault04" name="id_sport">
            <option selected disabled value=""> mã brand</option>
            <?php foreach ($listsport as $sport) {
                extract($sport);
                echo '<option value="' . $id_sport . '">' . $name_sport . '</option>';
            }
            ?>

        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SIZE PRODUCT</label>
        <select class="form-select" id="validationDefault04" name="id_size">
            <option selected disabled value=""> mã size</option>
            <?php foreach ($listsize as $size) {
                extract($size);
                echo '<option value="' . $id_size . '">' . $name_size . '</option>';
            }
            ?>

        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">CATERGORY</label>
        <select class="form-select" id="validationDefault04" name="id_catergory">
            <option selected disabled value=""> mã catergory</option>
            <?php foreach ($listcatergory as $catergory) {
                extract($catergory);
                echo '<option value="' . $id_catergory . '">' . $name_catergory . '</option>';
            }
            ?>

        </select>
    </div>





    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">IMAGE PRODUCT</label>
        <input class="form-control" type="file" name="img_product">
    </div>



    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">SALE</label>
        <input type="text" class="form-control" name="sale">
    </div>

    <div class="col-md-4 mb-3">

        <label for="inputPassword4" class="form-label">PRICE</label>

        <label for="inputPassword4" class="form-label">price</label>
        <input type="text" class="form-control" name="price">

    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">QUANITY</label>
        <input class="form-control" type="text" value="0" name="quanity">
    </div>


    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">DATE PRODUCT</label>
        <input type="date" class="form-control" name="date_product">


    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">VIEW </label>
        <input class="form-control" type="text" value="0" name="view">
    </div>


    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
    </div>

    <div>
        <button type="submit" name="themsp" value="themsp" class="btn btn-primary">thêm mới</button>
        <button type="reset" class="btn btn-primary">nhập lại </button>
        <a href="index.php?act=listproduct" class="btn btn-primary"> danh sách </a>
    </div>

    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>

</form>