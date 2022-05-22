<?php 
    function fibonacci($JumlahDeret)
    {
        $fibonacci = [];
        if($JumlahDeret<0){
            return $fibonacci;
        }

        for($angka = 0; $angka<=$JumlahDeret; $angka++) 
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

    function fizzbuzz($Deret)
    {
        for($angka = 1; $angka<=$Deret; $angka++)
        {
            if($angka % 5 == 0 && $angka % 3 == 0)
            {
                echo "fizzbuzz, ";
            }else if($angka % 3 == 0)
            {
                echo "fizz, ";
            }else if($angka % 5 == 0)
            {
                echo "buzz, ";
            }else{
                echo $angka.", ";
            }
        }
    }


    function factorial($faktorial){
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
            for($bilangan = 1; $bilangan<=$angka; $bilangan++)
            {
                if($angka % $bilangan == 0){
                    $a++;
                }
            }
            if($a == 2){
                echo $angka.", ";
            }
        }
    }

    function bilanganprima($bilanganprima){
        for($angka = 1; $angka<=$bilanganprima; $angka++){
            $a = 0;
            for($bilangan = 1; $bilangan<=$angka; $bilangan++){
                if($angka % $bilangan == 0){
                    $a++;
                }
            }
            if($a == 2)
            {
                echo $angka.", ";
            }
        }
    }

    function Palindrome($number){ 
        $temp = $number; 
        $new = 0; 
        while (floor($temp)) { 
            $d = $temp % 10; 
            $new = $new * 10 + $d; 
            $temp = $temp/10; 
        } 
        if ($new == $number){ 
            return 1; 
        }
        else{
            return 0;
        }
    } 
     
    // Driver Code
    $original = "lolololololololololo";
    if (Palindrome($original)){ 
        echo "Palindrome"; 
    }
    else { 
    echo "Not a Palindrome"; 
    }

    function Palindromee($kata)
    {
        $kata_baru = strrev($kata);
        if($kata_baru == $kata){
            echo "Palindrome";
        }else{
            echo $kata;
        }
    }


    function is_palindrome ($str){
        if(strlen($str)==0){return true;}
        if($str[0]==$str[strlen($str)-1]){
            return true and is_palindrome(substr($str, 1, strlen($str)-2));
        }else{
            return false;
        }
        
    }


    function GanjilGenap()
    {
        $a = [1,2,3,4,5,6,7,8,9,10];
        $ganjil = [];
        $genap = [];
        //echo"ganil genap";
        //print_r($a[1]);

//         foreach($a as $loop){
            
// echo ($loop);
//         }

        for($angka = 0; $angka < count($a); $angka++)
        {
            if($a[$angka] % 2 == 0){
                array_push($genap, $a[$angka]);
            }else{
                array_push($ganjil, $a[$angka]);
            }
        }

        print_r($ganjil);
echo "<br>";
        print_r($genap);
        

        //return 0;



    }

    function sama()
    {
        $a = [1,2,3,4,5,6,7];
        $b = [2,5,7,9,11,17,19];
        $sama = [];
        for($angka = 0; $angka<count($a); $angka++) {
            for($bilangan = 0; $bilangan<count($b); $bilangan++)
            {
                //print_r($a[$angka]);
                //echo "<br>";
                //print_r($b[$bilangan]);
                //die;
                 if($a[$angka] == $b[$bilangan])
                 {
                     array_push($sama, $a[$angka]);
                 }
            }
        }

        return $sama;
    }



    
 





    echo implode(" ", fibonacci(5));
    echo "<br>";
    echo fizzbuzz(100);
    echo "<br>";
    echo factorial(5);
    echo "<br>";
    echo bilanganprima(100);
    echo "<br>";
    echo Palindromee("kotak");
    echo "<br>";
    echo is_palindrome("kodok");

    echo "<br>";
    echo GanjilGenap();
    echo "<br>";
    //echo implode(" ",sama());
    print_r(sama());

echo "<br>";

    $x = 'KOMPUTER';
$n = strlen($x);
for ($i = 0; $i<=floor(($n-1)/2); $i++)
{
    $temp = $x[$i];
    $x[$i] = $x[$n-1-$i];
    $x[$n-1-$i] = $temp;
}
 
echo $x;
?>