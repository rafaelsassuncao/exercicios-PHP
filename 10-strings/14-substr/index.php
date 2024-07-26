<?php

// Define uma string para ser usada nos testes
$str = "Esta é a minha string";

// Usa a função substr para extrair uma substring da string $str
// Inicia na posição 10 e extrai 5 caracteres
$minha = substr($str, 10, 5);

// Imprime a string original
echo $str . "<br>";
// Imprime a substring extraída ("minha")
echo $minha . "<br>";

// Define outra string para ser usada nos testes
$str2 = "Testando está string abc";

// Usa a função substr para extrair uma substring da string $str2
// Inicia na posição 8 e extrai até o final da string
$novaString = substr($str2, 8); 

// Imprime a nova substring extraída ("está string abc")
echo $novaString . "<br>";

// Usa a função substr para extrair uma substring da string $str2
// Inicia na posição 8 e extrai até 3 caracteres antes do final da string
$novaString2 = substr($str2, 8, -3); 

// Imprime a nova substring extraída ("está string")
echo $novaString2 . "<br>";
