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

function check_name_product($name_product)
{
   $sql = "SELECT * FROM `product` WHERE `name_product` = '$name_product'";
   return pdo_query_value($sql) > 0;
}



function loadall_product($kyw, $id_brand)
{
   $sql = "SELECT * FROM product where 1";
   if ($kyw != "") {
      $sql .= " and name_product like '%" . $kyw . "%'";
   }
   if ($id_brand > 0) {
      $sql .= " and id_brand ='" . $id_brand . "'";
   }
   $sql .= " ORDER BY id_product DESC";
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
