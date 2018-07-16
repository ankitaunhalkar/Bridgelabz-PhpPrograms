<?php
include "Utility.php";

echo "Enter Stake:";
$stake = inputInt();

echo "Enter Goal:";
$goal = inputInt();

echo "Enter number of times you want to play:";
$times = inputInt();

gambler($stake, $goal, $times);

?>

