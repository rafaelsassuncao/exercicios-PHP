<?php
function countVowels($str) {
    // Lista das vogais em uma única string
    $vogais = "aeiouAEIOU";
    
    // Contador de vogais começa em 0
    $contador = 0;
    
    // Loop através de cada caractere da string
    for ($i = 0; $i < strlen($str); $i++) {
        // Verificar se o caractere atual é uma vogal usando strpos
        if (strpos($vogais, $str[$i]) !== false) {
            // Se for uma vogal, aumenta o contador
            $contador++;
        }
    }
    
    // Retorna o número de vogais
    return $contador;
}

// Exemplo de uso da função
$texto = "Olá Mundo!";
echo countVowels($texto); // Deve imprimir 4 (O, á, u, o)
?>
