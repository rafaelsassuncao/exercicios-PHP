<?php

// Define uma string
$str = "Esta é uma string muito grande, ela tem vários caracteres";

// Usa um loop for para percorrer cada caractere da string $str
for($i = 0; $i < strlen($str); $i++) {
    // Imprime o caractere atual seguido de uma quebra de linha (<br>)
    echo $str[$i] . "<br>";
}

?>
