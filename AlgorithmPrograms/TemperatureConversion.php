<?php

include "Utility.php";

 echo "Make a Choice:\n";
		echo "Choose 1: Celsius to Fahrenit\nChoose 2: Fahrenit to Calsius\n";
		$choice=Utility :: inputInt();
		echo "Enter the temperature:\n";
		$temperature=Utility :: inputInt();
		Utility::tempConvert($choice,$temperature);

?>