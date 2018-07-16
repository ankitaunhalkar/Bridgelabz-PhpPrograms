<?php

#String Input Method
function inputString()
{
    fscanf(STDIN, "%s\n", $str);
    return $str;
}

#Integer Input Method
function inputInt()
{
    fscanf(STDIN, "%d\n", $str);
    return $str;

}

#Float Input Method
function inputFloat()
{
    fscanf(STDIN, "%f\n", $num);
    return $num;
}

#Array input of Int  
function inputArray($n)
{
    $arr = [];
   
    for ($i=0; $i < $n; $i++) { 
        
        $arr[$i] = inputInt();
       
    }

    return $arr;
}

#Method to check Leap Year
function isLeap($year)
{
    if($year%4==0 || $year%400==0 && $year%100!=0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

#Method to find harmonic value
function harmonicValue($num)
{
    $harmonicValue = 0;
    
        for ($i=1; $i <= $num; $i++) { 
            $harmonicValue += 1/$i;      
        }
    
    return $harmonicValue;
}

#Method to find nth power of 2
function powerOf2($num)
{
    if($num>=0 && $num<=31)
    {
        $value=1;
            for($i=0;$i<=$num;$i++)
            {
                echo "2^$i = $value \n";
                $value = 2*$value;
            }
    }
    else
    {
        echo "Enter Number greater then 0 and less then 31";
    }
}

#Method to find prime factor
function primeFactor($num)
{
    for($i=2;$i*$i<=$num;$i++)
    {
        while( $num % $i == 0 )
        {
            echo "$i ";
            $num = $num/$i; 
        }   
    }
    if($num>1)
        echo "$num \n";
    else
        echo "\n";
}

#Method for gamblers
function gambler($stake, $goal, $times)
{
    $win=0;
   
    for($i=1;$i<=$times;$i++)
    {   
        while($stake>0 && $stake<$goal)
        {
            if(mt_rand(0,1)<0.5)
            {
                $stake++;
            }
            else
            {
                $stake--;
            }
            if($stake==$goal)
            {
                $win++;
            }
        }
    }
    echo "Times won:",$win;
    $winPercent = $win*100/$times;
    echo "\nPercent of win:",$winPercent;
    echo "\nPercent of loss:",(($times-$win)*100/$times);
}

#Utility Class
class Utility
{

    #Method to generate random number
    public static function random(){
        $random = mt_rand(1000,9999);
        return $random;
    }

    #Method to generate distinct coupon number
    public static function couponNumber($n){
        $flag = false;
        $distinct = array($n);
        for ($i=0; $i < $n; $i++) {
            $randomValue = Utility::random();
            echo "$randomValue\n";
            for ($j=0; $j < $n; $j++) { 
                
                if ($distinct[$j] == $randomValue) {

                    break;

                }
                if (!$flag){

                    $distinct[$i] = $randomValue;

                }
            }
        }

      foreach ($distinct as $value) {
         echo "$value ";
      }
    }

    #Method to print 2D Array
    public static function printArray($arr)
    {
            foreach ($arr as $row) 
            {
                foreach ($row as $value) 
                {
                    echo $value." ";
                }
                    echo "\n";         
            }
    }

    #Method for 2D Array
    public static function array2D($m,$n,$choice)
    {
        switch($choice)
        {
            case 1: $arr = [[]];
                    echo "Enter elemnts into Matrix:\n";
                    for($i=0;$i<$m;$i++)
                    {
                        for($j=0;$j<$n;$j++)
                        {
                            $arr[$i][$j] = inputInt();
                        }
                    }

                    echo "Your Matrix is:\n";
        
                    Utility :: printArray($arr);                

                    break;
                    

            case 2: $arr = [[]];
                    echo "Enter elemnts into Matrix:\n";
                    for($i=0;$i<$m;$i++)
                    {
                        for($j=0;$j<$n;$j++)
                        {
                            $arr[$i][$j] = inputFloat();
                        }
                    }
                    echo "Your Matrix is:\n";
                
                    Utility :: printArray($arr);

                    break;

            case 3: $arr = [[]];
                    echo "Enter elemnts into Matrix:\n";
                    for($i=0;$i<$m;$i++)
                    {
                        for($j=0;$j<$n;$j++)
                        {
                            $arr[$i][$j] = inputString();
                        }
                    }
                    echo "Your Matrix is:\n";
                   
                    Utility :: printArray($arr);

                    break;

            default: break;
        }
    }

    #Sum Of three Integer equals to zero
    public static function triplet($arr)
    {
       $count = 0;
       for ($i=0; $i < count($arr); $i++) 
       { 
           for ($j=$i+1; $j < count($arr); $j++) 
           { 
               for ($k=$j+1; $k < count($arr); $k++) 
               { 
                   if($arr[$i]+$arr[$j]+$arr[$k] == 0)
                   {
                        $count++;
                        echo "\nNumber of Triplet: ",$count;
                        echo "\nTrpilet: [".$arr[$i].",".$arr[$j].",".$arr[$k]."]";
                   }
               }
           }
       }
    }

    #Method to Find Distance
    public static function distance($x1, $y1)
    {
        $x = 0;
        $y = 0;

        //distance = sqrt(x*x + y*y)
        //√(x2  – x1)² + (y2 – y1)²

        $distance = sqrt(pow($x1 - $x,2) + pow($y1 - $y,2));

        return $distance;
    }

    #Method for stopwatch
    public static function stopWatch($start, $end)
    {
        $timeLapsed = ($end - $start);
        echo "\nTime elapsed is:",$timeLapsed."\n";
    }

    #Method for Quadratic
    public static function quadratic($a,$b,$c)
    {
        $delta=($b*$b) - (4*$a*$c);
        echo $delta;
        if($delta!=0)
        {
            $dsq=sqrt($delta);
            //echo $dsq;
            $x1=(-$b + $dsq)/(2*$a);
            $x2=(-$b - $dsq)/(2*$a);
            echo "\nRoots of x is: (".$x1.",".$x2.")\n";
        }
    }

    #Method for Windmill
    public static function windMill($t, $v)
    {
        $vpow=pow($v, 0.16);
        $w=(35.74+0.6215*$t+(0.4275*$t-35.75)*$vpow);
        echo "\nWindmill:",$w."\n";
    }
}
?>
