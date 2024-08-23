<?php

  // Criação de um array associativo onde os nomes são as chaves e as idades são os valores
  $pessoa = [
    'Rafael' => 33, 
    'Thais'=> 31,
    'Gabriel'=> 26,
];

?>

<!-- Início da tabela HTML com bordas -->
<table border="1">
  <!-- Cabeçalho da tabela, definindo as colunas: "Nomes" e "Idades" -->
  <tr>
    <th>Nomes</th>
    <th>Idades</th>
  </tr>
  
  <!-- Loop que percorre o array $pessoa para preencher as linhas da tabela -->
  <?php foreach($pessoa as $nomes => $idade): ?>
    <tr>
      <!-- Exibe o nome na primeira coluna -->
      <td><?= $nomes; ?></td>
      <!-- Exibe a idade correspondente na segunda coluna -->
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
s