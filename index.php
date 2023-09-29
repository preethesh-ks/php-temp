<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">

        <input type="checkbox" name="pizza" value="Pizza" />
        Pizza <br>
        <input type="checkbox" name="burger" value="Burger" />
        Burger <br>
        <input type="checkbox" name="taco" value="Taco" />
        Taco <br>
        <input type="checkbox" name="dosa" value="Dosa" />
        Dosa <br>
        <input type="checkbox" name="idli" value="Idly" />
        Idly <br>

        <input type="submit" name="submit" />

    </form>
</body>

</html>

<?php



if (isset($_POST["submit"])) {
    echo "you like pizza";
}
