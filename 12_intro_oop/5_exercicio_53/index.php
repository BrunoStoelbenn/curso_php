<?php

  class Cachorro{
    
    function latir(){
      return "Eu sou um cachorro e eu vou latir. Au au au au au. <br>";
    }
    
    function andar(){
      return "Eu estou correndo. <br>";
    }
  }

  $cachorro1 = new Cachorro;
  $cachorro2 = new Cachorro;
  echo $cachorro1->latir();
  echo $cachorro2->latir();
  echo $cachorro1->andar();
  echo $cachorro2->andar();