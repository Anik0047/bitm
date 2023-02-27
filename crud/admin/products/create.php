<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center">Add New</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputShortDescription" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputShortDescription" name="short_description" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDescription" name="description" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputProductType" class="col-sm-3 col-form-label">Product Type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputProductType" name="product_type" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="picture" class="col-sm-2 col-form-label"><h5>Picture:</h5></label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="picture" name="picture" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-check-label col-sm-3" for="inputIsActive">
                            Is Active
                            </label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" value="1" id="inputIsActive"     name="is_active">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>