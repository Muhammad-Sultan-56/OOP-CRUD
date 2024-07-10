<?php
require("./database.php");


if (isset($_GET['id'])) {
    $get_id = $_GET['id'];

    $crud_obj = new crud();
    $crud_obj->delete("users", $get_id);
    header("Location:index.php");
}
