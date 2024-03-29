<pre>
<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Categories;

$_categorys = new Categories();
$category = $_categorys->show();

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
                <h1 class="text-center mb-4">category Show </h1>
                <dl class="row">
                    <dt class="col-sm-3">Id</dt>
                    <dd class="col-sm-9"><?= $category['id'] ?></dd>
                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9"><?= $category['category-name'] ?></dd>
                    <dt class="col-sm-3">Link</dt>
                    <dd class="col-sm-9"><?= $category['link'] ?></dd>
                    <dt class="col-sm-3">Created_at</dt>
                    <dd class="col-sm-9"><?= $category['created_at'] ?></dd>
                    <dt class="col-sm-3">modified_at</dt>
                    <dd class="col-sm-9"><?= $category['modified_at'] ?></dd>
                </dl>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>