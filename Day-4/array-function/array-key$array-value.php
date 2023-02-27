<?php

$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Tata" => "Tiger"
);

$hatchbacks_keys_array = [];
$hatchbacks_value_array = [];


foreach($hatchbacks as $key => $value){
    // echo $hatchback;
    $hatchbacks_keys_array[] = $key;
    $hatchbacks_value_array[] = $value;
}

print_r($hatchbacks_keys_array);

echo "<br>";

print_r($hatchbacks_value_array);

echo "<hr>";

print_r(array_keys($hatchbacks));
print_r(array_values($hatchbacks));


?>