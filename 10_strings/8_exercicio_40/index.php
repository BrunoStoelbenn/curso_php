<?php

  $frase = "O rato roeu a roupa do rei de Roma";
  $frase2 = "O oooooooo oooooooo";

  function quantidadeLetras($frase, $letra){
    $contador = 0;
    $fraseMinuscula = strtolower($frase);
    for($i = 0; $i < strlen($fraseMinuscula); $i++){
      if ($fraseMinuscula[$i] == $letra){
        $contador ++;
      }
    }
    return "A frase '$frase' contém $contador letras $letra. <br>";
  }

  echo quantidadeLetras($frase, "a");
  echo quantidadeLetras($frase2, "o");