<?php

include "Utility.php";

echo "Enter a decimal value:\n";

$num = Utility :: inputInt();

$binary = Utility :: toBinary($num);

Utility :: swapNibbles($binary);

?>