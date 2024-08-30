<?php
  
  $ranking = [

    'Rafael' => 3300,
    'Gabriel' => 2700,
    'Ravi' => 30300,
    'Vicente' => 2560,
  ];

  arsort($ranking);
  
?>

<h1>Ranking</h1>
<ol>
  <?php foreach($ranking as $nomes => $pontuacao): ?>
    <li><?= $nomes ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>