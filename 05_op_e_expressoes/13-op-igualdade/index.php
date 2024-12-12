<?php

    if(3 == 3){
        echo "Comparação verdadeira <br>";
    }

    if(3 == 4){
        echo "Comparação é verdadeira <br>";
    }


    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b){
        echo "Comparação verdadeira 3<br>";
    }

    if($a == $c){
        echo "Comparação é verdadeira 4<br>";
    }

    $nome = "Matheus";
    $nomeDoSistema = "Matheus";

    if($nome == $nomeDoSistema){
        echo "O nome coincide 1<br>";
    }

    
    if($nome = $nomeDoSistema){
        echo "O nome coincide 2<br>";
    }