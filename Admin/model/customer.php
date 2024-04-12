<?php

function loadall_customer()
{
   $sql = "SELECT * FROM customer ORDER BY id_customer DESC";
   $listcustomer = pdo_query($sql);
   return $listcustomer;
}

function select_one_customer($id_customer)
{
   $sql = "SELECT * FROM customer WHERE id_customer=" . $id_customer;
   return pdo_query_one($sql);
}

function update_customer($id_customer, $name_customer, $email_customer, $password_customer, $address_customer, $phone_customer, $role)
{
   $sql = "UPDATE `customer` 
   SET 
   `name_customer`='$name_customer',
   `email_customer`='$email_customer',
   `password_customer`='$password_customer',
   `address_customer`='$address_customer',
   `phone_customer`='$phone_customer',
   `role`='$role'
    WHERE `id_customer`='$id_customer'
   ";
   pdo_execute($sql);
}
