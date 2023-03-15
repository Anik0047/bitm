<?php

include_once('vendor/autoload.php');


// include_once("class/customer/Person.php");
// include_once("class/product/physical/Pen.php");
// include_once("class/product/physical/Book.php");
// include_once("class/product/physical/calculator.php");
// include_once("class/product/virtual/course.php");


use App\customer\Person;
use App\product\physical\book;


$abdullah = new Person();

$abdullah->name = "Abdullah";
$abdullah->gender = "Male";
$abdullah->height = "6 feet";

echo $abdullah->talk();
echo "<br>";
echo $abdullah->name . " is " . $abdullah->height . " tall.";
echo "<br>";

$fatima = new Person();
echo $fatima->talk();
echo "<br>";



$bohubrihi = new Book();

$bohubrihi->isbn = "ertryu";
$bohubrihi->title = "Bohubrihi";

echo $abdullah->name. " is reading " . $bohubrihi->title. ".";
