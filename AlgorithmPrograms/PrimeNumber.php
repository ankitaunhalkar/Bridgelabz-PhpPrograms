<?php

include "Utility.php";

echo "Enter the nth term to find prime numbers:\n";
$n = Utility :: inputInt();

$arr = Utility :: primeNumbers($n);

Utility :: displayPrimeNumbers($arr);


?>