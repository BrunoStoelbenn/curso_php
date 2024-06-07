<?php

  function parOuImpar($num) {
    if ($num % 2 == 0){
      return "O número $num é par! <br>";
    }
    else{
      return "O número $num é ímpar! <br>";
    }
    }

    echo parOuImpar(10);
    echo parOuImpar(13);
    echo parOuImpar(14);
    echo parOuImpar(15);