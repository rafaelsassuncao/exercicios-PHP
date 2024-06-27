<?php

function calcularDesconto($valorProduto, $categoria) {

    if($categoria === "eletrônicos"){
        $desconto = 0.1;
    
    } elseif ($categoria === "vestuário"){
        $desconto = 0.2;

    } elseif ($categoria === "alimentos"){
        $desconto = 0.05;
   
    } else {
        $desconto = 0.00;
    }  

$valorComDesconto = $valorProduto - ($valorProduto * $desconto);

return $valorComDesconto;

}

$produto1 = calcularDesconto(100.00, "eletrônicos");
$produto2 = calcularDesconto(50.00, "vestuário");
$produto3 = calcularDesconto(30.00, "alimentos");
$produto4 = calcularDesconto(2000.00, "brinquedos");

echo "eletrônicos: 10% de desconto: " . $produto1 . "<br>";
echo "vestuário: 20% de desconto: " . $produto2 . "<br>";
echo "alimentos: 5% de desconto: " . $produto3 . "<br>";
echo "Outras categorias: nenhum desconto: " . $produto4 . "<br>";
