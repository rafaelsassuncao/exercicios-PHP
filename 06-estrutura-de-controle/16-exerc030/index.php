<?php

    function verificarCategoria($categoria){

        if($categoria === "eletrônicos"){
            return "Essa categoria é de produtos eletrônicos";
        
        } elseif($categoria === "vestuário"){
            return "Essa categoria é de produtos de vestuário";
        
        } elseif($categoria === "alimentos" ){
            return "Essa categoria é de produtos alimentícios";
        
        } else {
            return "Categoria desconhecida";
        
        }

    }


    $tipoA = verificarCategoria("eletrônicos");
    $tipoB = verificarCategoria("vestuário");
    $tipoC = verificarCategoria("alimentos");
    $tipoD = verificarCategoria("pets");


    echo $tipoA . "<br>";
    echo $tipoB . "<br>";
    echo $tipoC . "<br>";
    echo $tipoD . "<br>";
    