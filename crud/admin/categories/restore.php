<pre>
    <?php
    $_id = $_GET['id'];
    $_is_deleted = 0;
    //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // get query
    $query = "UPDATE `categories` SET `is_deleted` = :is_deleted WHERE `categories`.`id` = :id";


    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $_id);
    $stmt->bindParam(':is_deleted', $_is_deleted);

    $result = $stmt->execute();

    var_dump($result);

    header("location: index.php")

    ?>
</pre>