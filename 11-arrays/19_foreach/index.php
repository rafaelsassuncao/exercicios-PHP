<?php

// Criando um array associativo para a primeira pessoa, com nome, idade e profissão
$PessoaUm = [
  'nome' => 'Rafael',
  'idade' => 33,
  'profissao' => 'Desenvolvedor'
];

// Criando um array associativo para a segunda pessoa, com nome, idade e profissão
$PessoaDois = [
  'nome' => 'Thais',
  'idade' => 31,
  'profissao' => 'Desenvolvedora'
];

// Usando o foreach para percorrer cada característica da primeira pessoa e imprimir no formato "característica => valor"
foreach($PessoaUm as $carac => $value){
  echo "$carac => $value <br><br>";
}

// Usando o foreach para percorrer cada característica da segunda pessoa e imprimir no formato "característica => valor"
foreach($PessoaDois as $carac => $value){
  echo "$carac => $value <br><br>";
}

?>
