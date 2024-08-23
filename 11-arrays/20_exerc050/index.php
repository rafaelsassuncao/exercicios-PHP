<?php

  $pessoa = [
    'Rafael' => 33, 
    'Thais'=> 31,
    'Gabriel'=> 26,
];

?>

<table border="1">
  <tr>
    <th>Nomes</th>
    <th>Idades</th>
  </tr>
  <?php foreach($pessoa as $nomes => $idade): ?>
    <tr>
      <td><?= $nomes; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>