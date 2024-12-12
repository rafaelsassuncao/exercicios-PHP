<?php

// Definindo uma frase que será dividida
$frase = "Testando o explode";

// Utilizando a função explode para dividir a frase em um array, usando o espaço (" ") como delimitador
$fraseArray = explode(" ", $frase);

// Exibindo o array resultante
print_r($fraseArray);
echo "<br>";

// Tentando dividir a mesma frase usando uma vírgula (",") como delimitador, o que não terá efeito pois não há vírgulas na frase
$fraseArray2 = explode(",", $frase);

// Exibindo o array, que será igual ao $fraseArray original
print_r($fraseArray);
echo "<br>";

// Definindo uma nova frase com itens separados por vírgulas
$fraseB = "Carro, Avião, Barco, Navio";

// Utilizando a função explode para dividir a frase em um array, usando a vírgula (",") como delimitador
$fraseBArray = explode(",", $fraseB);

// Exibindo o array resultante
print_r($fraseBArray);
echo "<br>";

// Utilizando um loop for para percorrer o array $fraseBArray e exibir cada item seguido de uma quebra de linha (<br>)
for ($i = 0; $i < count($fraseBArray); $i++) {
    echo "$fraseBArray[$i] <br>";
}
?>
