<?php

  function encontrePares($numerosInteiros){

    $numerosPares = [];

    foreach($numerosInteiros as $numeros) {

      if($numeros % 2 === 0) {
        $numerosPares[] = $numeros;
      }

    }

    return $numerosPares;

  }

  $meuArray = [1, 2, 3, 4, 5, 6, 7, 8];
  $resultado = encontrePares($meuArray);

  print_r($resultado);

?>;