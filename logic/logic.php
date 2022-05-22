<?php
    function Fibonacci($Banyak)
    {
        $fibonacci = [];
        if($Banyak<0)
        {
            return $fibonacci;
        }

        for($angka = 0; $angka < $Banyak; $angka++)
        {
            if($angka<2)
            {
                $hasil = $angka;
            }else{
                $hasil = $fibonacci[$angka - 1] + $fibonacci[$angka - 2];
            }
            array_push($fibonacci, $hasil);
        }
        return $fibonacci;
    }


    function factorial($faktorial)
    {
        if($faktorial>2)
        {
            return $faktorial * Factorial($faktorial - 1);
        }else{
            return $faktorial;
        }
    }

    function Prima($Deret)
    {
        for($angka = 1;$angka<=$Deret; $angka++)
        {
            $a=0;
            for($bilangan = 1; $bilangan <= $angka; $bilangan++){
                if($angka % $bilangan == 0)
            {
                $a++;
            }
            }
            if($a == 2)
            {
                echo $angka." ";
            }
        }
    }

    function fizzbuzz($JumlahAngka)
    {
        for($nomor = 1; $nomor<$JumlahAngka; $nomor++){
            if($nomor % 5 == 0 && $nomor % 3 == 0)
            {
                echo "fizzbuzz, ";
            }else if($nomor % 3 == 0)
            {
                echo "fizz, ";
            }else if($nomor % 5 == 0)
            {
                echo "buzz, ";
            }else{
                echo $nomor.", ";
            }
        }
    }

    function Palindrome($kata)
    {
        $kata_bar = strrev($kata);
        if($kata == $kata_bar)
        {
            echo "Palindrome";
        }else{
            echo $kata;
        }
    }

    // function pa($a)
    // {
    //     $length = strlen($a);
    //     for($i= ($length-1); $i>=0; $i)
    //     {
    //         echo $a[$i];
    //     }
    // }

    // function Palindrom($input)
    // {
    //     $input = strtolower($input);
    //     $length = strlen($input);
    //     $array = [];

    //     for($a = ($length - 1); $i>=0; $i++)
    //     {
            
    //     }

    // }

    function Palindromee($input)
    {
        $input = strtolower($input);
        $length = strlen($input);
        $array = [];
        for($a = ($length -1); $a>=0; $a--)
        {
            array_push($array, $input[$a]);
        }
        $kata_baru = implode("", $array);
        if($input == $kata_baru)
        {
            echo "Palindromeeeeeeeeeeeeee";
        }else{
            echo $input;
        }
    }


    echo implode(" ",Fibonacci(5));
    echo "<br>";
    echo fizzbuzz(100);
    echo "<br>";
    echo Prima(100);
    echo "<br>";
    echo factorial(5);
    echo "<br>";
    echo Palindrome("kodok");
    echo "<br>";
    //echo pa("katak");
    echo "<br>";
    echo Palindromee(1121);




?>