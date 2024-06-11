<?php

  if(isset($_POST['ingredientes'])) {

    $ingredientes = $_POST['ingredientes'];

    $ingredientesString = implode(", ", $ingredientes);

    echo "O cliente quer comprar as seguintes mercadorias: $ingredientesString.";

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST">
    <div>
      <input type="checkbox" name="ingredientes[]" id="itomate" value="Tomate">
      <label for="itomate">Tomate</label>
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" id="iabóbora" value="Abóbora"> 
      <label for="iabóbora">Abóbora</label>
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" id="ifeijão" value="Feijão">
      <label for="ifeijão">Feijão</label>
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" id="ialface" value="Alface">
      <label for="ialface">Alface</label>
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" id="icebola" value="Cebola">
      <label for="icebola">Cebola</label>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>