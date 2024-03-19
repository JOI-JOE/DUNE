<?php
function insert_color($name_color)
{
    $sql = "INSERT INTO color(name_color) VALUES('$name_color')";
    pdo_execute($sql);
}

function delete_color($id_color)
{
    $sql = "DELETE FROM color WHERE id_color=" . $id_color;
    pdo_execute($sql);
}
function loadall_color()
{
    $sql = "SELECT * FROM color ORDER BY id_color DESC";
    $listcolor = pdo_query($sql);
    return $listcolor;
}
