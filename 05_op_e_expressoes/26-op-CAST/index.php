<?php

// Nessa aula o professor mostrou a utilidade do CAST, que o mesmo converte o valor da variável.

  $a = (int) "12";

  echo $a;
  echo "<br>";
  echo $a + 10;
  echo "<br>";

if($a === 12){
  echo "A é identico a 12 <br>";
}

$b = (float) "3.14843824";
if($b === 3.14843824) {
  echo "B é idêntico a 3.14";
}

$c = (string) 34;

echo $c . "<br>";

if($c === "34"){
  echo "C é idêntico a 34 (string)";
}