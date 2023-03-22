<?php


include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Users;

$_users = new Users();
$user = $_users->edit();

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-4">Edit</h1>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="id" value="<?= $user['id']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">
                                <h5>User Name</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="user_name" value="<?= $user['user_name']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputlink" class="col-sm-2 col-form-label">
                                <h5>Full Name</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputlink" name="full_name" value="<?= $user['full_name']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputlink" class="col-sm-2 col-form-label">
                                <h5>Email</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputlink" name="user_email" value="<?= $user['email']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputlink" class="col-sm-2 col-form-label">
                                <h5>Password</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputlink" name="user_password" value="<?= $user['password']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputlink" class="col-sm-2 col-form-label">
                                <h5>Phone Number</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputlink" name="phone_number" value="<?= $user['phone_number']; ?>">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>