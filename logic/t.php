<?php


    function fibonacci($JumlahAngka)
    {
        $fibonacci = [];
        if($JumlahAngka<0)
        {
            return $fibonacci;
        }

        for($angka = 0; $angka<$JumlahAngka; $angka++)
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

    function fizzbuzz($total){
        for($angka = 0; $angka<$total; $angka++){
            if($angka%3 == 0 && $angka%5 == 0)
            {
                echo "fizzbuzz, ";
            }else if($angka % 3 == 0 )
            {
                echo "fizz, ";
            }else if($angka % 5 == 0){
                echo "buzz, ";
            }else{
                echo $angka.", ";
            }
        }
    }



    function factorial($faktorial)
    {
        if($faktorial>2){
            return $faktorial * factorial($faktorial - 1);
        }else{
            return $faktorial;
        }
        
    }

  function prima()
  {
    for($i=1;$i<=50;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengan 50 , i increment
        $a = 0; //variable a sama dengan 0
        for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 50 , j increment
            if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibagi
                $a++; //// variable a increment
            }
        }
        if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
         echo $i.' '; // mengeluarkan nilai var $i dengan whitespace
        }
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

    echo implode(" ", fibonacci(5));
    echo "<br>";
    echo fizzbuzz(100);
    echo "<br>";
    echo factorial(5);
    echo "<br>";
    echo bilanganprima(50);








?>