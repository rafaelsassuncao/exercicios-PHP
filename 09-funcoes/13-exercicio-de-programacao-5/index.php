<?php
function sumEvenNumbers($n) {
    // Inicialize a variável de soma com zero
    $sum = 0;
    
    // Utilize um loop for para percorrer os números de 1 até o número fornecido, inclusive
    for ($i = 1; $i <= $n; $i++) {
        // Verifique se o número é par utilizando o operador % (módulo)
        if ($i % 2 == 0) {
            // Se o número for par, adicione-o à variável de soma
            $sum += $i;
        }
    }
    
    // Ao final do loop, retorne o valor da variável de soma
    return $sum;
}

// Chamando a função e mostrando os resultados
echo sumEvenNumbers(10) . "<br>";
echo sumEvenNumbers(5) . "<br>";
echo sumEvenNumbers(15) . "<br>";

