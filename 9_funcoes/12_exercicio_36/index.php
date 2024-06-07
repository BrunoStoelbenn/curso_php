<?php

  $array_numeros = [10, 20, 30, 5, 4, 3, 2, 7, 40, 50, 60];
  function numeroMaioresQue7($array){
    $novo_array = [];
    for ($i = 0; $i < count($array); $i++){
      if ($array[$i] > 7){
        array_push($novo_array, $array[$i]);
      }
      else {
        continue;
      }
    }
    return $novo_array;
  }
  print_r(numeroMaioresQue7($array_numeros));

  