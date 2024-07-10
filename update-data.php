<?php
require("./database.php");

if (isset($_POST['edit-user'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $crud_obj = new crud();
    $crud_obj->update("users", ['name' => $name, 'email' => $email, 'city' => $city], $id);
    header("Location:index.php");
}
