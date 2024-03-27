<?php
session_start();
$ROOT_URL = "/BOX_PHP/DUNE";
$CONTENT_URL = "$ROOT_URL/Content";
$ADMIN_URL = "$ROOT_URL/Admin";
$SITE_URL = "$ROOT_URL/Site";

$IMAGE_DIR = $_SERVER['DOCUMENT_ROOT'] . "$ROOT_URL/Content/Images";

function exist_param($fieldName)
{
    return array_key_exists($fieldName, $_REQUEST);
}
// save file vào thư mục mình muốn
function save_file($fileName, $target_dir)
{
    $file_uploaded = $_FILES[$fileName];
    $file_name = basename($file_uploaded['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded['tmp_name'], $target_path);
    return $file_name;
}

// Thêm cookie
function add_cookie($name, $value, $days = 1)
{
    // Calculate expiration time accurately
    $expires = time() + ($days * 24 * 60 * 60); // Number of seconds in a day
    setcookie($name, $value, $expires, "/");
}

// Xóa cookie
function delete_cookie($name)
{
    // Set expiration time to past to delete immediately
    setcookie($name, "", time() - 3600); // One hour ago
}

//  đọc giá trị cookie
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}


defined('SITE_URL') || define('SITE_URL', 'http://localhost/BOX_PHP/DUNE');

function check_login()
{

    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'boss') {
        // Kiểm tra nếu đường dẫn yêu cầu có chứa '/Admin/'
        if (str_contains($_SERVER['REQUEST_URI'], '/Admin/')) {
            $_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];

            header("Location: " . SITE_URL . "/Site/Main/index.php?return=" . rawurlencode($_SERVER['REQUEST_URI']));
            exit; // Thoát hàm để ngăn chặn thực thi tiếp
        }

        if (str_contains($_SERVER['REQUEST_URI'], '/BOX_PHP/DUNE/Admin/')) {
            echo "Bạn không có quyền truy cập vào thư mục Admin.";
            header("Location: " . SITE_URL . "/Site/Main/index.php?return=" . rawurlencode($_SERVER['REQUEST_URI']));
            exit; // Thoát hàm để ngăn chặn thực thi tiếp
        }
    }
}
