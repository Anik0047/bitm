<?php

$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Tata" => "Tiger"
);



$friends = array("Jabed", "Shamael", "XYZ");

$merged = array_merge($hatchbacks, $friends);

echo "<pre>";
print_r($merged);
echo "</pre>"

?>