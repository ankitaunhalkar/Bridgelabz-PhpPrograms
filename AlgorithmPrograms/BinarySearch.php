<?php

include "Utility.php";


$status = Utility::BinarySearch();

if ($status) {
    echo "Value is found \n";
} else {
    echo "No search found. \n";
}

?>