<?php


  class Carro{
    
    public $marca;
    public $ano;
    public $cor;
    public $modelo;
    public $vel_max;

    function construtor($marca, $ano, $cor, $modelo, $vel_max){
      $this->marca = $marca;
      $this->ano = $ano;
      $this->cor = $cor;
      $this->modelo = $modelo;
      $this->vel_max = $vel_max;
    }

    function getVelocidadeMaxima(){
      return $this->vel_max . "<br>";
    }
    
    function setVelocidadeMaxima($vel_max){
      $this->vel_max = $vel_max;
    }
  }

  $carro1 = new Carro;
  $carro1 -> construtor("Ford", 2000, "Prata", "Escort zetec 1.8 16v", 198);
  echo ("O carro $carro1->marca $carro1->modelo do ano $carro1->ano e da cor $carro1->cor chega à velocidade de $carro1->vel_max km/h <br>");
  echo $carro1->getVelocidadeMaxima();
  $carro1->setVelocidadeMaxima(230);
  echo $carro1->getVelocidadeMaxima();


  