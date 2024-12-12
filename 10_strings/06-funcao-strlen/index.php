<?php

    // Define uma variável $str1 com uma string longa
    $str1 = "Esta string é muito grande";

    // Define uma variável $str2 com uma string mais curta
    $str2 = "Esta não";

    // Exibe o comprimento da string $str1 usando a função strlen() e adiciona uma quebra de linha <br>
    echo strlen($str1) . "<br>";

    // Exibe o comprimento da string $str2 usando a função strlen() e adiciona uma quebra de linha <br>
    echo strlen($str2) . "<br>";

    // Armazena o comprimento da string $str1 na variável $len1
    $len1 = strlen($str1);

    // Armazena o comprimento da string $str2 na variável $len2
    $len2 = strlen($str2);

    // Compara se o comprimento da string $str1 é maior que o comprimento da string $str2
    if($len1 > $len2){

        // Se a condição for verdadeira, exibe uma mensagem indicando que a string 1 é maior
        echo "A string 1 é maior que a 2! <br>";

    } else {

        // Se a condição for falsa (ou seja, $len1 não é maior que $len2), exibe uma mensagem indicando que a string 2 é maior
        echo "A string 2 é maior que a 1! <br>";

    }

?>
