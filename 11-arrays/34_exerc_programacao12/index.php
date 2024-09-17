<?php
 
function ordenarNumeros($arr) {
  sort($arr);
  return $arr;
}
 
$numeros = [4, 2, 7, 1, 9, 3];
$numerosOrdenados = ordenarNumeros($numeros);
print_r($numerosOrdenados);