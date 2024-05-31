<?php

    /* Exercicio 011

    - Teste a expressão "5" * 12;
    - Utilize a função gettype() com o resultado como parametro para checar o tipo de resultado da expressão.

    */


    $resultado = "5" * 12;

    echo $resultado . "<br>";

    echo gettype($resultado);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(12.2);
    echo "<br>";
    echo gettype("teste");
    echo "<br>";


    
    
