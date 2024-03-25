<?php
function loadall_catergory()
{
    $sql = "SELECT * FROM catergory ORDER BY id_catergory DESC";
    $listcatergory = pdo_query($sql);
    return $listcatergory;
}
