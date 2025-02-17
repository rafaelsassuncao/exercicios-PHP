<?php

//  Esta é conexão com o banco de dados:
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  // Inserindo dados por meio do php no banco de dados:

  $table = "itens";
  $nome = "Xicara";
  $descricao = "É uma xícara usada de cor rosa";

  $q = "INSERT INTO $table (nome, descricao) VARCHAR($nome, $descricao)";

  $conn->query($q);

  $conn->close();