<?php

$arr = []; // Cria uma array vazia chamada "$arr"

for($i = 0; $i <= 30; $i++) {
  array_push($arr, $i); // Adiciona os números de 0 a 30 na array "$arr"
}

function arrayMaiorQueSete($array) {
  $arrayRetorno = []; // Cria uma nova array vazia chamada "$arrayRetorno"

  for($j = 0; $j < count($array); $j++) { // Conta os itens da array "$array' e repete para cada item
    if($array[$j] > 7) { // Verifica se o número na posição $j é maior que 7
      array_push($arrayRetorno, $array[$j]); // Se for maior que 7, adiciona na array "$arrayRetorno"
    }
  }

  return $arrayRetorno; // Devolve a array $arrayRetorno com os números maiores que 7
}

$novoArray = arrayMaiorQueSete($arr); // Chama a função e guarda o resultado em $novoArray
// Chamar a função arrayMaiorQueSete com a array "$arr":
// Quando chamamos a função arrayMaiorQueSete("$arr"), estamos passando a array "$arr" para a função.
// Dentro da função, a array "$arr" é verificada e todos os números maiores que 7 são adicionados à nova array $arrayRetorno.
// A função devolve essa nova array, e nós guardamos o resultado em $novoArray.



print_r($novoArray); // Mostra a array $novoArray
?>

