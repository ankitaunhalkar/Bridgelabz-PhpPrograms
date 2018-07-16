<?php

include "Utility.php";

echo "Enter the Nth Value to find Harmonic value:\n";

$n = inputInt();

if($n>0)
{
    $result = harmonicValue($n);

    echo "Harmonic Value for $n is $result \n";
}
else{

    return "Enter Nth value greater then 0. \n";
    
}

?>

