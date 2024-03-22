<?php
require "../../Dao/control_Customer.php";

extract($_REQUEST);


if (exist_param("btn_forget_Ps")) {
    $user = show_customer_by_email($email);
    if ($user) {
        if ($user['email_customer'] != $email) {
            $MESSAGE = "Error address email is incorrect";
        } else {
            $MESSAGE = "Your password is : " . $user['password_customer'];
            $VIEW_NAME = "Account/login_form.php";
            global $email, $password;
        }
    } else {
        $MESSAGE = "Your email is incorrect";
    }
}
