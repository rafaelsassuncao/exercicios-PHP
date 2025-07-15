<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?=$BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group mb-4">
        <label for="name">Nome do Contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>  

      <div class="form-group mb-4">
        <label for="phone">Telefone de Contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o nº de telefone" required>
      </div>

      <div class="form-group mb-4">
        <label for="observation">Observações:</label>
        <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite uma observação" rows="3"></textarea>
      </div>  
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>