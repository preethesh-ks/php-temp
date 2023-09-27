<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- method get -->
    <form action="index.php" method="post ">
        <label> username:</label><br>
        <input type="text" name="Username" /><br>
        <label> password</label><br>
        <input type="password" name="password" />
        <br>
        <input type="Submit" value="Login" />
    </form>

</body>

</html>


<?php
// echo "{$_GET['Username']}<br>";
// echo "{$_GET['password']}";
echo "{$_POST['Username']}<br>";
echo "{$_POST['password']}";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <label>quantity: </label> <br>
        <input type="text" name="quantity" />
        <input type="submit" value="total" />
    </form>

</body>

</html>


<?php
$item = "pizza";
$price = 5.99;
$quantity = $_POST['quantity'];
// $total = $_POST['total'];
$total = $quantity * $price;


echo "you have ordered : {$quantity}  x {$item}/s ";
echo  "your total : {$total}";

?>