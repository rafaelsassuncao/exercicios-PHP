<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA

  $id = 12;

  $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

  $nome = "Sofá";
  $descrição = "Sofá semi novo, com madeira de demolição";

  $stmt->bind_param("ssi", $nome, $descrição, $id);

  $stmt->execute();

  if($stmt->error){
    echo "Erro: " . $stmt->error;
  }