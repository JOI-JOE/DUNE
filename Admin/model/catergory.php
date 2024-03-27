<?php
function insert_catergory($name_catergory){
    $sql="INSERT INTO catergory(name_catergory) VALUES('$name_catergory')";
    pdo_execute($sql);
}

function delete_catergory($id_catergory){
    $sql="DELETE FROM catergory WHERE id_catergory=".$id_catergory;
    pdo_execute($sql);
}
 function loadall_catergory(){
    $sql="SELECT * FROM catergory ORDER BY id_catergory DESC";
    $listcatergory=pdo_query($sql);
    return $listcatergory;
 }
 function loadone_catergory($id_catergory){
    $sql="SELECT * FROM catergory WHERE id_catergory=".$id_catergory;
    $catergory=pdo_query_one($sql);
    return $catergory;
 }
 function update_catergory($name_catergory,$id_catergory){
    $sql="UPDATE catergory SET name_catergory='".$name_catergory."' WHERE id_catergory=".$id_catergory;
    pdo_execute($sql);
 }
?>