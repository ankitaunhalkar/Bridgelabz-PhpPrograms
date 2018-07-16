<?php

include "Utility.php";

echo "Enter Point x:";
$x = inputInt();

echo "Enter Point y:";
$y = inputInt();

$distance = Utility :: distance($x,$y);

echo "Distance from (".$x.",".$y.") to Origin (0,0) is:",$distance."\n";

?>