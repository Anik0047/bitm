<?php

// echo "<h1>Integer</h1>";
// echo "<h3>Example 1</h3>";

// $x = 22.41;
// echo $x;

// echo "<br>";
// echo "<h3>Example 1</h3>";
// $a = 11.365;
// var_dump($a);

// echo "<h1>Boolean</h1>";

// $a = true;
// echo $a;

// $b = false;
// echo $b;

// $var = 0;

// if(empty($var)){
//     echo '$var is empty';
// }

// echo "<br>";

// $var1 = '';
// if(empty($var1)){
//     echo '$var1 is empty';
// }

// echo "<br>";

// if(empty($var2)){
//     echo '$var2 is empty';
// }

// echo "<br>";

// $var3 = false;
// if(empty($var3)){
//     echo '$var3 is empty';
// }


// echo "<br>";

// $var4 = null;
// if(empty($var4)){
//     echo '$var4 is empty';
// }



// $var_name = null;
// if(is_null($var_name)){
//     echo "variable is null";
// }
// echo "<br>";

// $var_name1 = 0;
// if(is_null($var_name1)){
//     echo "variable is null";
// }
// else{
//     echo 'variable is not null';
// }


// $var = '';

// if(isset($var)){
//     echo "this variable is set so it wiil print";
// }
// else{
//     echo "this variable is not set so it will not print";
// }

// echo "<br>";


// $var1;

// if(isset($var1)){
//     echo "this variable is set so it wiil print";
// }
// else{
//     echo "this variable is not set so it will not print";
// }

// echo "<br>";



// echo "<pre>";
// $a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x','y','z'));

// print_r($a);

// echo "</pre>";

// echo "<br>";


// $array = array('Math', 'English','Bangla');

// echo serialize($array);


//  $var = 'hello';
//  unset($var);
//  echo $var;
//  echo "<br>";


//  $data = array (1, 1.2, null, new stdclass, 'hello');

//  foreach($data as $value){
//     echo gettype($value) . ', ';
//  }
//  echo "<br>";
// $var = 5;
// echo gettype($var);\




// $var_name2 = 678;

// if(is_int($var_name2)){
// echo "$var_name2 is integer<br>";   
// }
// else{
// echo "$var_name2 is not integer<br>";
// }



$pizza = 'This is my pizza give me that';

$pieces = explode( " ", $pizza);

echo "<pre>";
print_r($pieces);
echo "</pre>";












?>