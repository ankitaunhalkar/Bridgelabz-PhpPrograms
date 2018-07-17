<?php

include "Utility.php";

echo "Enter the amount whose minimum changes to be returned:";
$amount = Utility :: inputInt();

Utility :: vendingMachine($amount);

?>
