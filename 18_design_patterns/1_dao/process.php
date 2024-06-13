<?php

  include_once("db.php");
  include_once("dao/CarDAO.php");

  $carDao = new CarDao($conn);

  $brand = $_POST["brand"];
  $modelo = $_POST["modelo"];
  $km = $_POST["km"];
  $color = $_POST["color"];

  $newCar = new Car($brand, $modelo ,$km, $color);

  $carDao->create($newCar);

  header("Location: index.php");
