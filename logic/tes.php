<?php 
    function DeretFibonacci($JumlahBilangan)
    {
        $fibonacci = [];

        if($JumlahBilangan<0)
        {
            return $fibonacci;
        }

        for($bilangan = 0; $bilangan<$JumlahBilangan; $bilangan++)
        {
            if($bilangan<2)
            {
                $hasil = $bilangan;
            }else{
                $hasil = $fibonacci[$bilangan - 1] + $fibonacci[$bilangan - 2];
            }
            array_push($fibonacci, $hasil);
        }
        return $fibonacci;
    }




    function GanjilGenap($angka)
    {
        $deret = [];

        if($angka<0)
        {
            return $deret;
        }

        for($bil = 1; $bil<$angka; $bil++)
        {
            
            if($bil % 2 == 0 )
            {
                $nilai = "genap";
                
            }
            else{
                $nilai = "ganjil";
            }
            
            array_push($deret, $nilai);
        }

        return $deret;

    }


    function GanGen($angka)
    {
        if($angka%2 == 0)
        {
            echo($angka); echo " adalah bilangan genap";
        }else{
            echo($angka); echo " adalah bilangan ganjil";
        }

    }




//echo implode(" ",DeretFibonacci(10)); echo "<br>";

//print_r(DeretFibonacci(10)); "<br>";
//echo "<pre>";
echo (GanGen(21)); echo "<br>";
//echo implode(" ",GanjilGenap(10));














?>