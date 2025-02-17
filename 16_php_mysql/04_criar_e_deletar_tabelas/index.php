<?php

 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "cursophp";

 $conn = new mysqli($host, $user, $pass, $db);

//  ASSUNTO DA AULA

// Comando para criar uma tabela:
// $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

// Comando para deletar (Dropar) uma tabela:
 $q = "DROP TABLE teste";



$conn->query($q);

$conn->close();
