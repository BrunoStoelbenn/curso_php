<?php

  $a = 12;
  $b = "Roda";
  $c = [];

  function verificarTipoVariavel1($variavel){
    echo is_int($variavel) ? "É inteiro! <br>" : "Não é inteiro! <br>";
    echo is_float($variavel) ? "É float! <br>" : "Não é float! <br>";
    echo is_string($variavel) ? "É String! <br>" : "Não é String! <br>";
    echo is_bool($variavel) ? "É booleano! <br>" : "Não é booleano! <br>";
    echo is_array($variavel) ? "É array! <br>" : "Não é array! <br>";
  }

  function verificarTipoVariavel2($variavel){
    if (is_int($variavel)){
      echo "É inteiro!<br>";
    }
    else if (is_float($variavel)){
      echo "É float!<br>";
    }
    else if (is_string($variavel)){
      echo "É String!<br>";
    }
    else if (is_bool($variavel)){
      echo "É booleana!<br>";
    }
    else if (is_array($variavel)){
      echo "É array!<br>";
    }
    else {
      "A variável passada como parâmetro não pertence aos tipos inteiro, float, string, bool e nem array!.<br>";
    }
  }

  verificarTipoVariavel1($a);
  echo "<br>";
  verificarTipoVariavel2($b);
  echo "<br>";
  verificarTipoVariavel2($c);
  echo "<br>";