<?php
function show_comment()
{
    $sql = "SELECT * FROM `comment` ORDER BY `date_comment` DESC";
    return pdo_query($sql);
}

function show_comment_by_id($id_comment)
{
    $sql = "SELECT * FROM `comment` WHERE `id_comment` = '$id_comment'";
    return pdo_query($sql);
}

function statistic_comment()
{
    $sql = "SELECT 
        P.id_product,
        P.name_product,
        COUNT(*) AS quantity,
        MIN(Comme.date_comment) AS oldest_comment_date,
        MAX(Comme.date_comment) AS newest_comment_date
    FROM comment Comme
    JOIN product P ON P.id_product = Comme.id_product
    GROUP BY P.id_product, P.name_product 
    HAVING quantity > 0";

    return pdo_query($sql);
}


function comment_select_by_product($id_product)
{
    $sql = "SELECT C.*, P.name_product , Cl.name_customer
          FROM comment C
          JOiN customer Cl ON Cl.id_customer = C.id_customer
          JOIN product P ON C.id_product = P.id_product
          WHERE C.id_product = $id_product
          ORDER BY date_comment DESC";
    return pdo_query($sql);
}


function comment_delete($id_comment)
{
    $sql = "DELETE FROM `comment` WHERE id_comment = '$id_comment'";
    pdo_execute($sql);
}
