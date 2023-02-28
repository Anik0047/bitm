<pre>
    <?php
    var_dump($_POST);
    $_categoryName = $_POST['name'];
    $_link = $_POST['link'];
   $_created_at = date('Y-m-d H:i:s',time());


    //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // // insert query 
    $query = "INSERT INTO  `categories` (`category-name`, `link`, `created_at`) VALUES (:categoryName, :link, :created_at);";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':categoryName', $_categoryName);
    $stmt->bindParam(':link', $_link);
    $stmt->bindParam(':created_at', $_created_at);

    $result = $stmt->execute();

    var_dump($result);
    header("location:index.php");
    ?>
</pre>