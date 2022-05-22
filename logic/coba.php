<?php
    function fibonacci($BanyakAngka)
    {
        $fibonacci = [];

        if($BanyakAngka<0)
        {
            return $fibonacci;
        }

        for($angka = 0;$angka <= $BanyakAngka; $angka++)
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


    function fizzbuzz($JumlahAngka){
        for($bilangan = 0; $bilangan<=$JumlahAngka; $bilangan++)
        {
            if($bilangan % 5 == 0 && $bilangan % 3 == 0)
            {
                echo "fizzbuzz, ";
            }else if($bilangan % 3 == 0){
                echo "fizz, ";
            }else if($bilangan % 5 == 0){
                echo "buzz, ";
            }else{
                echo $bilangan.", ";
            }
        }
    }


    function factorial($faktorial)
    {
        if($faktorial < 2){
            return $faktorial * factorial($faktorial - 1);
        }else{
            return $faktorial;
        }
    }

    function prime($prima)
    {
        for($angka = 1; $angka<=$prima; $angka++)
        {
            $a = 0;
            for($bilangan = 1; $bilangan<= $angka; $bilangan++){
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


    function GanjilGenap()
    {
        $ganjil = [];
        $genap = [];
        $bilangan = [1,2,3,4,5,6,7,8,9,10];

        for($angka = 0; $angka<count($bilangan); $angka++)
        {
            if($bilangan[$angka] % 2 == 0)
            {
                array_push($genap, $bilangan[$angka]);
            }else{
                array_push($ganjil, $bilangan[$angka]);
            }
        }

        print_r($ganjil);
        echo "<br>";
        print_r($genap);
    }




    echo implode(" ",fibonacci(5));
    echo "<br>";
    echo fizzbuzz(100);
    echo "<br>";
    echo factorial(5);
    echo "<br>";
    echo prime(100);
    echo "<br>";
    echo GanjilGenap();

?>