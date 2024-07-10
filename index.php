<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in OOP</title>
    <!-- css -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="mx-auto shadow mt-5 p-3" style="width: 85%;">
        <h4>Add <span class="text-primary"> User</span></h4>
        <hr>
        <div class="row p-1">
            <div class="col-lg-12 ">
                <form class="row" method="post" action="add-data.php">
                    <div class="mb-3 col-lg-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter here" id="name" name="name">
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" placeholder="Enter here" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter here" id="city" name="city">
                    </div>
                    <div class="col-lg-3 p-x-3 p-md-2 text-center">
                        <button type="submit" name="add-user" class="btn btn-primary mt-md-4 mt-1 w-75">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mx-auto shadow my-4 p-3" style="width: 85%;">
        <h4>View <span class="text-primary"> Users</span></h4>
        <hr>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Name</th>
                        <th scope="col">Emial</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require("./database.php");

                    $crud = new crud();
                    $select_result = $crud->selectAll("users");

                    while ($fetch_data = mysqli_fetch_assoc($select_result)) {

                    ?>

                        <tr>
                            <td><?= $fetch_data['name'] ?></td>
                            <td><?= $fetch_data['email'] ?></td>
                            <td><?= $fetch_data['city'] ?></td>
                            <td>
                                <a href="edit-form.php?id=<?= $fetch_data['id'] ?>" type="button" class="btn btn-warning btn-sm me-1"> Edit </a>
                                <a href="delete-data.php?id=<?= $fetch_data['id'] ?>" type="button" class="btn btn-danger btn-sm"> Delete </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- js -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>