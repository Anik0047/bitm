<div class="container my-5">
    <h2 class="text-uppercase fs-3 text-center">Login</h2>
    <div class="row mt-5">
        <div class="col-6 offset-sm-3">
            <form action="<?= $root ?>admin/users/login-processor.php" method="POST" enctype="multipart/form-data">
                <!-- <h5 class="mb-3">Sign Up</h5> -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="userName" class="form-control rounded-0 border-danger" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-0 border-danger" name="password" id="inputPassword">
                </div>
                <button class="btn btn-orange" type="submit">Login</button>
            </form>
        </div>
    </div