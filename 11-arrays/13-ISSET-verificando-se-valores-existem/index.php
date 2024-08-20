<?php

// Criação de um array associativo com as chaves 'nome' e 'idade'
$arr = [
    'nome' => 'Rafael',
    'idade' => 33,
];

// Verificação se a chave 'nome' existe no array usando a função isset
if(isset($arr['nome'])){
    // Se a chave existir, imprime a mensagem abaixo
    echo "A chave existe!";
} else {
    // Se a chave não existir, imprime a mensagem abaixo
    echo "A chave não existe!";
}
?>
