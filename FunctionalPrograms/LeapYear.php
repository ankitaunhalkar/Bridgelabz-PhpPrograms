<?php

include "Utility.php";

echo "Enter the Year:";

$year = inputInt();

$result = isLeap($year);

if($result==true)
{
    echo "$year is a leap year\n";
}
else
{
    echo "$year is not a leap year\n";
}


?>
