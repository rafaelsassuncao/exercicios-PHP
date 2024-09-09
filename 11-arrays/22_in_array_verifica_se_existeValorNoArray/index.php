<?php

  // Defino um array $arr contendo alguns nomes de frutas.
  $arr = ['banana', 'maça', 'batata', 'pêra', 'mamão'];

  // Verifico se o item 'batata' está presente no array $arr.
  if(in_array('batata', $arr)){
    // Se 'batata' estiver no array, exibo uma mensagem informando que o item está presente.
    echo "Contem o item batata no array! <br>";
  } else {
    // Caso contrário, exibo uma mensagem informando que o item não está no array.
    echo "Não contem o item no array! <br>";
  }

  // Defino a variável $b com o valor 'maça'.
  $b = 'maça';

  // Verifico se o valor de $b ('maça') está presente no array $arr.
  if(in_array($b, $arr)){
    // Se 'maça' estiver no array, exibo uma mensagem informando que o item está presente.
    echo "Contem o item maça no array! <br>";
  } else {
    // Caso contrário, exibo uma mensagem informando que o item não está no array.
    echo "Não contem o item no array! <br>";
  }

  // Verifico se o item 'bergamota' está presente no array $arr.
  if(in_array('bergamota', $arr)){
    // Se 'bergamota' estiver no array, exibo uma mensagem informando que o item está presente.
    echo "Contem o item bergamota no array! <br>";
  } else {
    // Caso contrário, exibo uma mensagem informando que o item não está no array.
    echo "Não contem o item no array! <br>";
  }
?>
