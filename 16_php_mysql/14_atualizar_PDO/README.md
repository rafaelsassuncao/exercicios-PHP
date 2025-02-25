# Atualizando dados com PDO

● Para atualizar a abordagem também é parecida;

● Vamo seguir com a sequência: prepare => bind_param => execute

● E então a query persistirá no banco:
$stmt = $con->prepare(“UPDATE x SET a = ?, b = ? WHERE c = ?”)