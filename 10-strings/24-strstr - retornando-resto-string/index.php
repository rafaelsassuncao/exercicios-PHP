<?php

  // Define uma string com a frase completa
  $str = "Testando o resto da string, pra ver de dá certo!";

  // strstr encontra a primeira ocorrência da palavra "resto" na string $str
  // Retorna a parte da string a partir e incluindo "resto"
  $resto = strstr($str, "resto");

  // Exibe a substring encontrada, que começa com "resto"
  echo $resto . "<br>";

  // Define uma variável $s com o valor "string"
  $s = "string";

  // strstr encontra a primeira ocorrência da palavra "string" na string $str
  // Retorna a parte da string a partir e incluindo "string"
  $resto2 = strstr($str, $s);

  // Exibe a substring encontrada, que começa com "string"
  echo $resto2 . "<br>";

?>
