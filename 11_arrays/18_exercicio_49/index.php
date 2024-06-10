<?php

  $animal = "Cachorro";
  $raca = "Pastor alemão";
  $cor = "Beje";
  $caminha = true;
  $late = true;
  $pegaOsso = true;

  $arrayAnimal = compact("animal", "raca", "cor", "caminha", "late", "pegaOsso");

  foreach($arrayAnimal as $tipo => $valor){
    echo "$tipo : $valor . <br>";
  }