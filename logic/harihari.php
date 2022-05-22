<?php  
$string = "JAVATPOINT";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  




function reverse($string){
    $panjang = strlen($string);
    for($i = ($panjang-1); $i >= 0; $i--){
        echo $string[$i];
    }
}


function balik($number)  
{  

    var_dump($number);
   /* writes number into string. */  
    $num = (string) $number;  
    var_dump($num);
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
     return $reverse;  
}  



    function palindrom($input)
    {
        $panjang = strlen($input);
        for($i = ($panjang - 1); $i>=0; $i--){
            $new_str = $input[$i];
            echo $new_str;
        }

        if($input == $new_str){
            echo "Palindrome";
        }else{
            echo $input;
        }
    }

 echo balik(23456);  
echo "<br>";
echo reverse("botak");
echo "<br>";
echo palindrom("katak");
?>  
