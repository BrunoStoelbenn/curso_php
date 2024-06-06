<?php

  // definição

  $n1 = 10;
  $n2 = 10;
  $n3 = 10;

  function multiplicaTres($número1, $número2, $número3){
    return $número1 * $número2 * $número3;
  }

  $numerosMultiplicados = multiplicaTres($n1, $n2, $n3);
  echo $numerosMultiplicados;