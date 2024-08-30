<?php
  
  // Criando um array associativo para armazenar o ranking de pontuações
  $ranking = [
    'Rafael' => 3300,
    'Gabriel' => 2700,
    'Ravi' => 30300,
    'Vicente' => 2560,
  ];

  // Ordenando o array em ordem decrescente com base nas pontuações
  arsort($ranking);
  
?>

<h1>Ranking</h1>
<ol>
  <?php 
  // Percorrendo o array ordenado e exibindo cada nome com sua pontuação
  foreach($ranking as $nomes => $pontuacao): ?>
    <li><?= $nomes ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>
