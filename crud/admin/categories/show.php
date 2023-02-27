<pre>
<?php

$_id = $_GET['id'];
// $_id=1;
//  connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// get query
$query = "SELECT * FROM `categories` where id = :id ";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);

$result = $stmt->execute();

$category = $stmt->fetch();

var_dump($category);
// print_r($category);

// var_dump($result);
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
                    <dd class="col-sm-9"><?= $category['categoryName'] ?></dd>
                    <dt class="col-sm-3">Link</dt>
                    <dd class="col-sm-9"><?= $category['link'] ?></dd>
                    <dt class="col-sm-3">Action</dt>
                    <dd class="col-sm-9"><?= $category['typeAction'] === 1 ? "Is Draft" : "Soft Delete" ?></dd>
                </dl>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>