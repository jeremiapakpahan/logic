<?php

    function fizzbuzz($fizzbuzz){
        for($a = 1; $a<=$fizzbuzz; $a++){
            if($a%5==0 && $a%3==0)
            {
                echo "fizzbuzz, ";
            }else if($a%5==0)
            {
                echo "buzz, ";
            }else if($a%3==0)
            {
                echo "fizz, ";
            }
        }

    }

    function fibonacci($angka){
        $fibonacci = [];

        if($angka<0){
            return $fibonacci;
        }

        for($b = 0; $b<=$angka; $b++){
            if($b<2){
                $hasil = $b;
            }else{
                $hasil = $fibonacci[$b - 1] + $fibonacci[$b - 2];
            }
            array_push($fibonacci, $hasil);
        }
        return $fibonacci;
    }

    function factorial($num)
    {
        if($num>2){
            return $num * factorial($num - 1);
        }else{
            return $num;
        }
        
    }





    echo fizzbuzz(100);
    echo "<br>";
    echo implode(" ", fibonacci(5));
    echo "<br>";
    echo factorial(5);



?>