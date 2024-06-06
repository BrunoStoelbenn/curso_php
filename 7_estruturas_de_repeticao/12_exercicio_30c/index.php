<?php

  $arr = [];

  for($i = 0; $i <= 10; $i++) {
    array_push($arr, $i);
  }

  for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] % 3 == 0) {
      echo $arr[$i] . "<br>";
    } 
    else {
      continue;
    }
  }

