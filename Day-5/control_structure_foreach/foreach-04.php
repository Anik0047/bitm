<?php
// $colors = array("Red","Green","Yellow");
// $fruits = array("Banana","Apple","Plum");



// foreach($colors as $color){
//     foreach($fruits as $fruit){
//         // print_r("This is a $color $fruit <br>");
//         echo "This is a $color $fruit <br>";
//     }
// }


$arr = array(
    array(130,50,60),
    array(59,98,77),
    array(55,26,82)
);

$grand_total = 0;
foreach($arr as $values){
    $sum = 0;
    foreach($values as $value){
        $sum = $sum + $value;
    }
    echo $sum ."<br>";

    $grand_total += $sum;
};

echo $grand_total;

?>