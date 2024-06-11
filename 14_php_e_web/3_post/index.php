<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="cadastro.php" method="POST">
    <div>
      <input type="text" name="marca" placeholder="Marca do carro">
    </div>
    <div>
      <input type="text" name="preco" placeholder="Preço do carro">
    </div>
    <div>
      <input type="checkbox" name="opcionais[]" id="iopcionais" value="Teto solar">
      <label for="iopcionais"> Teto solar</label>
    </div>
    <div>
      <input type="checkbox" name="opcionais[]" id="ipelícula" value="Película">
      <label for="ipelícula"> Película</label>
    </div>
    <div>
      <input type="checkbox" name="opcionais[]" id="iblindado" value="Blindado">
      <label for="iblindado"> Blindado</label>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>