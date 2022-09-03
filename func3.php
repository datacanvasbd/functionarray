<?php

// Function Retun type fixing

function sum(int $x, int $y, int $z):int{ //:int return integer value
       return $x+$y+$z;
}

echo sum(5,9,7);
echo "<br>";
//echo sum(1,5,4,8) Show Error

// Accepting unlimited Argument

function aunsum(int ...$numbers):int {
    $resultt = 0;
    for($i=0; $i<count($numbers); $i++){
         $resultt += $numbers[$i];
        }
      return $resultt;
 }

echo aunsum(5,8,7,9,2,4,5);

echo "<br>";


// First few number default then unlimited

function unsumf($x,$y,$z, int ...$numbers):int {
    $result = 0;
    for($i=0;$i<count($numbers);$i++){
         $result += $numbers[$i];
        }
      return $result;
 }

echo unsumf(5,8,7,1,2,3,4);