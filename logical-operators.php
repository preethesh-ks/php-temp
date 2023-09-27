
<?php
//logical operator  
//p1
// $temp = 15;
// $cloudy = true;
// // if ($temp >= 0 && $temp <= 30) {  //and operator
// //     echo "wheather is good";
// // } else {
// //     echo "wheather is bad";
// // }

// if ($temp < 0 || $temp > 30) {  //OR operator
//     echo "wheather is bad<br>";
// } else {
//     echo "wheather is good<br>";
// }

// if (!$cloudy) {                 //NOT operator
//     echo " its cloudy ";
// } else {
//     echo "its sunny ";
// }
//p1end

//p2 
// $age = 21;
// $citizen = true;

// if (!$age >= 18 || !$citizen) {
//     echo "you can't vote";
// } else {
//     echo "you can vote";
// }
//p2 end


//p3

$child = true;
$senior = false;
$ticket = null;

if ($child || $senior) {
    $ticket = 20;
} else {
    $ticket = 50;
}
echo $ticket;
