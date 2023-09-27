<?php
//array 
$foods = array("apple", "banana", "orange", "cherry");

// $foods[0] = 'coconut';
// array_push($foods, "pineapple", "kiwi"); //add element to end of array
// array_pop($foods);  // remove last element
// array_shift($foods); //shift to beginning of array
$reverse = array_reverse($foods);   //reverse the array
// $foods = array_reverse($foods); //works same as above line if you want use existimg array

echo count($foods);  //works lle .length  count()


foreach ($foods as $food) {
    echo $food . "<br>";
}

foreach ($reverse as $food) { //reverse array
    echo $food . "<br>";
}
