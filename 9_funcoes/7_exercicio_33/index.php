<?php

  function dadosBasicos($nome, $idade, $genero){
    if ($genero == "Masculino"){
      return "Olá, eu sou o $nome e tenho $idade anos! <br>";
    }
    else{
      return "Olá, eu sou a $nome e tenho $idade anos! <br>";
    }
    
  }

  echo dadosBasicos("Bruno", 21, "Masculino");
  echo dadosBasicos("Guilherme", 21, "Masculino");
  echo dadosBasicos("Matheus", 21, "Masculino");
  echo dadosBasicos("Isabela", 18, "Feminino");


