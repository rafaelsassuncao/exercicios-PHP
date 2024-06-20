<?php

    $item1 = "PHP";
    $item2 = 10;
    $item3 = true;

    $msg1 = "Esta variável é um inteiro! <br>";
    $msg2 = "Esta variável não é um inteiro! <br>";

    // Verificação do item1
    if(is_int($item1)){
        
        echo $msg1;

    }else {
        echo $msg2;
    }

    // Verificação do item2
    if(is_int($item2)){
        
        echo $msg1;

    }else {
        echo $msg2;
    }

    // Verificação do item3
    if(is_int($item3)){
        
        echo $msg1;

    }else {
        echo $msg2;
    }