<?php
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
                    <h1 class="text-center mb-4">Add New</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputUserName" class="col-sm-3 col-form-label">
                                <h5>User Name</h5>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputUserName" name="user_name" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputFullName" class="col-sm-3 col-form-label">
                                <h5>Full Name</h5>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputFullName" name="full_name" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">
                                <h5>Email</h5>
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputEmail" name="user_email" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">
                                <h5>Password</h5>
                            </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputPassword" name="user_password" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPhoneNumber" class="col-sm-3 col-form-label">
                                <h5>Phone Number</h5>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPhoneNumber" name="phone_number" value="">
                            </div>
                        </div>


                        <!-- <div class="mb-3 row">
                            <label class="form-check-label col-sm-3" for="inputIsActive">
                                Is Active
                            </label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" value="1" id="inputIsActive" name="is_active">
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>