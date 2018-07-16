<?php

include "Utility.php";

echo "Enter the Year:";

$year = inputInt();
try {
    $result = isLeap($year);

    if ($result == true) {
        echo "$year is a leap year\n";
    } else {
        echo "$year is not a leap year\n";
    }
} catch (LengthException $e) {
    
    echo "Message:" . $e->getMessage();
    error_log($e->getMessage() . "\n", 3, "/var/www/html/error.log");
    echo "\n";

}
