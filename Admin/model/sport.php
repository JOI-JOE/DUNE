<?php
function insert_sport($name_sport){
    $sql="INSERT INTO sport(name_sport) VALUES('$name_sport')";
    pdo_execute($sql);
}

function delete_sport($id_sport){
    $sql="DELETE FROM sport WHERE id_sport=".$id_sport;
    pdo_execute($sql);
}
 function loadall_sport(){
    $sql="SELECT * FROM sport ORDER BY id_sport DESC";
    $listsport=pdo_query($sql);
    return $listsport;
 }
 function loadone_sport($id_sport){
    $sql="SELECT * FROM sport WHERE id_sport=".$id_sport;
    $sport=pdo_query_one($sql);
    return $sport;
 }
 function update_sport($name_sport,$id_sport){
    $sql="UPDATE sport SET name_sport='".$name_sport."' WHERE id_sport=".$id_sport;
    pdo_execute($sql);
 }
?>