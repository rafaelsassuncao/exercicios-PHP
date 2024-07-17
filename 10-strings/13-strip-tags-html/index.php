<?php

  $textoHtml = "<p>Testando parágrafo. </p><div> Uma Div. </div><p> Outro paráfrago. </p>";

  echo $textoHtml;

  $salvarTextoBanco = strip_tags($textoHtml);

  echo $salvarTextoBanco;