<?php

  $arrayMultidimensional = [];

  function preencherArrayMultidimensional(&$arrayMultidimensao){
    for($i = 0; $i < 3; $i++){
      for($j = 0; $j < 4; $j++){
        $arrayMultidimensao[$i][$j] = $j;
      }
    }
    return $arrayMultidimensao;
  }
  
  preencherArrayMultidimensional($arrayMultidimensional);
  foreach ($arrayMultidimensional as $index => $subArray) {
    echo "Mudando para o array $index: <br> ";
    foreach ($subArray as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}
