<?php

$array = [1, 2, 3];

function somaElementos($array) {
    if (count($array) == 0) {
        return "Erro. O array deverá conter um elemento, no mínimo.";
    } else {
        return array_sum($array);
    }
}

echo somaElementos($array);