<?php

// Definindo um array associativo com chaves e valores
$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângulo',
    'material' => 'aço'
];

// Usando a função extract para criar variáveis com base nas chaves do array
extract($arr);

// Agora, podemos acessar as variáveis criadas a partir do array
echo "$cor <br>";       // Exibe 'vermelho'
echo "$forma <br>";     // Exibe 'retângulo'
echo "$material <br>";  // Exibe 'aço'

// Definindo uma variável chamada $nome
$nome = "Thais";

// Criando um novo array associativo com chaves 'nome' e 'idade'
$pessoa = [
    'nome' => 'Rafael',
    'idade' => 33
];

// Exibindo o valor da variável $nome, que foi definida anteriormente
echo "$nome <br>";  // Exibe 'Thais'

// Usando a função extract novamente para criar variáveis com base nas chaves do array $pessoa
extract($pessoa);

// Agora, $nome foi sobrescrita pelo valor do array $pessoa
echo "$nome <br>";  // Exibe 'Rafael'
echo "$idade <br>"; // Exibe '33'
?>
