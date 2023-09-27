<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">

        <label>
            Enter a country name
        </label>
        <input type="text" name="country" />
        <input type="submit" />


    </form>
</body>

</html>

<?php
//assoctive array key value pair
// $capitals = array(
//     "USA" => "DC",
//     "Japan" => "Kyoto",
//     "South Africa" => "Nigeria",
//     "India" => "Delhi"
// );



// echo $capitals["USA"];

// $capitals["USA"] = "Las  vegas";   // set value inusing key in array

// $capitals["China"] = "China"; //add new key and valuen array 

// array_pop($capitals); // remove last key value pair
// array_shift($capitals); // shift last key back 


// $keys = array_keys($capitals); ///get only keys in array returns a new array
// $values = array_values($capitals);

// $capitals = array_flip($capitals); //flips the keys and values in array or switches

// echo count($capitals);


// $capitals = array_reverse($capitals); //reverse the arary

// foreach ($keys as $key) { //displayall keys in array
//     echo "{$key}<br>";
// }


// foreach ($values as $value) { //dsplay all values
//     echo "{$value}<br>";
// }



// foreach ($capitals as $key => $value) { //key value pair
//     echo "{$key} = {$value} <br>";
// }


// foreach ($capitals as $key => $value) {  ///flip  
//     echo "{$key} ={$value} <br>";
// }

//excercise
$capitals = array(
    "USA" => "DC",
    "Japan" => "Kyoto",
    "South Africa" => "Nigeria",
    "India" => "Delhi"
);

$capital = $_POST["country"];

$capitalmatch = $capitals[$capital];

echo "THe capital is {$capitalmatch}";

// echo "{$capital} hello";
?>