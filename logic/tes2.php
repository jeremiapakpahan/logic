<?php 
    function DeretFibonacci($JumlahBilangan)
    {
        $fibonacci = [];

        if($JumlahBilangan < 0)
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
        if($angka%2 == 0)
        {
            echo $angka; echo " adalah bilangan genap";
        }else{
            echo "ganjil";
        }
    }

    echo (GanjilGenap(97)); echo "<br>";

    

//print_r(DeretFibonacci(10));
echo implode("|",DeretFibonacci(10));
?>