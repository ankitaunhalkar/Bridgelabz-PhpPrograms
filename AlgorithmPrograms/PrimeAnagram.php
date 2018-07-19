<?php

include "Utility.php";

echo "Enter nth term:\n";
$n = Utility :: inputInt();

$arr = Utility :: primeNumbers($n);

print_r($arr);

for ($i=0; $i < count($arr) ; $i++) { 
    
    for ($j=($i+1); $j < count($arr); $j++) { 

      $result =  Utility :: anagram($arr[$i], $arr[$j]);

      if($result)
      {
          echo "$arr[$i] and $arr[$j] are prime anagram\n";
      }
      
    }
}
?>