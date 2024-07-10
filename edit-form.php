<?php
require("./database.php");

if (isset($_GET['id'])) {
    $get_id = $_GET['id'];

    $crud = new crud();
    $select_result = $crud->select("users", $get_id);

    $fetch_data = mysqli_fetch_assoc($select_result);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- css -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="mx-auto shadow mt-5 p-3" style="width: 85%;">
        <h4>Edit <span class="text-primary"> User</span></h4>
        <hr>
        <div class="row p-1">
            <div class="col-lg-12 ">
                <form class="row" method="post" action="update-data.php">
                    <input type="hidden" value="<?= $fetch_data['id'] ?>" name="id">

                    <div class="mb-3 col-lg-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?= $fetch_data['name'] ?>" placeholder="Enter here" id="name" name="name">
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" placeholder="Enter here" value="<?= $fetch_data['email'] ?>" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" value="<?= $fetch_data['city'] ?>" placeholder="Enter here" id="city" name="city">
                    </div>
                    <div class="col-lg-3 p-x-3 p-md-2 text-center">
                        <button type="submit" name="edit-user" class="btn btn-primary mt-md-4 mt-1 w-75">Edit User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>