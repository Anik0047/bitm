<?php

print_r($_POST);
$_id = $_POST['id'];
$_title = $_POST['title'];
$_link = $_POST['link'];

$approot = $_SERVER['DOCUMENT_ROOT']."/PHP/crud/";


if(($_FILES['picture']['name']) !== ""){
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
}else{
    $_picture = $_POST['old_picture'];
}



if(array_key_exists('is_active', $_POST)){
  $_is_active = $_POST['is_active'];
}else{
  $_is_active = 0;
}


$_modified_at = date('Y-m-d H:i:s',time());
// echo $_title;

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert query
$query = "UPDATE `banners` SET `title` = :title, `link` = :link, `picture` = :picture, `is_active` = :is_active, `modified_at` = :modified_at WHERE `banners`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':is_active', $_is_active);
$stmt->bindParam(':modified_at', $_modified_at);

$result = $stmt->execute();


header("location:index.php");

?>