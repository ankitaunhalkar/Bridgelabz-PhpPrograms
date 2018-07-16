<?php

include "StringReplace.php";

echo "1. Harmonic \n 2. LeapYear \n 3. Gambler";

$choice = inputInt();

switch ($choice) {
    case 1:
        echo "Enter number:\n";
        $num = inputInt();
        $result = harmonicValue($num);
        echo "Harmonic value is:", $result;
        break;
    case 2:
        echo "Enter Year:\n";
        $year = inputInt();
        $result = isLeap($year);
        if ($result) {
            echo "Is Leap Year";
        } else {
            echo "Is not";
        }

        break;
    default:break;
}
