<?php
// require '../../global.php';
// require '../../Dao/control_Customer.php';
extract($_REQUEST);

if (exist_param('register')) {

    // CHECK NAME //
    if (validateNameLength($name_customer) !== true) {
        $MESSAGE = validateNameLength($name_customer);
    }

    // VALIDATE EMAIL //
    elseif (validateEmail($email_customer) !== true) {
        $MESSAGE = validateEmail($email_customer);
    }

    // VALIDATE ADDRESS //
    elseif (validateAdress($address_customer) !== true) {
        $MESSAGE = validateAdress($address_customer);
    }

    // VALIDATE PHONE //
    elseif (validatePhone($phone_customer) !== true) {
        $MESSAGE = validatePhone($phone_customer);
    }

    // VALIDATE PASSWORD //
    elseif (checkConfirmPassword($password, $confirmPassword) !== true) {
        $MESSAGE = checkConfirmPassword($password, $confirmPassword);
    } else {
        $target_dir = "$IMAGE_DIR/customer/";
        // ---------------- FUNCTION ------------------//
        $file_name = save_file('img_customer', $target_dir);
        $img = $file_name ? $file_name : "user.png";
        try {
            insert_client($email_customer, $password, $name_customer, $address_customer, $phone_customer, $img, $role, $active);
            $MESSAGE = "Successfully Registered";
        } catch (Exception $exc) {
            $MESSAGE = "Not Successfully Registered";
        }
    }
} else {
    global $email_customer, $password, $confirmPassword, $name_customer, $img, $address_customer, $phone_customer, $role, $active;
}
