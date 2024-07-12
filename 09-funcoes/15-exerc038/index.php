<?php

    $itensDeSupermercado = ["arroz", "feijão", "carne", "leite", "ovos"];

       function listaParaString($lista){

        $str = "Você levou estes itens do mercado: ";

         for($z = 0; $z < count($lista); $z++) {

            if($z + 1 == count($lista)) {

                $str .= "$lista[$z].";
            } else {
                $str .= "$lista[$z], ";
            }

         }

         return $str;

    }

    echo listaParaString($itensDeSupermercado);