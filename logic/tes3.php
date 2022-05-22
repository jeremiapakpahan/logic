<?php

$input = 5;

if($input%2 != 1 && $input > 0)
{
    echo("banana");
}else{
    echo("apple");
}


 echo "<br>";
$input = 10;

for($i = 1; $i<=$input; $i+=2)
{
    echo $i;
}


$input = 10;

for($i = 1; $i <= $input; $i++){
    if($input % $i == 0 && $i != 5)
    {
        echo ($i);
    }
}

?>