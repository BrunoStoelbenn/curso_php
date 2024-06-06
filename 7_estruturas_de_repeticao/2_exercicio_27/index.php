<?php

  $arr = [5, "Matheus", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô"];

  function ehString($array){
    $i = 0;
    while($i < 13){
      if (is_string($array[$i])){
        echo $array[$i] . "<br>";
        $i++;
      }
      else {
        echo "Não é string <br>";
        $i++;
      }
    }
  }
  
  ehString($arr);