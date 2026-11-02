<?php

class Challenge
{

    public function largestInteger(array $numbers)
    {
        $largest = $numbers[0];

        foreach ($numbers as $number) {
            if ($number > $largest) {
                $largest = $number;
            }
        }
        return $largest;
    }

    public function evenNumbers(array $numbers)
    {
        $count = 0;
        foreach ($numbers as $number) {
            if ($number % 2 == 0) {
                $count++;
            }
        }
        return $count;
    }


    public function sumOfPOstiveNumbers(array $numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            if ($number > 0) {
                $sum = $sum + $number;
            }
        }

        return $sum;
    }

    public function repeatedNumber(array $numbers)
    {
        $seen = [];
        foreach ($numbers as $number) {
            if (in_array($number, $seen, true)) {
                return $number;
            }
            $seen[] = $number;
        }

        return null;
    }

    public function secondLargeNUMber(array $numbers)
    {

        $firstLargest = null;
        $secondLargest = null;
        foreach ($numbers as $number) {
            if ($firstLargest === null || $number > $firstLargest) {
                $secondLargest = $firstLargest;
                $firstLargest = $number;
            } elseif ($number > $secondLargest &&  ($secondLargest === null || $number > $secondLargest)) {
                $secondLargest = $number;
            }
        }
        return $secondLargest;
    }

    public function palindrome(string $str)
    {

        $reversed = strrev($str);
        if ($str === $reversed) {
            echo "String is palindrome";
        } else {
            echo "String is not  palindrome";
        }

        return $str;
    }

    public function fizzBuzz(int $n)
    {

        $checked = [];
        for ($i = 1; $i <= $n; $i++) {

            if ($i % 3 == 0 && $i % 5 == 0) {
                $checked[] = "FizzBuzz";
            } elseif ($i % 3 == 0) {
                $checked[] = "Fizz";
            } elseif ($i % 5 == 0) {
                $checked[] = "Buzz";
            } else {
                $checked[] = $i;
            }
        }
        return $checked;
    }


    //longest common prefix
    public function longestCommonPrefix(array $strs): string
    {
        $prefix = $strs[0];

        foreach ($strs as $str) {

            while (!str_starts_with($str, $prefix)) {

                $prefix = substr($prefix, 0, -1);

                if ($prefix === "") {
                    return "";
                }
            }
        }

        return $prefix;
    }

    //sum of two idices to match the

    public function sumOfTwo(array $numbers, int $target){
        $count = count($numbers);

        for($i=0;$i<$count;$i++){
            for($j=$i;$j<$i+1;$j++){
                if($numbers[$i]+$numbers[$j]== $target){
                    return [$i,$j];
                }
            }
        }

        return [];
    }
}




$challenge = new Challenge();
// echo $challenge->largestInteger([2,8,4,80,10,30,51]);
// echo $challenge->evenNumbers([2,4,8,20,40,18,11,13,15,9,10]);
// echo $challenge->sumOfPOstiveNumbers([-1, 20, 30, 40, 2]);
// echo $challenge->repeatedNumber([4, 6, 8, 10, 6, 9, 9, 40, 8]);

// var_dump($challenge->secondLargeNUMber([10, 20, 30]));

// echo $challenge->palindrome("ama");

print_r($challenge->fizzBuzz(15));
