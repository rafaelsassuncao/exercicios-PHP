<?php

  function verificarAcesso($idade, $autorizacao){

    $idadeMinima = 18;

    if($idade >= $idadeMinima && $autorizacao){
        return "Acesso autorizado";
    } else if($idade < $idadeMinima){
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        return "Acesso negado. Autorização necessária";
    }
  }  

  $idade = 16;
  $autorizacao = true;


  $resultadoAcesso = verificarAcesso($idade, $autorizacao);

  echo $resultadoAcesso;




