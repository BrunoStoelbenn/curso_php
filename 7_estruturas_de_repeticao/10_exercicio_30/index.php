<?php

  $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

  function imprimirPares($array){
    for($i = 0; $i < count($array); $i++){
      if ($array[$i] % 2 == 0){
        echo $array[$i] . "<br>";
      }
      else {
        continue;
      }
    } 
  }

  imprimirPares($arr);