<?php

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
            error_log("User entered Invalid input instead of string",3,"/var/www/html/error.log");
            return Utility::inputString();
        }
        return $str;
    }

    #Integer Input Method
    public static function inputInt()
    {
        fscanf(STDIN, "%s\n", $str);
        if (is_numeric($str) && (strrchr($str, ".") == false)) {
            return $str;
        } else {
            echo "Please! Enter only integer values:\n";
            error_log("User entered Invalid input instead of Integer",3,"/var/www/html/error.log");
            return Utility::inputInt();
        }

    }

    #Float Input Method
    public static function inputFloat()
    {
        fscanf(STDIN, "%s\n", $str);
        if (is_numeric($str)) {
            return $num;
        } else {
            echo "Please! Enter FLoat Value:\n";
            error_log("User entered Invalid input instead of Float\n",3,"/var/www/html/error.log");
            Utility::inputFloat();
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

}
