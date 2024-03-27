<?php
function insert_size($name_size){
    $sql="INSERT INTO size(name_size) VALUES('$name_size')";
    pdo_execute($sql);
}

function delete_size($id_size){
    $sql="DELETE FROM size WHERE id_size=".$id_size;
    pdo_execute($sql);
}
 function loadall_size(){
    $sql="SELECT * FROM size ORDER BY id_size DESC";
    $listsize=pdo_query($sql);
    return $listsize;
 }
 function loadone_size($id_size){
    $sql="SELECT * FROM size WHERE id_size=".$id_size;
    $size=pdo_query_one($sql);
    return $size;
 }
 function update_size($name_size,$id_size){
    $sql="UPDATE size SET name_size='".$name_size."' WHERE id_size=".$id_size;
    pdo_execute($sql);
 }
?>