<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  // Selecionando dados de uma tabela do banco de dados por meio do php e mostrar os dados em uma array:

  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  $conn->close(); //Fechamos a conexão

  // Traz somente um resultado:
  $item = $result->fetch_assoc();

  // Traz todos os resultados de dentro da tabela do banco de dados:
  $todositens = $result->fetch_all();

  print_r($todositens);