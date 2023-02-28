<pre>
<?php
//  connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// get query
$query = "SELECT * FROM `categories` WHERE is_deleted = 1";

$stmt = $conn->prepare($query);

$result = $stmt->execute();

$categorys = $stmt->fetchAll();

// var_dump($banners);
// print_r($banners);

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
        <h1 class="text-center mb-4">Category List: </h1>
        <table class="table table-secondary table-hover table-bordered">
          <thead>
            <tr class=" text-center">
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($categorys as $category) :
            ?>
              <tr class="text-center">
                <td scope="row" class="text-uppercase">
                  <?= $category['category-name'];
                  ?>
                </td>
                <td>
                  <a href="restore.php?id=<?= $category['id']; ?>">restore</a> |
                  <a href="delete.php?id=<?= $category['id']; ?>" onclick="return confirm('Are you sure you want to delete?') ">Delete</a>
                </td>

              </tr>
            <?php
            endforeach
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>