<?php

include "Utility.php";

$file = fopen("/var/www/html/AlgorithmPrograms/listOfWords.txt", "r") or die("Unable to open file!");

while (($buffer = fgets($file)) !== false) {

    $array = explode(" ", strtolower($buffer));

}

print_r($array);
echo "Enter the element to search:\n";
$key = Utility :: input();
$key = strtolower($key);
$result = Utility :: binarySearchLogic($array, $key);
if($result)
{
    echo "$key is found in file\n";
}
else{
    echo "$key is Not found\n";
}
?>