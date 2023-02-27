<?php

echo "<pre>";

print_r($_FILES);

echo "</pre>";

echo "<br>";

// echo "<p>File Name: " .$_FILES['my_file']['name'] . "</p>";

if(isset($_FILES)){
    echo "<p>File Name: " .$_FILES['my_file']['name'] . "</p>";
    echo "<p>File Type: " .$_FILES['my_file']['type'] . "</p>";
    echo "<p>File Tmp-name: " .$_FILES['my_file']['tmp_name'] . "</p>";
    echo "<p>File Size: " .$_FILES['my_file']['size']. " bytes". "</p>";
}

if($_FILES['my_file']['type'] == "image/png" or "image/jpeg"){
    echo "Thanks for uploading write files.";
}
else{
    echo "You have uploaded wrong file.";
}




$target = $_FILES['my_file']['tmp_name'];

$destination = "uploads/".$_FILES['my_file']['name'];

$is_file_moved = move_uploaded_file($target,$destination);

echo "<br>";

if($is_file_moved){
    echo "File moved successfully.";
}
else{
    "File is not moved.";
}




?>