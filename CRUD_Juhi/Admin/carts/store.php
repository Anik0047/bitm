<pre>
    <?php
    var_dump($_POST);
    $_title = $_POST['title'];
    echo $_title;

    //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=project_09", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // insert query 
    $query = "INSERT INTO `carts` (`title`) VALUES (:title);";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':title', $_title);

    $result = $stmt->execute();

    var_dump($result);
    ?>
</pre>