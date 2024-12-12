<?php

// Define uma string contendo tags HTML
$textoHtml = "<p>Testando parágrafo. </p><div> Uma Div. </div><p> Outro parágrafo. </p>";

// Imprime a string com as tags HTML
echo $textoHtml;

// Usa a função strip_tags para remover todas as tags HTML da string $textoHtml
$salvarTextoBanco = strip_tags($textoHtml);

// Imprime a string sem as tags HTML
echo $salvarTextoBanco;

?>
