<?php
function count_cart($email)
{
    if (isset($email)) {
        $sql = "SELECT COUNT(*) AS number_cart FROM `cart` C
        JOIN `customer` CU ON CU.id_customer = C.id_customer
        WHERE CU.email_customer = '$email' 
        ";
    }
    return pdo_query($sql);
}
