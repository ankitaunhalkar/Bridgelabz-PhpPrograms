<?php

    include "Utility.php";

        echo "\n Enter Choice 1. Integer 2. Double 3. String \n";

        $choice = inputInt();

        echo "\nEnter number of rows:\n";
    
        $row = inputInt();

        echo "\nEnter number of columns:\n";

        $column = inputInt();
        
        Utility::array2D($row, $column, $choice);

    
    
?>
