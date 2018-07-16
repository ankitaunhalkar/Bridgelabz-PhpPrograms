<?php

include "Utility.php";

echo "Enter nth term:\n";
$n = Utility :: inputInt();

$arr = Utility :: primeNumbers($n);

print_r($arr);

Utility :: findPalindrome($arr);

?>