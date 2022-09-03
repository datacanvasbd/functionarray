<?php

function serve($foodType,$numberOfItems){
  echo "{$numberOfItems} of {$foodType} have been served";
}

$ft = "Coffee";
$n="2 Cups";

serve($ft,$n);
echo "<br>";

function serves($food,$Items="1 cup"){
  echo "{$Items} of {$food} have been served";
}

$ftt = "Coffee";


serves($ftt);
echo "<br>";


function servess($foods,$Itemss="1 cup"){
  echo "{$Itemss} of {$foods} have been served <br>";
}

$fttt = "Coffee";
$nn="5 cups";

echo "<br>";
servess($fttt,$nn);
echo "<br>";
servess("Tea","8 cups");