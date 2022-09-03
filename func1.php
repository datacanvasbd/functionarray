<?php

include_once "allfunction.php";

$x=16;

if(isEven($x)){ // passing argument
    echo "{$x} is an even number";
       }
else {
    echo "{$x} is an odd number";
     }



     echo "<br>";

     $a=20;
     echo "Factorial of {$a} is ".factorial($a);

