
<?php
if(is_array($product)){
    extract($product);
}

$hinhpath="../upload/".$img_product;
     if(is_file($hinhpath)){
       $hinhanh ="<img src='".$hinhpath."' width='80'>" ;
    }else{
      $hinhanh = "no photo";
    }
?>








<h1 class="alert alert-success" style="color: green"> sửa PRODUCT </h1>

<form action="index.php?act=updateproduct" method="post" id="form" enctype="multipart/form-data" class="row mt-3">
    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">MÃ PRODUCT</label>
        <input class="form-control" type="text" name="" value="auto number" readonly>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">NAME PRODUCT</label>
        <input type="text" class="form-control" name="name_product" value="<?=$name_product?>">
    
    </div>

    
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">BRAND</label>
        <select class="form-select" id="validationDefault04" name="id_brand" >
                <option selected disabled value=""  > mã brand</option>
               <?php 
                foreach($listbrand as $brand){
                   extract($brand);
                   if($id_brand==$id_brand) $s="selected"; else $s="";
                   echo '<option value="'.$id_brand.'" '.$s.'>'.$name_brand.'</option>';
               }
                  ?>
                 
             </select>
             <?php
                    extract($product);
             ?>
    </div>
 
    
               

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">COLOR</label>
        <select class="form-select" id="validationDefault04" name="id_color" >
                <option selected disabled value=""> mã color</option>
             <?php 
                 foreach($listcolor as $color){
                   extract($color);
                   if($id_color==$id_color) $s="selected"; else $s="";
                   echo '<option value="'.$id_color.'" '.$s.'>'.$name_color.'</option>';
               }
                  ?>
                 
             </select>
             <?php
                    extract($product);
             ?>
    </div>


    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SPORT PRODUCT</label>
        <select class="form-select" id="validationDefault04" name="id_sport" >
                <option selected disabled value=""> mã sport product</option>
               <?php  foreach($listsport as $sport){
                   extract($sport);
                   if($id_sport==$id_sport) $s="selected"; else $s="";
                   echo '<option value="'.$id_sport.'" '.$s.'>'.$name_sport.'</option>';
               }
                  ?>
                 
             </select>
             <?php
                    extract($product);
             ?>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SIZE PRODUCT</label>
        <select class="form-select" id="validationDefault04" name="id_size" >
                <option selected disabled value=""> mã size</option>
               <?php  foreach($listsize as $size){
                   extract($size);
                   if($id_size==$id_size) $s="selected"; else $s="";
                   echo '<option value="'.$id_size.'" '.$s.'>'.$name_size.'</option>';
                   
               }
                  ?>
                 
             </select>
             <?php
                    extract($product);
             ?>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">CATERGORY</label>
        <select class="form-select" id="validationDefault04" name="id_catergory" >
                <option selected disabled value=""> mã catergory</option>
               <?php  foreach($listcatergory as $catergory){
                   extract($catergory);
                   if($id_catergory==$id_catergory) $s="selected"; else $s="";
                   echo '<option value="'.$id_catergory.'" '.$s.'>'.$name_catergory.'</option>';
                 
               }
                  ?>
             </select>
             <?php
                    extract($product);
             ?>
    </div>




   
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">IMAGE PRODUCT</label>
        <input class="form-control" type="file" name="img_product" >
    </div>

    

    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">SALE</label>
        <input type="text" class="form-control"  name="sale"  value="<?=$sale?>">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">PRICE</label>
        <input type="text" class="form-control"  name="price"  value="<?=$price?>">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">QUANITY</label>
        <input class="form-control" type="text"  value="0" name="quanity"  value="<?=$quanity?>">
    </div>

    
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">DATE PRODUCT</label>
        <input type="date" class="form-control"  name="date_product"  value="<?=$date_product?>">
        

    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">VIEW </label>
        <input class="form-control" type="text"  value="0"  name="view"  value="<?=$name_view?>">
    </div>
    

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"  value="<?=$description?>"></textarea>  
    </div>

    <div>
        <input type="hidden" name="id_product" value="<?= $id_product?>">
        <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>

      
        <button type="reset" class="btn btn-primary">nhập lại </button>
        <a href="index.php?act=listproduct" class="btn btn-primary" > danh sách </a>
    </div>

    <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            } 
        ?>
    
</form>