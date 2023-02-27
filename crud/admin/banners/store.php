<?php

// var_dump($_FILES);\

$approot = $_SERVER['DOCUMENT_ROOT']."/PHP/crud/";
// change korte hbe destination tah
$_title = $_POST['title'];
$_link = $_POST['link'];

// is_active kaj shuru
if(array_key_exists('is_active', $_POST)){
  $_is_active = $_POST['is_active'];
}else{
  $_is_active = 0;
}
// shesh ekhane

// picture jnno eta
$file_name = "IMG_".time() ."_".$_FILES['picture']['name'];
$_target = $_FILES['picture']['tmp_name'];
$destination = $approot."uploads/".$file_name;
$is_file_moved = move_uploaded_file($_target, $destination);

if($is_file_moved){
  $_picture = $file_name;
}
else{
  $_picture = null;
}
// picture er kaj shesh ekhane.
$_created_at = date('Y-m-d H:i:s',time());
// echo $_title;

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert query
$query = "INSERT INTO `banners` (`title`,`link`,`picture`, `is_active`, `created_at`) VALUES (:title, :link, :picture, :is_active, :created_at);";

$stmt = $conn->prepare($query);

$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':is_active', $_is_active);
$stmt->bindParam(':created_at', $_created_at);

$result = $stmt->execute();


header("location:index.php");

?>