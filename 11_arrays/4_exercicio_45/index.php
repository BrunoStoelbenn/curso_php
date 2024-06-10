<?php

  $array1045 = range(10, 45);
  $array1045string1 = implode(", ", $array1045);
  echo $array1045string1 . "<br>";

  for($i = 0; $i < count($array1045); $i++){
    $soma = $array1045[$i] + 6;
    if($soma > 30){
      echo "O número $soma é muito alto <br>";
    }
    else {
      echo "$soma <br>";
    }
  }
  

 
  