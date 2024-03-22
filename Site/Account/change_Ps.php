<?php
require '../../Dao/control_Customer.php';

extract($_REQUEST);

if (exist_param("btn_changePs")) {
    if ($new_password !== $confirm_new_password) {
        $MESSAGE = "Confirm password is incorrect";
    } else {
        if (empty($old_password)) {
            $MESSAGE = "Old password cannot be empty";
        } else if (empty($new_password)) {
            $MESSAGE = "New password cannot be empty";
        } else if (empty($confirm_new_password)) {
            $MESSAGE = "Confirm password cannot be empty";
        } else {
            $user = show_customer_by_email($email);

            if ($user) {
                if ($user['password_customer'] === $old_password) {
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
}
