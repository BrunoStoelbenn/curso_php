<?php

  $arr = [
    'porta' => 100,
    'maçaneta' => 5,
    'motor' => 2000,
    'embreagem' => 1320,
    'freios' => 400,
    'lataria' => 3300,
    'retrovisor' => 8
  ];

  function objetosCaros($array){
    $arrayItensCaros = [];
    foreach($array as $item => $preco){
      if($preco > 10){
        array_push($arrayItensCaros, $item);
      }
      else {
        continue;
      }
    }
    return $arrayItensCaros;
  }

  $novo_array = objetosCaros($arr);
  print_r($novo_array);