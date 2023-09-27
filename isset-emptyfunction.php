<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">

        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password" /><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>



<?php

// isset() = returns true if  a variable is declared and not null
// empty() = returns true if a variable is not declared,false,null ,""


$username = null; //trur,false null, data
// $username = "hheelo";



// echo isset($username);  // returns 1 if it has variable

// echo empty($username); // returns 1 if its empty


// if (isset($username)) {
//     echo "it is set ";
// } else {
//     echo "it is not set";
// }



// if (empty($username)) {
//     echo "it is empty";
// } else {
//     echo "it is not empty";
// }

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}


// if (isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];


//     if (empty($username && $password)) {
//         echo "Username and password are required";
//     } else {
//         echo "Welcome, $username ";
//     }
// }
