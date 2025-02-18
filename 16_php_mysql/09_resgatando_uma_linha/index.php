<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  // Resgatando uma linha somente!

  $id = 7;
  $stmt = $conn->prepare("SELECT * FROM itens  WHERE id = ?");
  $stmt->bind_param("i", $id); //Método certo
  $stmt->execute();
  
  $result = $stmt->get_result();
  $item = $result->fetch_row();//Método certo

  print_r($item);

  $conn->close(); // Fechar conexão