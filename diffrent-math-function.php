<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <label>X:</label>
        <input type="text" name="x" />
        <br>
        <label>Y:</label>
        <input type="text" name="y" />
        <br>
        <label>Z</label>
        <input type="text" name="z" />
        <input type="submit" value="total" />


    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;
// $total = abs($x); //absolute value
// $total = round($x); //round up value 3.9 to 4 ex
// $total = floor($x); //round down value math.floor type
// $total = ceil($x); //round up value math.ceil type

// $total = pow($x, $y); //power function
// $total = sqrt($x); //sqrt function 

// $total = max($x, $y, $z); //gives the max value from the given input
// $total = min($x, $y, $z);  //gives the min value from the given input


// $total = pi(); //pi value
$total = rand(1, 100); //random number generator with min and max values

echo $total;
?>