<!-- <?php
        $age = -1;
        if ($age > 18) {
            echo "you may enter";
        } elseif ($age <= 0) {
            echo "enter valid agew";
        } elseif ($age >= 100) { // thiis wont work because first line wll be true
            echo "enter invalid";
        } else {
            echo "grow up";
        } ?> -->



<!-- <?php
        $adult = true;
        // if ($adult == true) {
        //     echo "you may enter this site";
        // } else {
        //     echo "must bbe adult bro";
        // }
        if ($adult) {
            echo "you may enter this site";
        } else {
            echo "must bbe adult bro";
        }



        ?> -->

<?php
$hours = 50;
$rate = 15;
$weekly_pay = null;

if ($hours <= 0) {
    $weekly_pay = 0;
} elseif ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} else {
    $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
}
echo "youmade {$weekly_pay}this week";

?>