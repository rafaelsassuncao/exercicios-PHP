<?php

  // Criando um array multidimensional com 3 arrays internos
  $arrMulti = [
    [4, 5, 6, 7], // Primeiro array interno
    [1, 2, 3, 4], // Segundo array interno
    [7, 8, 9, 1], // Terceiro array interno
  ];

  // Loop para percorrer o array externo
  for($i = 0; $i < count($arrMulti); $i++) {

    // Imprimindo o número do array externo atual
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    // Loop para percorrer o array interno
    for($j = 0; $j < count($arrMulti[$i]); $j++) {

      // Imprimindo cada elemento do array interno
      echo $arrMulti[$i][$j] . "<br>";

    }

  }
?>
