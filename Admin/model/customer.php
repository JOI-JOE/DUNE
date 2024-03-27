<?php
// function insert_size($name_size){
//     $sql="INSERT INTO size(name_size) VALUES('$name_size')";
//     pdo_execute($sql);
// }

// function delete_size($id_size){
//     $sql="DELETE FROM size WHERE id_size=".$id_size;
//     pdo_execute($sql);
// }
 function loadall_customer(){
    $sql="SELECT * FROM customer ORDER BY id_customer DESC";
    $listcustomer=pdo_query($sql);
    return $listcustomer;
 }
//  function loadone_size($id_size){
//     $sql="SELECT * FROM size WHERE id_size=".$id_size;
//     $size=pdo_query_one($sql);
//     return $size;
//  }
//  function update_size($name_size,$id_size){
//     $sql="UPDATE size SET name_size='".$name_size."' WHERE id_size=".$id_size;
//     pdo_execute($sql);
//  }
?>