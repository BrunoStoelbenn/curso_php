<?php

  $arr = [];

  function criarArray(&$array, $ateQualNumeroVai){  //  O & comercial faz com que a minha array seja passada por referência, e não por valor, resolvendo o erro ao preencher a array com números.
    for($i = 0; $i <= $ateQualNumeroVai; $i++){
      array_push($array, $i);  //  Colocar o número i dentro do array passado.
    }
  }

  criarArray($arr, 90);
  print_r($arr);
