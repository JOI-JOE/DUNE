<?php
require_once "pdo.php";

function show_customer()
{
    $sql = "SELECT * FROM `customer` order by id_customer ASC";
    return pdo_query($sql);
}



function insert_client($email, $password, $name, $img, $role, $active)
{
    $sql = "INSERT INTO
    `clients`(`email`, `password`, `name_client`, `img_client`, `role`, `active`) 
    VALUES
    ('$email',
    '$password',
    '$name',
    '$img',
    '$role',
    '$active')";
    pdo_execute($sql);
}
function delete_client($id_client)
{
    $sql = "DELETE FROM `clients` WHERE id_client=" . $id_client;
    pdo_execute($sql);
}
function update_client_one($id_client, $email, $password, $name, $img, $role, $active)
{
    if ($img != "") {
        $sql = "UPDATE `clients` 
        SET 
        `email`='$email',
        `password`='$password',
        `name_client`='$name',
        `img_client`='$img',
        `role`='$role',
        `active`='$active' WHERE `id_client`='$id_client'";
    } else {
        $sql = "UPDATE `clients` 
        SET 
        `email`='$email',
        `password`='$password',
        `name_client`='$name',
        `role`='$role',
        `active`='$active' WHERE `id_client`='$id_client'";
    }
    pdo_execute($sql);
}




// ------------------ Function For Login + Sigup + Forget  ------------------ //

function show_customer_by_id($id_customer)
{
    $sql = "SELECT * FROM `customer` WHERE `id_customer` =" . $id_customer;
    return pdo_query_one($sql);
}

function show_customer_by_email($email)
{
    $sql = "SELECT * FROM `customer` WHERE `email_customer` = '$email'";
    return pdo_query_one($sql);
}

function email_exist($email)
{
    $sql = "SELECT * FROM `customer` WHERE `email_customer` = ?";
    return pdo_check_data($sql, [$email]);
}


function change_password_client($email, $new_password)
{
    $sql = "  UPDATE `customer` SET `email_customer`='$new_password' WHERE `email_customer`='$email'";
    pdo_execute($sql);
}


// ======================================== FUNCTION CHECK SIGN UP ======================================== // 

function validateNameLength($name_client)
{
    $minLen = 2;
    $maxLen = 50;

    $nameLength = strlen($name_client);

    if (empty($name_client)) {
        return "Name address is required.";
    }

    if ($nameLength < $minLen) {
        return "Name must be at least $minLen characters long.";
    }
    if ($nameLength > $maxLen) {
        return "Name must be less than $maxLen characters long.";
    }
    return true;
}

function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email address.";
    }

    if (empty($email)) {
        return "Email address is required.";
    }

    if (strlen($email) > 255) {
        return "Email address is too long.";
    }
    if (!email_exist($email)) {
        return "Email exists";
    }
    return true;
}

function checkConfirmPassword($password, $confirmPassword)
{
    if (empty($password) || empty($confirmPassword)) {
        return 'Password and confirm password fields are required.';
    }

    if (strlen($password) < 8) {
        return 'Password must be at least 8 characters long.';
    }

    if ($password !== $confirmPassword) {
        return 'Passwords do not match.';
    }
    return true;
}
