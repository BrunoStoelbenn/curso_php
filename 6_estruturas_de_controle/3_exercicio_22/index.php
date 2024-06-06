<?php

  $idade1 = 16;
  $idade2 = 18;
  $idade3 = 26;

  function maiorIdade($idade){
    return $idade >= 18 ? "É de maior <br>" : "É de menor <br>";
  }

  echo maiorIdade($idade1);
  echo maiorIdade($idade2);
  echo maiorIdade($idade3);