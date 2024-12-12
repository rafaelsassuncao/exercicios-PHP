<?php

// Define uma string para ser usada nos testes
$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

// Usa o método strpos para encontrar a primeira ocorrência da palavra "strpos" na string $str
$testeEncontrar = strpos($str, "strpos");
// Imprime a posição onde "strpos" foi encontrado. O resultado será 22, que é a posição da primeira ocorrência de "strpos"
echo "$testeEncontrar <br>";

// Usa o método strpos para tentar encontrar a palavra "Java" na string $str
$testeEncontrar2 = strpos($str, "Java");
// Imprime o resultado da busca. Como "Java" não está presente em $str, o resultado será false (vazio na impressão)
echo "$testeEncontrar2 <br>";

// Verifica se $testeEncontrar2 é igual a false (palavra não encontrada)
// Se for true, imprime "Palavra não encontrada!"
if($testeEncontrar2 == false){
  echo "Palavra não encontrada!<br><br>";
}

// Define uma palavra para procurar na string $str
$palavra = "com";

// Usa o método strpos para encontrar a primeira ocorrência da palavra "com" na string $str
$testeEncontrar3 = strpos($str, $palavra);
// Imprime a posição onde "com" foi encontrado. O resultado será 32
echo "$testeEncontrar3 <br><br>";

// Define outra palavra para procurar na string $str
$palavra2 = "to";

// Usa o método strpos para encontrar a primeira ocorrência da palavra "to" na string $str
$testeEncontrar4 = strpos($str, $palavra2);
// Imprime a posição onde "to" foi encontrado. O resultado será 5
echo "$testeEncontrar4 <br>";
