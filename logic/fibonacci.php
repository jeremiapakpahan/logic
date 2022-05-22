<?php
    function DeretFibonacci($jumlahBilangan)
    {
        $fibonacci = [];

        if ($jumlahBilangan < 0){
            return $fibonacci;
        }
    

    for ($bilangan = 0; $bilangan < $jumlahBilangan; $bilangan++)
    {
        if($bilangan < 2){
            $hasil = $bilangan;
        }else{
            $hasil = $fibonacci[$bilangan - 1] + $fibonacci[$bilangan - 2];
        }

        array_push($fibonacci, $hasil);

    }

    return $fibonacci;

    }


    echo implode(" ",DeretFibonacci(5));



?>