<?php

  function maiorElemento($arr){
    $maior = $arr[0]; // Inicializa o maior elemento com o primeiro elemento do array

// Percorre o array para encontrar o maior elemento
    foreach ($arr as $elemento) {
      if ($elemento > $maior) {
          $maior = $elemento;
      }
    }
    return $maior; // Retorna o maior elemento encontrado

    };

    $novoArray = [1, 75, 35, 125, 758, 987, 456];
    echo maiorElemento($novoArray) . "<br><br>";
