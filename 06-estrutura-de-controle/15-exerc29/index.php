<?php

function calcularDesconto($valorProduto, $categoria) {

    if($categoria === "eletronicos"){
        $desconto = 0.1;
    
    } elseif ($categoria === "vestuario"){
        $desconto = 0.2;

    } elseif ($categoria === "alimentos"){
        $desconto = 0.05;
   
    } else {
        $desconto = 0;
    }  

$valorComDesconto = $valorProduto - ($valorProduto * $desconto);

return $valorComDesconto;

}

$produto1 = calcularDesconto(100,"eletronicos");
$produto2 = calcularDesconto(50,"vestuario");
$produto3 = calcularDesconto(30,"alimentos");
$produto4 = calcularDesconto(200,"brinquedos");

echo "Produto1 custa com desconto: R$" . $produto1;
echo "<br>Produto2 custa com desconto: R$" . $produto2;
echo "<br>Produto3 custa com desconto: R$" . $produto3;
echo "<br>Produto4 custa com desconto: R$" . $produto4;
