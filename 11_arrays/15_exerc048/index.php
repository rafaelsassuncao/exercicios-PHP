<?php

// Cria um array com itens do mercado
$listaMercado = ["batata", "maçã", "pera", "feijão", "arroz"];

// Remove 2 itens a partir do índice 2 ("pera" e "feijão")
// Os itens removidos são armazenados na variável $removidos
$removidos = array_splice($listaMercado, 2, 2);

// Exibe o array após a remoção dos itens
print_r($listaMercado);
echo "<br>";

// Exibe os itens removidos do array
print_r($removidos);
echo "<br>";
?>
