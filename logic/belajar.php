<?php
    function Fibonacci($input)
    {
        $fibonacci = [];
        if($input<0)
        {
            return $fibonacci;
        }

        for($angka = 0; $angka<=$input; $angka++)
        {
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

    function Fizzbuzz($deret)
    {
        for($angka = 0; $angka<=$deret; $angka++)
        {
            if($angka % 5 == 0 && $angka % 3 == 0)
            {
                echo "fizzbuzz, ";
            }else if($angka % 3 == 0){
                echo "fizz, ";
            }else if($angka % 5 == 0){
                echo "buzz, ";
            }else{
                echo $angka. ", ";
            }
        }
    }

    function Factorial($bilangan)
    {
        if($bilangan>2)
        {
            return $bilangan * Factorial($bilangan -1); 
        }else{
            return $bilangan;
        }
    }

    function fib($input)
    // {
    //     if ($input == 0)
    //     {
    //         return 1;
    //     }else if( $input == 1){
    //         return 1;
    // }else{
    //         return fib($input - 1) + fib($input-2);
    //     }
    // }
    {
        if($input<2)
        {
            return 1;
        }else{
            return fib($input - 1) + fib($input - 2);
        }
    }


    function multiply($a, $b) {
        $s = $a * $b;
        echo $s;
      }

    //   function tribonacci($signature, $n) {
    //     $fibonacci = [];
    //       if($n < 0){
    //         return $fibonacci;
    //       }
          
    //       for($angka = 0; $angka < $n; $angka++){
    //         if($angka <= 2)
    //           {
    //           $hasil = $signature[$angka];
    //         }else{
    //             // print_r($fibonacci);
    //             // print_r($fibonacci[$angka - 1]);
    //             // print_r($fibonacci[$angka - 2]);
    //             // print_r($fibonacci[$angka - 3]);
    //             // die;
    //           $hasil = $fibonacci[$angka - 1] + $fibonacci[$angka - 2] + $fibonacci[$angka - 3];
    //         }
    //         array_push($fibonacci, $hasil);
    //       }
    //       return $fibonacci;
    //     }

        function tribonacci($signature, $n) {
            for ($i = 0; count($signature) < $n; $i++) {
                  $signature[] = $signature[$i] + $signature[$i+1] + $signature[$i+2];
              }
              
              return array_splice($signature, 0, $n);
            }

echo tribonacci([0,0,1], 10);
echo "<br>";
    echo implode(" ", Fibonacci(8));
    echo "<br>";
    echo Fizzbuzz(100);
    echo "<br>";
    echo Factorial(5);
    echo "<br>";
    echo fib(7);
    
?>