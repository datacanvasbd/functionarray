<?php

// Function Dividation for easy mataining

function doTaskA(){
  echo "Step A Done <br>";
}

function doTaskB(){
  echo "Step B Done <br>";
}

function doTaskC(){
  echo "Step C Done <br>";
}

function doTaskD(){
  echo "Step D Done <br>";
}
function doTaskE(){
  echo "Step E Done <br>";
}

function doTheLargerTask(){
  doTaskA();
  doTaskB();
  doTaskC();
  doTaskD();
  doTaskE();
}

doTheLargerTask();



