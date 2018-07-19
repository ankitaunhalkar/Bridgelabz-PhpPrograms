<?php

include "Utility.php";

$timeArray = [];

#Binary Search
echo "Binary Search\n";
$start = microtime();

echo "Start Time is: $start \n";

$status = Utility::BinarySearch();

if ($status) {
    echo "Search value is found \n";
} else {
    echo "No search found. \n";
}

$end = microtime();

echo "End Time is: $end \n";

$timeElaps = Utility::stopWatch($start, $end);
array_push($timeArray, $timeElaps . "--BinarySearch");

#Insertion Sort
echo "Insertion Sort\n";
$start = microtime();

echo "Start Time is: $start \n";

$sortedArray = Utility::insertionSort();

print_r($sortedArray);

$end = microtime();

echo "End Time is: $end \n";

$timeElaps = Utility::stopWatch($start, $end);
array_push($timeArray, $timeElaps . "--InsertionSort");

#BubbleSort
echo "Bubble Sort\n";
$start = microtime();

echo "Start Time is: $start \n";

$sortedArray = Utility::bubbleSort();

print_r($sortedArray);

$end = microtime();

echo "End Time is: $end \n";

$timeElaps = Utility::stopWatch($start, $end);
array_push($timeArray, $timeElaps . "--BubbleSort");

echo "Elapsed Time's are:\n";
sort($timeArray);
print_r($timeArray);

?>