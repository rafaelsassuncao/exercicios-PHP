<?php

  function compararNumeros($primeiroValor, $segundoValor) {
    if ($primeiroValor > $segundoValor) {
        return "O primeiro número é maior.";
    } else if ($segundoValor > $primeiroValor) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}

// Exemplos de uso da função:
echo compararNumeros(12, 10); // Saída: O segundo número é maior.
echo "<br>";
echo compararNumeros(25, 45); // Saída: O primeiro número é maior.
echo "<br>";
echo compararNumeros(7, 7); // Saída: Os números são iguais.


