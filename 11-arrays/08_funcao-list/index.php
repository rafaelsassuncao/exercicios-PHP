<?php

// Criando um array associando informações sobre uma pessoa
$pessoa = ["Rafael", 33, "Programador", "castanhos"];

// Imprime o array completo de forma legível
print_r($pessoa);
echo "<br><br>";

// Usando list() para atribuir cada valor do array a uma variável
list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

// Imprimindo as informações separadamente
echo $nome . "<br>";             // Nome
echo $idade . " anos de idade" . "<br>"; // Idade
echo $profissao . "<br>";        // Profissão
echo $corDosOlhos . "<br>";      // Cor dos olhos
?>
