<?php

    // Declara um array vazio que será usado para armazenar números
    $algunsNumeros = [];

    // Um loop 'for' que começa em 1 e vai até 10 (inclusive)
    for($i = 1; $i <= 10; $i++) {

        // Adiciona o valor de $i ao array $algunsNumeros
        // array_push é uma função que insere um ou mais elementos no final de um array
        array_push($algunsNumeros, $i);
    }

    // print_r é uma função que exibe informações sobre uma variável de forma legível
    // Aqui, ela está sendo usada para imprimir o conteúdo do array $algunsNumeros
    print_r($algunsNumeros);
?>
