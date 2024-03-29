<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Users;

$_users = new Users();
$users = $_users->trash_index();

// var_dump($users);

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=deviceo-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <h1 class="text-center mb-4">All Trash Item</h1>
                    <ul class="nav justify-content-center fw-bold fs-4">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="index.php">Item list</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Link</a>
                        </li>
                    </ul>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($users) > 0) :
                                foreach ($users as $user) :
                            ?>

                                    <tr>
                                        <td><?= $user['full_name']; ?></td>
                                        
                                        <td>
                                            <a href="restore.php?id=<?= $user['id']; ?>">Restore</a> | <a href="delete.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you ready to delete this')"> Delete</a>
                                        </td>
                                    </tr>

                                <?php
                                endforeach;
                            else :
                                ?>
                                <tr>
                                    <td colspan="2">No user is avaiable. <a href="create.php">Click here to add one.</a> </td>
                                </tr>
                            <?php
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>