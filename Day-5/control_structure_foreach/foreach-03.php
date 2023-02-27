<?php
$cars = array(
    array(
        "name" => "Volvo",
        "stock" => 22,
        "sold" => 18
    ),
    array(
        "name" => "BWM",
        "stock" => 20,
        "sold" => 18
    ),
    array(
        "name" => "Toyata",
        "stock" => 50,
        "sold" => 46
    ),
    array(
        "name" => "Land Rover",
        "stock" => 46,
        "sold" => 38
    ),
    array(
        "name" => "Skyline R-34",
        "stock" => 200,
        "sold" => 156
    ),
    array(
        "name" => "Shelby GT-500",
        "stock" => 12,
        "sold" => 7
    )
    );


echo "<pre>";
print_r ($cars);
echo "</pre>";


echo "<ol>";
foreach($cars as $car){
    echo "<li>";
   echo "<ul>";
   foreach($car as $keys => $details){
    echo "<li> $keys : $details </li>";
   }
   echo "</ul>";
    echo "</li>";
}
?>