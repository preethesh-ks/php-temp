<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="index.php">

        <input type="radio" name="credit" value="Visa">
        Visa<br>
        <input type="radio" name="credit" value="mastercard">
        Matercard<br>
        <input type="radio" name="credit" value="rupay">
        Rupay<br>
        <input type="submit" value="confirm" name="confirm">

    </form>
</body>

</html>
<?php
//name should be saame in inputtag to specfy thyarein same group

// if (isset($_POST["confirm"])) {

//     if (isset($_POST["credit"])) {
//         $credit_card = $_POST["credit"]; ///get credit value n form
//         echo $credit_card;
//     } else {
//         echo "please make selecton";
//     }
// }



// if (isset($_POST["confirm"])) {
//     $credit_card = null;
//     if (isset($_POST["credit"])) {
//         $credit_card = $_POST["credit"]; ///get credit value n form
//     }

//     if ($credit_card == "Visa") {
//         echo "you selected visa";
//     } elseif ($credit_card == "mastercard") {
//         echo "you selected mastercard";
//     } elseif ($credit_card == "rupay") {
//         echo "you selected Rupay card";
//     } else {
//         echo "you selected no cards";
//     }
// }


if (isset($_POST["confirm"])) {
    $credit_card = null;
    if (isset($_POST["credit"])) {
        $credit_card = $_POST["credit"]; ///get credit value n form
    }
    switch ($credit_card) {
        case "Visa":
            echo "you selected visa";
            break;
        case "mastercard":
            echo "you selected mastercard";
            break;
        case "rupay":
            echo "you selected rupay  card";
            break;
        default:
            echo "you selected  no cards";
    }
}



?>