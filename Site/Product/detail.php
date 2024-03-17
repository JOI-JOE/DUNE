<?php
require '../../global.php';
require '../../Dao/control_Product.php';
require '../../Dao/control_Comment.php';

extract($_REQUEST);

$products = show_product_one($id_product);
extract($products);

// increase view 
increase_view_product($id_product);


// product same type
// $product_same_commodity = select_product_by_commodity($id_commodity);

// if (exist_param('btn_content')) {
//     // echo $id_product;
//     $id_client = $_SESSION['user']['id_client'];
//     $date_comment = date_format(date_create(), 'Y-m-d');
//     if (!empty($content)) {
//         comment_insert($id_client, $id_product, $content, $date_comment);
//     }
// }

// $comment_list = comment_select_by_product($id_product);

$VIEW_NAME = 'Product/detail_ui.php';
require '../layout.php';
