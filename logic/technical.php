<?php

    function Fibonacci($JumlahAngka)
    {
        $fibonacci = [];

        if($JumlahAngka < 0)
        {
            return $fibonacci;
        }

        for($angka = 0; $angka < $JumlahAngka; $angka++){
            if($angka < 2)
            {
                $hasil = $angka;
            }else{
                $hasil = $fibonacci[$angka - 1] + $fibonacci[$angka - 2];
            }
            array_push($fibonacci, $hasil);

        }
        return $fibonacci;
    }


    function Fizzbuzz($fizzbuzz)
    {
        for($angka = 0; $angka <= $fizzbuzz; $angka++ )
        {
            if($angka % 3 == 0 && $angka % 5 == 0){
                echo "fizzbuzz, ";
            }else if($angka % 3 == 0){
                echo "fizz, ";

            }else if($angka % 5 == 0){
                echo "buzz, ";
            }else{
                echo $angka.", ";
            }
        }
    }


    function Factorial($factorial)
    {
        if($factorial > 2)
        {
            return $factorial * Factorial($factorial - 1);
        }else{
            return $factorial;
        }
    }

    function bilanganprima($deret)
    {
        for($angka = 1; $angka<=$deret; $angka++)
        {
            $a = 0;
            for($bilangan = 1; $bilangan<=$angka; $bilangan++){
                if($angka % $bilangan == 0){
                    $a++;
                }
            }
            if($a == 2){
              echo $angka.", ";
          }
        }
        
    }


    



    echo implode(" ", Fibonacci(5));
    echo "<br>";
    echo Fizzbuzz(100);
    echo "<br>";
    echo Factorial(5);
    
?>