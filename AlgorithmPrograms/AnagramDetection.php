<?php

include "Utility.php";

echo "Enter String 1:\n";
$str1 =  Utility :: inputLine();
$str1 =preg_replace('/\s*/', '', $str1);
$string1 = strtolower($str1);

        
echo "Enter String 2:\n";
$str2 = Utility::inputLine();
$str2 = preg_replace('/\s*/', '', $str2);
$string2 = strtolower($str2);
        
$result = Utility :: anagram($string1, $string2);
// $u = new Utility;
// $res = $u->anagram($string1, $string2);
if($result)
    echo "$string1 and $string2 is an Angram string.\n";
else
    echo "$string1 and $string2 is not an Angram string.\n";

?>