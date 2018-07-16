<?php

include "Utility.php";

echo "Enter Temperature(in Fahrenit):";
$t = inputInt();

echo "Enter Wind Speed(in miles per hour):";
$v = inputInt();

Utility :: windMill($t,$v);

?>