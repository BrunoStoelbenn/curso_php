<?php


  class Pessoa{
    public $nome;
    public $idade;

    function andar($metros, $nome){
      return "Eu, $nome, andei $metros metros. <br>";
    }
  }

  $pessoa1 = new Pessoa;
  $pessoa2 = new Pessoa;
  $pessoa3 = new Pessoa;
  $pessoa1->nome = "Bruno Cassiano Stoelbenn";
  $pessoa1->idade = 21;
  echo($pessoa1->andar(2659, $pessoa1->nome));
  $pessoa2->nome = "Jorge Alberto Stoelbenn";
  $pessoa2->idade = 56;
  echo($pessoa2->andar(8900, $pessoa2->nome));
  $pessoa3->nome = "Silvia Janete Groth Stoelbenn";
  $pessoa3->idade = 51;
  echo($pessoa3->andar(5600, $pessoa3->nome));
  