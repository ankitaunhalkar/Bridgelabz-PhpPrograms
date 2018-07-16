<?php

include "Utility.php";

$str = "Hello <<UserName>>, How are you? \n";

echo "$str";

echo "Enter Your Name: \n";

$name = inputString();

if(strlen($name)>3 && preg_match("/^[a-zA-Z0-9]+$/", $name) == 1){

    $newStr = str_replace("<<UserName>>", $name, $str );

    echo "$newStr\n";

} else {

    echo "Please enter proper name! \n ";
    
}
?>
