<pre>
    <?php
    var_dump($_POST);
    $_categoryName = $_POST['name'];
    $_link = $_POST['link'];
    $_typeAction = $_POST['action'];


    //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // // insert query 
    $query = "INSERT INTO  `categories` (`categoryName`, `link`, `typeAction`) VALUES (:categoryName, :link, :typeAction);";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':categoryName', $_categoryName);
    $stmt->bindParam(':link', $_link);
    $stmt->bindParam(':typeAction', $_typeAction);

    $result = $stmt->execute();

    var_dump($result);
    header("location:index.php");
    ?>
</pre>