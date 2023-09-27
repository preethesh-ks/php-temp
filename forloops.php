<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <lable>Enter a number to count to:</lable>
        <input type="text" name="counter" />
        <input type="submit" value="start" />

    </form>
    <form action="index.php" method="post">
        <lable>Enter a number to count down</lable>
        <input type="text" name="Rcounter" />
        <input type="submit" value="start" />

    </form>

</body>

</html>



<?php
//for loops
// for ($i = 1; $i <= 10; $i++) {    //o/p  0 1 2 3 4
//     echo $i  . "<br>";
// }


// for ($i = 10; $i > 0; $i--) {   //i-=2
//     echo $i  . "<br>";
// }
$counter = $_POST['counter'];
for ($i = 1; $i <= $counter; $i++) {
    echo $i . "<br>";
}

$Rcounter = $_POST['Rcounter'];
for ($i = $Rcounter; $i > 0; $i--) {
    echo $i . "<br>";
}
