<?php
require '../../global.php';
require '../../Dao/control_Customer.php';
extract($_REQUEST);

if (exist_param("btn_login")) {
    $user = show_customer_by_email($email);
    if ($user) {
        if ($user['password_customer'] == $password) {
            $MESSAGE = "Login successful";

            //  manage the cookie to remember your account
            if (exist_param("remember")) {
                add_cookie("email", $email, 30);
                add_cookie("password", $password, 30);
            } else {
                delete_cookie("email");
                delete_cookie("password");
            }
            $_SESSION['user'] = $user;
            if (isset($_SESSION['request_uri'])) {
                header('Location:' . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Login failed";
        }
    } else {
        $MESSAGE = "Maybe your email is incorrect";
    }
} else {
    $email = get_cookie("email");
    $password = get_cookie("password");
}

$VIEW_NAME = "Account/login_form.php";
require "../layout.php";
