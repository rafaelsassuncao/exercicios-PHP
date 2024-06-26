<?php

function calcularDesconto($valorProduto, $categoria) {

    $desconto = 0;
    $descontoEletro = "eletronicos";
    $descontoVestuario = "vestuario";
    $descontoAlimentos = "alimentos";

    switch ($categoria) {
        case "eletronicos":
            $desconto = 00.1;  // 10% de desconto
            break;
        case "vestuario":
            $desconto = 00.2;  // 20% de desconto
            break;
        case "alimentos":
            $desconto = 0.05;  // 5% de desconto
            break;
        }
        




}






















//     $desconto = 0;  // Desconto sem categoria

//   switch ($categoria) {
//     case "eletronicos":
//       $desconto = 10.0;  // 10% de desconto
//       break;
//     case "vestuario":
//       $desconto = 20.0;  // 20% de desconto
//       break;
//     case "alimentos":
//       $desconto = 5.0;  // 5% de desconto
//       break;
//   }

//   $valorDesconto = $valorProduto * $desconto;
//   $valorFinal = $valorProduto - $valorDesconto;

//   return $valorFinal;
// }

// $valorProduto = 10;
// $categoria = "alimentos";

// $valorComDesconto = calcularDesconto($valorProduto, $categoria);
// echo "Valor original: R$ " .$valorProduto, 2;
// echo "<br> Valor com desconto ($categoria): R$ " . $valorComDesconto, 2;
