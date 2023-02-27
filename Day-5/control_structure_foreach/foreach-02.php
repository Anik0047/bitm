<?php
$name = [
    'First-name' => 'John',
    'Second-name' => 'Doe',
    'Middle-name' => 'Bray'
];

echo "<ol>";

foreach($name as $key => $value){

    // echo "<li>". $key . ":" . $value ."</li>";
    echo "<li> $key : $value </li>";
};

echo "</ol>";





?>