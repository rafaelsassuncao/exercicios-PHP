# Inserindo dados com PDO

● Em PDO vamos utilizar uma abordagem parecida com o mysqli;

● Utilizaremos o método prepare para realizar a query com prepared
statements;

● Depois bind_param para estabelecer os valores dos parâmetros;

● Por fim execute fará a execução da query;
$stmt = $con->prepare(“INSERT INTO x(a, b) VALUES(?, ?)”);