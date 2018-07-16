<?php

    include "Utility.php";

    echo "\nEnter a value of a:";
    $a = inputInt();

    echo "\nEnter a value of b:";
    $b = inputInt();

    echo "\nEnter a value of c:";
    $c = inputInt();

    Utility :: quadratic($a,$b,$c);

?>