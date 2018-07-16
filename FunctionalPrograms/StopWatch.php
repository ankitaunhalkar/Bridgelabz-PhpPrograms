<?php

include "Utility.php";

$start = microtime();

echo "Start Time is:",$start;

sleep(5);

$end = microtime();

echo "\nEnd Time is:",$end;

Utility :: stopWatch($start, $end);

?>