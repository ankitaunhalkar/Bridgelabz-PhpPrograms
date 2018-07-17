<?php

include "Utility.php";

echo "Enter the Principal amount:\n";
$p = Utility::inputFloat();

echo "Enter the rate interest:\n";
$r = Utility::inputFloat();

echo "Enter the years:\n";
$y = Utility::inputInt();

Utility::monthlyPayment($p, $r, $y);

?>