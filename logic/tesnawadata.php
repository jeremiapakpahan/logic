<?php

function nomorSatu($input)
{
//$input = 5;
if($input<=50 && $input>=0){
for($angka = 1; $angka <= $input; $angka++)
{
    if($angka%2 != 0)
    {
        echo "Odd ";
    }else{
        echo $angka." ";
    }
}
}else{
    echo "Max. Input is 50";
}
}

function nomorDua($input)
{
//     $input = "ACH101385215";
// $input2 = "JKT276238192616";
// $input = "J3y600238191";

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
}





echo nomorSatu(51);

echo "<br>";


?>