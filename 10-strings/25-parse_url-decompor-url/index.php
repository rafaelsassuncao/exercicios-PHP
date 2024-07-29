<?php

  // 1º exemplo
  // Define uma URL com o protocolo HTTPS
  $url = "https://www.google.com";

  // A função parse_url analisa a URL e retorna um array associativo com partes da URL
  // As chaves do array podem incluir 'scheme', 'host', 'path', etc.
  $arrayUrl = parse_url($url);

  // Exibe o array resultante, mostrando as partes da URL analisada
  print_r($arrayUrl);
  echo "<br>";



  // 2º exemplo
  // Define uma URL com o protocolo HTTP e parâmetros de consulta
  $url2 = "http://www.horadecodar.com.br/?busca=php";

  // A função parse_url analisa a URL e retorna um array associativo com partes da URL
  $arrayUrl2 = parse_url($url2);

  // Exibe o array resultante, mostrando as partes da URL analisada
  print_r($arrayUrl2);
  echo "<br>";


  // 3º exemplo
  // Define uma URL com o protocolo HTTP e um caminho adicional
  $url3 = "http://www.horadecodar.com.br/usuarios/rafaelsantos?id=12&nome=Rafael";

  // A função parse_url analisa a URL e retorna um array associativo com partes da URL
  $arrayUrl3 = parse_url($url3);

  // Exibe o array resultante, mostrando as partes da URL analisada
  print_r($arrayUrl3);
  echo "<br>";

?>
