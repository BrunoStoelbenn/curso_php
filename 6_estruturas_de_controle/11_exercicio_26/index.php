<?php

  $velocidade1 = 60;
  $velocidade2 = 100;
  $velocidade3 = 30;
  $velocidade4 = -30;

  function velocidadeCorreta($velocidade){
    if ($velocidade < 40 && $velocidade > 0){
      return "Você está na velocidade correta!<br>";
    }
    else if ($velocidade == 40){
      return "Cuidado! você está no limite de velocidade!<br>";
    }
    else if ($velocidade > 40){
      return "Você está acima do limite de velocidade!<br>";
    }
    else {
      return "Não existe velocidade negativa!<br>";
    }
  }
  
  echo velocidadeCorreta($velocidade1);
  echo velocidadeCorreta($velocidade2);
  echo velocidadeCorreta($velocidade3);   
  echo velocidadeCorreta($velocidade4);   

