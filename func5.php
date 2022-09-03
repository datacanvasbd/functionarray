<?php

// Recursion .... function call itself

function printN($i) {
   if($i>=10){
     return;
      }
   echo $i."<br>";
   $i++;
   printN($i);
  }

printN(0);


function printNumber($counter, $end, $stepping=1) {
    if($counter>$end) {
         return;
     }
   
   echo $counter."<br>";
   $counter += $stepping;
   printNumber($counter,$end,$stepping);
}

printNumber(5,28,2);