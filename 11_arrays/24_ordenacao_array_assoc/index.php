<?php

  $arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
  ];

  asort($arr);  //  Ordena arrays associativos pelo valor, não pela chave

  print_r($arr);
  echo "<br>";

  $arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
  ];


  arsort($arr2);

  print_r($arr2);
  echo "<br>";

  ksort($arr2);  //  ksort ordena pela chave, não pelo valor

  print_r($arr2);
  echo "<br>";

  krsort($arr2);

  print_r($arr2);
  echo "<br>";