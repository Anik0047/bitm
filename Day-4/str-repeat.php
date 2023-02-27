<?php

// echo str_repeat(input:'seip', multiplier: 5);
echo str_repeat('seip ', 5);

echo "<br>";

// str_replace

$phrase = 'You should eat fruits, vegetables, and fiber every day.';

$healthy = array('fruits', 'vegetables', 'fiber');
$yummy = array('pizza', 'beer', 'ice cream');

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;

?>