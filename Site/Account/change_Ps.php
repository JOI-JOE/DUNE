<?php
require '../../global.php';
require '../../Dao/control_Customer.php';
extract($_REQUEST);

if (exist_param("changePs")) {
    if ($new_password != $confirm_new_password) {
        $MESSAGE = "Confirm password is incorrect";
    } else {
        $user = show_customer_by_email($email);
        extract($user);
        if ($user) {
            if ($user['password_customer'] == $old_password) {
                try {
                    change_password_customer($email, $new_password);
                    $MESSAGE = "Change password successfully";
                } catch (Exception $exc) {
                    $MESSAGE = "Change password failed";
                }
            } else {
                $MESSAGE = "Password is incorrect";
            }
        } else {
            $MESSAGE = "Email is incorrect";
        }
    }
}
$VIEW_NAME = "Account/change_Ps_form.php";
require '../layout.php';
