<?php

include "Utility.php";

echo "Enter the date [M-D-Y]\n";
echo "Month:\n";
$m = Utility :: inputInt();

echo "Date:\n";
$d = Utility :: inputInt();

echo "Year:\n";
$y = Utility :: inputInt();
Utility :: dayOfWeek($m, $d, $y);

?>