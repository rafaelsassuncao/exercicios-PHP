<?php

  // Define uma string com a palavra "teste" repetida
  $str = "Testando encontrando palavra teste, em uma string que tem teste";

  // strrpos encontra a posição da última ocorrência da palavra "teste" na string $str
  // Retorna a posição inicial da última ocorrência ou false se não encontrado
  $palavra = strrpos($str, "teste");

  // Exibe a posição da última ocorrência da palavra "teste"
  echo $palavra. "<br>";

  // strpos encontra a posição da primeira ocorrência da palavra "teste" na string $str
  // Retorna a posição inicial da primeira ocorrência ou false se não encontrado
  $palavra2 = strpos($str, "teste");

  // Exibe a posição da primeira ocorrência da palavra "teste"
  echo $palavra2 . "<br>";

  // Verifica se a palavra "Java" não está presente na string $str
  // strrpos retorna false se a palavra não for encontrada, então === false verifica essa condição
  if(strrpos($str, "Java") === false) {
    // Exibe uma mensagem informando que a palavra "Java" não foi encontrada
    echo "A palavra Java não foi encontrada! <br>";
  }

  // substr extrai uma parte da string $str começando na posição da primeira ocorrência da palavra "teste"
  // O segundo argumento é a posição inicial e o terceiro argumento é o comprimento da substring a ser extraída
  // Aqui, extrai 5 caracteres a partir da posição da primeira ocorrência de "teste"
  $p = substr($str, strpos($str, "teste"), 5);

  // Exibe a substring extraída
  echo "$p <br>";

?>
