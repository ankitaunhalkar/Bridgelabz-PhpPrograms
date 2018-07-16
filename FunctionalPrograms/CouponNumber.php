<?php

include "Utility.php";

echo "Enter the number of distinct coupon number to generate:";
$num = inputInt();

Utility::couponNumber($num);

?>

