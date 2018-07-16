<?php

include "Utility.php";

    echo "Enter the array length:";
    
    $len = inputInt();
    
    $arr = inputArray($len);

    Utility :: triplet($arr);

?>

