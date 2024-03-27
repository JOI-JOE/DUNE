<?php
require_once "pdo.php";


function loadall_sport()
{
    $sql = "SELECT * FROM sport ORDER BY id_sport DESC";
    return pdo_query($sql);
}
