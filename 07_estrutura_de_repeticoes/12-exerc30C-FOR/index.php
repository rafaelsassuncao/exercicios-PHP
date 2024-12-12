<?php

$tabelaDeNumeros = [];

for($x = 10; $x <= 20; $x++){
    array_push($tabelaDeNumeros, $x);

}


for($x = 0; $x < count($tabelaDeNumeros); $x++){

    $valorTotal = $tabelaDeNumeros[$x];

    if($valorTotal % 2 != 0){

        echo "Este valor é impar: $valorTotal " . "<br>";
    
    }
}