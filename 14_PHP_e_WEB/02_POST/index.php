<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="cadastro.php" method= "POST">
    <div><input type="text" name="marca" placeholder="Marca do Carro"></div>
    <div><input type="text" name="preco" placeholder="Preço do Carro"></div>
    <div><input type="checkbox" name="opcionais[]" value="Teto Solar"></div>
    <div><input type="checkbox" name="opcionais[]" value="Pelicula"></div>
    <div><input type="checkbox" name="opcionais[]" value="Blindado"></div>
    <div><input type="submit" value="Enviar"></div>
  </form>
</body>
</html>