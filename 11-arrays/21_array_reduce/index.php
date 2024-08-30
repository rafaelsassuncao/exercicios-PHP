<?php

  // Definindo um array com vários números
  $arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

  // Função que soma dois valores
  function soma($a, $b) {
    return $a + $b;
  }

  // Função que subtrai o segundo valor do primeiro
  function subtracao($a, $b) {
    return $a - $b;
  }

  // Utilizando array_reduce para somar todos os valores do array
  $resultado = array_reduce($arr, "soma");

  // Exibindo o resultado da soma dos valores do array
  echo "$resultado <br>";

  // Utilizando array_reduce para subtrair todos os valores do array
 
