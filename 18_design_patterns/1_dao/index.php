<?php

  include_once("db.php");
  include_once("dao/CarDAO.php");

  $carDao = new CarDao($conn);

  $cars = $carDao->findAll();

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
  <div>
    <label for="brand">Marca do carro:</label>
    <input type="text" name="brand" placeholder="Insira a marca">
  </div>
  <!-- Vou criar mais um campo que eu acho que estou faltando que é modelo.-->
   <div>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" placeholder="Insira o modelo do veículo">
   </div>
  <div>
    <label for="km">Kilometragem:</label>
    <input type="text" name="km" placeholder="Insira a kilometragem">
  </div>
  <div>
    <label for="color">Cor do carro:</label>
    <input type="text" name="color" placeholder="Insira a cor">
  </div>
  <input type="submit" value="Salvar">
</form>
<ul>
  <?php foreach($cars as $car): ?>
    <li><?= $car->getBrand() ?> - <?= $car->getModelo() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
  <?php endforeach; ?>
</ul>