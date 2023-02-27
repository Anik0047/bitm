<?php
/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */
$approot = $_SERVER['DOCUMENT_ROOT']."/PHP/crud/";

$file_name = "IMG_".time() ."_".$_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $approot."uploads/".$file_name;
$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
  $_picture = $file_name;
}
else{
  $_picture = null;
}


if(array_key_exists('is_active', $_POST)){
  $_is_active = $_POST['is_active'];
}else{
  $_is_active = 0;
}


$_created_at = date('Y-m-d H:i:s',time());


$_title =  $_POST['title'];
$_short_description = $_POST['short_description'];
$_description = $_POST['description'];
$_product_type = $_POST['product_type'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
  // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $query ="INSERT INTO `product` (`title`) VALUES (:title)";
$query ="INSERT INTO `products` (`title`, `shortDescription`, `description`, `productType`, `picture`, `is_active`, `created_at`) VALUES (:title,   :shortDescription, :productDescription, :productType, :picture,  :is_active, :created_at);";

$stmt = $conn->prepare($query);

$stmt->bindParam(":title", $_title);
$stmt->bindParam(":shortDescription", $_short_description);
$stmt->bindParam(":productDescription", $_description);
$stmt->bindParam(":productType", $_product_type);
$stmt->bindParam(":picture", $_picture);
$stmt->bindParam(':is_active', $_is_active);
$stmt->bindParam(':created_at', $_created_at);

$result = $stmt->execute();

var_dump($result);

header("location:index.php");




?>