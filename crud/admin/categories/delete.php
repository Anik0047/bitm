<pre>
    <?php
    $_id = $_GET['id'];
    //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // get query
    $query = "DELETE FROM categories WHERE `categories`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $_id);

    $result = $stmt->execute();

    var_dump($result);

    header("location: index.php")

    ?>
</pre>