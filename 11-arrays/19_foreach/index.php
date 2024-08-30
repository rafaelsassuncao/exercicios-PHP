<?php

// Criando um array associativo para armazenar informações sobre o Rafael
$rafael = [ 
  'nome' => "Rafael",           // Nome do Rafael
  'profissao' => 'Desenvolvedor', // Profissão do Rafael
  'idade' => 33,                // Idade do Rafael
];

// Criando um array associativo para armazenar informações sobre a Thais
$thais = [
  'nome' => 'Thais Nickele',       // Nome da Thais
  'profissao' => 'Desenvolvedora', // Profissão da Thais
  'idade' => 31,                   // Idade da Thais
];

// Usando um loop foreach para percorrer o array $rafael e exibir cada chave e valor
foreach($rafael as $carac => $value) {
  echo "$carac => $value <br>";  // Exibindo a chave e o valor do array com uma quebra de linha
}

// Usando outro loop foreach para percorrer o array $thais e exibir cada chave e valor
foreach($thais as $carac => $value) {
  echo "$carac => $value <br>";  // Exibindo a chave e o valor do array com uma quebra de linha
}
