<pre>
    <?php


    ?>
</pre>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Add New</h1>
                <form action="store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">
                            <h5>Name : </h5>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded-0" id="inputName" name="name" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputemail" class="col-sm-2 col-form-label">
                            <h5>Email : </h5>
                        </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control rounded-0" id="inputemail" name="email" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">
                            <h5>Password : </h5>
                        </label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control rounded-0" id="inputPassword" name="Password" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputphone" class="col-sm-3 col-form-label">
                            <h5>Phone : </h5>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control rounded-0" id="inputphone" name="phone" value="">
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary rounded-0">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>