<?php

    // Define uma variável $nome com o valor "Rafael"
    $nome = "Rafael";

    // %s é um especificador de formato para strings. printf imprime a string formatada.
    // O %s será substituído pelo valor da variável $nome.
    printf("O nome é %s <br>.", $nome);

    // Define uma variável $n com o valor 10
    $n = 10;

    // %d é um especificador de formato para inteiros. printf imprime a string formatada.
    // O primeiro %d será substituído pelo valor da variável $n e o segundo %d será substituído pelo valor 150.
    printf("O número é %d e o outro é %d <br>.", $n, 150);

    // %f é um especificador de formato para números de ponto flutuante (float).
    // %.1f indica que o número deve ser exibido com uma casa decimal.
    printf("A temperatura atual é %.1f <br>.", 12.78);

?>
