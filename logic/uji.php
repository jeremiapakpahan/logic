<?php

// $input = 5;
// for($angka = 1; $angka <= $input; $input++)
// {
//     if($angka%2 != 0)
//     {
//         echo "Odd";
//     }else{
//         echo $angka;
//     }
// }



$input = "ACH101385215";
$input2 = "JKT276238192616";
$input = "J3y600238191";

$huruf = substr($input, 0, 3);
$angka = substr($input, 3);
echo $huruf;
echo "<br>";
echo $angka;
echo "<br>";
echo $length = strlen($input);

echo "<br>";
echo "=============";
//var_dump(ctype_alpha($huruf));
if($length == 12 && ctype_upper($huruf) && ctype_alpha($huruf) && ctype_digit($angka))
{
    echo "Right Vaccination Code";
}else{
    echo "Wrong Vaccination Code";
}

// if($length == 12 


echo "<br>";

$a = -12;
echo $a; 
?>