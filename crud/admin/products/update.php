<?php

print_r($_POST);
$_id = $_POST['id'];
$_title = $_POST['title'];
$_short_description = $_POST['shortDescription'];
$_description = $_POST['description'];
$_product_type = $_POST['productType'];

// echo $_title;
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


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert query
$query = "UPDATE `products` SET `title` = :title, `shortDescription` = :shortDescription, `description` = :productDescription, `productType` = :productType, `picture` = :picture,  `is_active` = :is_active, `modified_at` = :modified_at  WHERE `products`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':shortDescription', $_short_description);
$stmt->bindParam(':productDescription', $_description);
$stmt->bindParam(':productType', $_product_type);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':is_active', $_is_active);
$stmt->bindParam(':modified_at', $_modified_at);

$result = $stmt->execute();

var_dump($result);

header("location:index.php");

?>