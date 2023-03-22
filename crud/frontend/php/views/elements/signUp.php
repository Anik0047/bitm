<div class="container my-5">
    <h2 class="text-uppercase fs-3 text-center">My Account</h2>
    <div class="row mt-5">
        <div class="col-6 offset-sm-3">
            <form action="<?= $root ?>admin/users/sign-up.php" method="POST" enctype="multipart/form-data">
                <h5 class="mb-3">Sign Up</h5>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="userName" class="form-control rounded-0 border-danger" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                    <input type="text" class="form-control rounded-0 border-danger" name="fullName" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control rounded-0 border-danger" name="email"   id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-0 border-danger" name="password" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control rounded-0 border-danger" name="phoneNumber" id="exampleFormControlInput1" placeholder="">
                </div>
                <button class="btn btn-orange" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>