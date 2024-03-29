<?php
function insert_product($name_product, $id_brand, $id_color, $id_sport, $id_size, $id_catergory, $img_product, $sale, $price, $quanity, $date_product, $view, $description)
{
   $sql = "INSERT INTO product(name_product,id_brand,id_color,id_sport,id_size,id_catergory,img_product,sale,price,quanity,date_product,view,description) 
    VALUES('$name_product','$id_brand','$id_color','$id_sport','$id_size','$id_catergory','$img_product','$sale','$price','$quanity','$date_product','$view','$description')";
   pdo_execute($sql);
}

function delete_product($id_product)
{
   $sql = "DELETE FROM product WHERE id_product=" . $id_product;
   pdo_execute($sql);
}


//  function loadall_product($kyw,$id_brand){
//     $sql="SELECT * FROM product where 1";
//     if($kyw!=""){
//          $sql.=" and name_product like '%".$kyw."%'";
//     }
//     if($id_brand>0){
//        $sql.=" and id_brand ='".$id_brand."'";
//     }
//     $sql.=" ORDER BY id_product DESC";
//     $listproduct=pdo_query($sql);
//     return $listproduct;
//     // $sql="SELECT tt.*,dm.ten_danh_muc FROM khoahoc tt JOIN danhmuckhoahoc dm ON tt.id_danh_muc = dm.id_danh_muc  ORDER BY id DESC";
//  }

function loadall_product($kyw = "", $id_brand = 0)
{
   $sql = "SELECT *
    FROM product p
    INNER JOIN brand b ON p.id_brand = b.id_brand
    INNER JOIN sport s ON p.id_sport = s.id_sport
    INNER JOIN color c ON p.id_color = c.id_color
    INNER JOIN size sz ON p.id_size = sz.id_size
    INNER JOIN catergory ct ON p.id_catergory = ct.id_catergory
    WHERE 1";

   if ($kyw != "") {
      $sql .= " and name_product like '%" . $kyw . "%'";
   }
   if ($id_brand > 0) {
      $sql .= " and id_brand ='" . $id_brand . "'";
   }
   $sql .= "  ORDER BY id_product DESC";
   $listproduct = pdo_query($sql);
   return $listproduct;
}

function loadone_product($id_product)
{
   $sql = "SELECT * FROM product WHERE id_product=" . $id_product;
   $product = pdo_query_one($sql);
   return $product;
}

function update_product($id_product, $name_product, $id_brand, $id_color, $id_sport, $id_size, $id_catergory, $img_product, $sale, $price, $quanity, $date_product, $view, $description)
{
   if ($img_product != "") {
      $sql = "UPDATE product SET name_product='" . $name_product . "',id_brand='" . $id_brand . "',id_color='" . $id_color . "',id_sport='" . $id_sport . "',id_size='" . $id_size . "', id_catergory='" . $id_catergory . "', img_product='" . $img_product . "', sale='" . $sale . "', price='" . $price . "', quanity='" . $quanity . "', date_product='" . $date_product . "', view='" . $view . "', description='" . $description . "'    WHERE id_product=" . $id_product;
   } else {
      $sql = "UPDATE product SET name_product='" . $name_product . "',id_brand='" . $id_brand . "',id_color='" . $id_color . "',id_sport='" . $id_sport . "',id_size='" . $id_size . "', $id_catergory='" . $id_catergory . "',  sale='" . $sale . "', price='" . $price . "', quanity='" . $quanity . "', date_product='" . $date_product . "', view='" . $view . "', description='" . $description . "'    WHERE id_product=" . $id_product;
   }
   pdo_execute($sql);
}




//  function update_product($id_product,$name_product,$id_brand,$id_color,$id_sport,$id_size,$id_catergory,$img_product,$sale,$price,$quanity,$date_product,$view,$description){
//    $sql="UPDATE product SET name_product='".$name_product."',id_brand='".$id_brand."',id_color='".$id_color."',id_sport='".$id_sport."',id_size='".$id_size."', $id_catergory='".$id_catergory."', img_product='".$img_product."', sale='".$sale."', price='".$price."', quanity='".$quanity."', date_product='".$date_product."', view='".$view."', description='".$description."'    WHERE id_product=".$id_product;

//    pdo_execute($sql);
// }
