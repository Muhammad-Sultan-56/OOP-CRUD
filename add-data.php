<?php
require("./database.php");

if (isset($_POST['add-user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $crud_obj = new crud();
    $crud_obj->insert("users", ["name" => $name, "email" => $email, "city" => $city]);
    header("Location:index.php");
}
