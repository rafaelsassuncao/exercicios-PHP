<?php

  $arr1 = range(1, 20);

  function somaElementos($arr1){

    for($i = 0, $i < count($arr1), $i++){
      $soma = array_sum($arr1);
    };
    return $soma;
  };

  $resultado = $soma;

  echo $resultado;
  echo "<br>";