<?php
function insert_brand($name_brand)
{
   $sql = "INSERT INTO brand(name_brand) VALUES('$name_brand')";
   pdo_execute($sql);
}

function delete_brand($id_brand)
{
   $sql = "DELETE FROM brand WHERE id_brand=" . $id_brand;
   pdo_execute($sql);
}
function loadall_brand()
{
   $sql = "SELECT * FROM brand ORDER BY id_brand DESC";
   $listbrand = pdo_query($sql);
   return $listbrand;
}
function loadone_brand($id_brand)
{
   $sql = "SELECT * FROM brand WHERE id_brand=" . $id_brand;
   $brand = pdo_query_one($sql);
   return $brand;
}
function update_brand($name_brand, $id_brand)
{
   $sql = "UPDATE brand SET name_brand='" . $name_brand . "' WHERE id_brand=" . $id_brand;
   pdo_execute($sql);
}

function check_brand($name_brand)
{
   $sql = "SELECT * FROM brand WHERE `name_brand`='$name_brand'";
   return pdo_query_value($sql) > 0;
}
