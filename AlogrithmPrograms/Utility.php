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
        return $str;
    }

    #Integer Input Method
    public static function inputInt()
    {
        fscanf(STDIN, "%d\n", $str);
        return $str;

    }

    #Float Input Method
    public static function inputFloat()
    {
        fscanf(STDIN, "%f\n", $num);
        return $num;
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
        for ($i = 1; $i <= $n; $i++) {
            if (Utility::isPrime($i)) {
                $prime[$i] = $i;
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

}
