<pre>
<?php
var_dump($_POST);
$_id = $_POST['id'];
$_categoryName = $_POST['name'];
$_link = $_POST['link'];
$_typeAction = $_POST['action'];

// database connection 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `categories` SET `categoryName` = :categoryName, `link` = :link, `typeAction` = :typeAction WHERE `categories`.`id` = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':categoryName', $_categoryName);
$stmt->bindParam(':link', $_link);
$stmt->bindParam(':typeAction', $_typeAction);

$result = $stmt->execute();

$category = $stmt->fetch();

var_dump($category);

header("location: index.php")
?>
</pre>