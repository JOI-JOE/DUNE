<h1 class="alert alert-success" style="color: green"> Thêm mới PRODUCT </h1>
<form action="index.php?act=addproduct" method="post" id="form" enctype="multipart/form-data" class="row mt-3" onsubmit="return validateForm();">
    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">MÃ PRODUCT</label>
        <input class="form-control" type="text" name="" value="auto number" readonly>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">NAME PRODUCT</label>
        <input type="text" class="form-control" name="name_product" id="name_product">

    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">BRAND</label>
        <select class="form-select" id="id_brand" name="id_brand">
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
        <select class="form-select" id="id_color" name="id_color">
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
        <select class="form-select" id="id_sport" name="id_sport">
            <option selected disabled value=""> mã sport product</option>
            <?php foreach ($listsport as $sport) {
                extract($sport);
                echo '<option value="' . $id_sport . '">' . $name_sport . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SIZE PRODUCT</label>
        <select class="form-select" id="id_size" name="id_size">
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
        <select class="form-select" id="id_catergory" name="id_catergory">
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
        <input class="form-control" type="file" name="img_product" id="img_product">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">SALE</label>
        <input type="text" class="form-control" name="sale" value="0" id="sale">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">PRICE</label>
        <input type="text" class="form-control" name="price" value="0" id="price">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">QUANTITY</label>
        <input class="form-control" type="text" name="quantity" value="0" id="quantity">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">DATE PRODUCT</label>
        <input type="date" class="form-control" name="date_product" id="date_product">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">VIEW</label>
        <input class="form-control" type="text" name="view" value="0" id="view" disabled>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        <button type="submit" name="themsp" value="themsp" class="btn btn-primary">thêm mới</button>
        <a href="index.php?act=listproduct" class="btn btn-primary"> danh sách </a>
    </div>


    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>

</form>

<script>
    function validateForm() {
        var name_product = document.getElementById('name_product').value;
        var id_brand = document.getElementById('id_brand').value;
        var id_color = document.getElementById('id_color').value;
        var id_sport = document.getElementById('id_sport').value;
        var id_size = document.getElementById('id_size').value;
        var id_catergory = document.getElementById('id_catergory').value;
        var img_product = document.getElementById('img_product').value;
        var sale = document.getElementById('sale').value;
        var price = document.getElementById('price').value;
        var quantity = document.getElementById('quantity').value;
        var date_product = document.getElementById('date_product').value;
        var view = document.getElementById('view').value;

        if (name_product.trim() == '' || id_brand.trim() == '' || id_color.trim() == '' || id_sport.trim() == '' || id_size.trim() == '' || id_catergory.trim() == '' || img_product.trim() == '' || sale.trim() == '' || price.trim() == '' || quantity.trim() == '' || date_product.trim() == '' || view.trim() == '') {
            alert('Vui lòng nhập đầy đủ thông tin vào các trường bắt buộc.');
            return false;
        }
        // var quantityInput = document.getElementByName('quantity')[0];
        // var priceInput = document.getElementByName('price')[0];

        if (parseInt(quantity) < 0) {
            alert('Quantity cannot be negative');
            return false;
        }

        if (parseFloat(price) < 0) {
            alert('Price cannot be negative');
            return false;
        }
        if (parseInt(sale) < 0) {
            alert('Sale cannot be negative');
            return false;
        }
        return true;
    }
</script>