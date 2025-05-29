<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
      <?php endif; ?>
      <h1 id="main-title">Minha Agenda</h1>
      <?php if(count($contacts > 0)): ?>
        <p>Tem Contatos</p>
      <?php else: ?>
        <p id=""></p>

  </div>
<?php
  include_once("templates/footer.php");
?>