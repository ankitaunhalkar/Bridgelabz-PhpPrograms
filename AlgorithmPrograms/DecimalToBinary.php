<?php

include "Utility.php";

echo "Enter decimal number to convert into decimal:\n";

$num = Utility :: inputInt();

$binary = Utility :: toBinary($num);

echo "Binary value of $num is : $binary\n";

?>
