<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)) {
        echo "Isso é float! <br>";
    }

    echo 2 . 3;
    echo "<br>";
    
    if(is_string(2 . 3)) {
        echo "Isso é string! <br>";
    }

    $nome = "Rafael";
    $sobreNome = " Santos Assunção";

    $nomeCopleto = $nome . " " . $sobreNome;

    echo $nomeCopleto;
    echo "<br>";