<?php

  $str = "Esta é a minha string";

  $minha = substr($str, 10, 5);
  //(string pai, indice inicial, comprimento da palavra)

  echo $str . "<br>";
  echo $minha . "<br>";

  $str2 = "Testando está string abc";

  $novaString = substr($str2, 8); //Omitir comprimento = pegar ate o fim

  echo $novaString . "<br>";

  $novaString2 = substr($str2, 8, -3); //comprimento negativo = remover do ultimo indice

  echo $novaString2 . "<br>";