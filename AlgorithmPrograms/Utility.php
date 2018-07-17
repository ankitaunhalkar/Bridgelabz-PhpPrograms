<?php
include "Logging.php";
class Utility
{

    #Method to Read Line
    public static function inputLine()
    {

        $line = stream_get_line(STDIN, 1024, PHP_EOL);
        return $line;

    }

    #String Input Method
    public static function inputString()
    {
        fscanf(STDIN, "%s\n", $str);

        if (is_numeric($str)) {

            echo "Please! Enter only String:\n";

            Logging::logger("User entered Invalid input instead of string");
            #error_log("User entered Invalid input instead of string",3,"/var/www/html/error.log");
            return Utility::inputString();

        }
        return $str;
    }

    #Integer Input Method
    public static function inputInt()
    {
        fscanf(STDIN, "%s\n", $str);
        // is_numeric($str) && (strrchr($str, ".") == false
        if (filter_var($str, FILTER_VALIDATE_INT)) {
            return $str;
        } else {
            echo "Please! Enter only integer values:\n";
            Logging::logger("User entered Invalid input instead of Integer");

            #error_log("User entered Invalid input instead of Integer",3,"/var/www/html/error.log");
            return Utility::inputInt();
        }

    }

    #Float Input Method
    public static function inputFloat()
    {
        fscanf(STDIN, "%s\n", $str);
        if (filter_var($str, FILTER_VALIDATE_FLOAT)) {
            return $str;
        } else {
            echo "Please! Enter FLoat Value:\n";
            Logging::logger("User entered Invalid input instead of Integer");

            #error_log("User entered Invalid input instead of Float\n",3,"/var/www/html/error.log");
            return Utility::inputFloat();
        }
    }

    #Array input of Int
    public static function inputArray($n)
    {
        $arr = [];

        for ($i = 0; $i < $n; $i++) {

            $arr[$i] = inputInt();

        }

        return $arr;
    }

    #Method for Anagram Detection
    public static function anagram($str1, $str2)
    {
        $string1 = str_split($str1);
        $string2 = str_split($str2);

        sort($string1);
        sort($string2);

        if ($string1 == $string2) {
            return true;
        } else {
            return false;
        }

        // $result = array_intersect($string1,$string2); #sort is not required it will compare with each array element

        // return $result;

        // if(count_chars($str1,1) == count_chars($str2,1)) #it will compare and count the occurance of every element
        // {
        //     return true;
        // }
        // else
        // {
        //     return false;
        // }
    }

    #To check number is prime or not
    public static function isPrime($number)
    {

        for ($i = 2; $i <= $number / 2; $i++) {

            if ($number % $i == 0) {

                return false;

            }
        }
        return true;
    }

    #Method to find Prime Numbers
    public static function primeNumbers($n)
    {
        $prime = [];
        $k = 0;
        for ($i = 1; $i <= $n; $i++) {
            if (Utility::isPrime($i)) {
                $prime[$k] = $i;
                $k++;
            }
        }

        return $prime;
    }

    #Method to display prime number
    public static function displayPrimeNumbers($arr)
    {
        foreach ($arr as $value) {
            echo "$value ";
        }
        echo "\n";
    }

    #Method to find Palindrome
    public static function findPalindrome($arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            $reverse = 0;
            $num = $arr[$i];
            $temp = $num;
            while (floor($num)) {
                $r = $num % 10;
                $reverse = ($reverse * 10) + $r;
                $num = $num / 10;
            }
            if ($temp == $reverse) {
                echo $temp . " is Palindrome\n";
            }
        }
    }

    #Method to find the Fewest Notes to be returned from Vending Machine
    public static function vendingMachine($amount)
    {
        $notes = array(1, 2, 5, 10, 50, 100, 500, 1000);
        $count = 0;
        $len = count($notes);
        for ($i = $len - 1; $i >= 0; $i--) {

            while ($amount >= $notes[$i]) {
                $amount -= $notes[$i];
                echo $notes[$i] . " ";
                $count++;
            }

        }

        echo "\nNumber of changes:" . $count . "\n";
    }

    public static function dayOfWeek($m, $d, $y)
    {
        $y1 = floor($y - (14 - $m) / 12);
        $x = floor(($y1 + $y1 / 4) - ($y1 / 100 + $y1 / 400));
        $m1 = floor(($m + 12) * (14 - $m) / 12 - 2);
        $d1 = floor(($d + $x + (31 * $m1) / 12) % 7);

        echo "Day is: ";

        switch ($d1) {

            case 0:
                echo "Sunday\n";
                break;

            case 1:
                echo "Monday\n";
                break;

            case 2:
                echo "Tuesday\n";
                break;
            case 3:
                echo "Wednesday\n";
                break;
            case 4:
                echo "Thursday\n";
                break;
            case 5:
                echo "Friday\n";
                break;
            case 6:
                echo "Saturday\n";
                break;

            default:
                break;
        }
    }

    public static function tempConvert($choice, $temperature)
    {
        $convert = 0;

        switch ($choice) {
            case 1:$convert = ($temperature * 9 / 5) + 32;
                echo "After Conversation:" . $convert . "\n";
                break;

            case 2:$convert = ($temperature - 32) * 5 / 9;
                echo "After Conversation:" . $convert . "\n";
                break;
            default:break;
        }
    }

    #Method to calculate Monthly Payment
    public static function monthlyPayment($p, $r, $y)
    {
        $n = $y * 12;
        $rate = $r / (12 * 100);
        $payment = ($p * $rate) / (1 - pow(1 + $rate, -$n));
        echo "Monthly Payment is:" . $payment . "\n";
    }

    #Method to find square root
    public static function sqrt($num)
    {
        $t = $num;
        //t=((c/t)+t)/2;
        $epslion = 1 * exp(-15);
        while (abs($t - $num / $t) > $epslion * $t) {
            $t = floor((($num / $t) + $t) / 2);
        }
        echo "Square root of " . $num . " is " . $t . "\n";

    }

    #Method to convert decimal to binary
    public static function toBinary($num)
    {
        $str = "";
        $pow = 1;
        while ($pow <= $num / 2) {
            $pow *= 2;
        }
        while ($pow > 0) {
            if ($num < $pow) {
                $str .= 0;
            } else {
                $str .= 1;
                $num -= $pow;
            }
            $pow = floor( $pow / 2 );
        }
        return $str;
        //$result = decbin($num);

        // return $result;
    }

    #Method for Swapping nibbles
    public static function swapNibbles($binary)
    {

        $len = strlen($binary);
        if(strlen($binary)<8)
        {
            while (strlen($binary)<8)
            {
                $binary = "0".$binary;
                
            }
        }
        echo "Before Swapping Nibbles:".$binary."\n";
        $arr = str_split($binary,1);
       
        for ($i=0;$i<4;$i++)
        {
            $ch = $arr[$i];
            $arr[$i]= $arr[$i+4];
            $arr[$i+4]= $ch;
        }
       
        $binary = implode($arr);
        echo "After Swapping Nibbles:".$binary."\n";
        $c = (int)$binary;
        $decimal = 0;
        $power = 0;
        // to convert binary to decimal
        while(true)
        {
            if($c == 0)
            {
                break;
            }
            else
            {
                $tmp = $c%10;
                $decimal += $tmp*pow(2, $power);
                $c = $c/10;
                $power++;
            }
        }
        echo "Number after Swapping Nibbles: " .$decimal."\n";

    }
}
