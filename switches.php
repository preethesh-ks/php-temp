<!-- <?php
        //switch statement

        $grade = "A";

        switch ($grade) {
            case "A":
                echo "you did great";
                break;
            case "B":
                echo "you did good";
                break;
            case "C":
                echo "you did okay";
                break;
            case "D":
                echo "you did poorly";
                break;
            case "F":
                echo "you Failed";
                break;
            default:
                echo "{$grade} is not  valid";
        }
        ?> -->


<?php
$date = date("l");  //gives th dayof the week
// $date = "Tuesday";

switch ($date) {
    case "Monday":
        echo "I hate Monday";
        break;
    case "Tuesday":
        echo "I'm okay with Tuesday";
        break;
    case "Wednesday":
        echo "Wednesday is fine";
        break;
    case "Thursday":
        echo "Thursday is getting better";
        break;
    case "Friday":
        echo "Thank God it's Friday";
        break;
    case "Saturday":
        echo "Saturday is awesome";
        break;
    case "Sunday":
        echo "Sunday is relaxing";
        break;
    default:
        echo "Invalid day";
        break;
}




?>