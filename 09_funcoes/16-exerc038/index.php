<?php

$Supermercado = ["arroz", "feijão", "carne", "leite", "pao", "vinho"];


function listaParaString($itensSupermercado) {

    $arrViraString = "Estes são os itens no carrinho de compras:  ";

    for($i = 0; $i < count($itensSupermercado); $i++) {

        if($i + 1 == count($itensSupermercado)) {
            $arrViraString .=  "$itensSupermercado[$i].";
        } else {
            $arrViraString .=  "$itensSupermercado[$i], ";
        }
 }

 return $arrViraString;

}

echo listaParaString($Supermercado);