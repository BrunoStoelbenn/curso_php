<?php

  $arraySupermercado = ["Arroz", "Feijão", "Azeite", "Frango"];

  function formatarArray($array){
    $str = "Você levou esses ítens do supermercado: ";
    foreach($array as $item){
      if($item == $array[count($array) - 1])
        $str .= "$item.";
      else{
        $str .= "$item, ";
      }
    }
    return $str;
  }
  echo formatarArray($arraySupermercado);