<?php

$tabelaDeNumeros = [];

for($x = 10; $x < 20; $x++){

    array_push($tabelaDeNumeros, $x);
    
    $valorAtual = $tabelaDeNumeros[$x];

    if($valorAtual % 2 == 0){

        echo "Valor do item da array: $valorAtual . <br> ";
    }

}

