# Conexão com PDO

● A conexão com PDO é um pouco diferente do mysqli, mas vamos
informar basicamente os mesmos parâmetros;

● Que são: banco de dados, host, nome do banco, usuário e senha;

● Exemplo:
$conn = new PDO(“mysql:host=localhost;dbname=teste”, $user, $pass);