<?php

  $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

  $i = 0;
  while($i < count($arr)) {
    if ($arr[$i] === 30 || $arr[$i] === 40) {
      $i++;
      continue;
      
    }
    else{
      echo $arr[$i] . ", ";
      $i++;
    }
  }