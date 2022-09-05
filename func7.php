<?php

$name = "Earth"; // global scope

function doSomething(){
  global $name;
  echo $name;
 // echo $GLOBALS['name'];  Also use this way
  }

doSomething();
echo "<br>";


function localdoSomething(){
  $name = "Bangla"; // local scope
  echo $name;
  }

localdoSomething();
echo "<br>";

function staticscope(){
    static $i; // static scope parciest REKHEDEWA
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";

}

function doExtra(){
  echo "<br>";
  static $i;
  $i = $i ?? 0;
  echo $i;
}

staticscope();
staticscope();
staticscope();
echo "<br>";
doExtra();