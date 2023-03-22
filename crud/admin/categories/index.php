<pre>
<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Categories;

$_categorys = new Categories();
$categorys = $_categorys->index();
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
        <ul class="nav justify-content-center fw-bold fs-4">
          <li class="nav-item">
            <a class="nav-link text-secondary" href="create.php">Add an item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="trash_index.php">Trash item</a>
          </li>
        </ul>
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
                  <a href="show.php?id=<?= $category['id']; ?>">Show</a> |
                  <a href="edit.php?id=<?= $category['id']; ?>">Edit</a> |
                  <a href="trash.php?id=<?= $category['id']; ?>">Trash</a>
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