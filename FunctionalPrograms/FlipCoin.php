<?php

include "Utility.php";

$tailCount = 0;
$headCount = 0;

echo "Enter the number of times you want flip the coin?\n";

$times = inputInt();

for($i=0;$i<$times;$i++)
{
    $randomValue = mt_rand(0,1);
    if($randomValue<0.5)
    {

        $tailCount++;
  
    }
    else
    {
        $headCount++;
    }
}

echo "Tail count:\n", $tailCount;
echo "\nHead count:\n", $headCount;

$tail = ($tailCount/$times)*100;

$head = ($headCount/$times)*100;

echo "\nPercentage of tail is : $tail\n";

echo "Percentage of head is : $head\n";

?>
