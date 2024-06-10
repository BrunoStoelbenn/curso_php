<?php

  class Humano{
    public $nome;
    public $idade;
    public $sexo;
    public $dataNascimento;
    
    function falar(){
      return "$this->nome está falando. <br>";
    }

    function toString(){
      return "Olá, meu nome é $this->nome, eu tenho $this->idade anos de idade e nasci no dia $this->dataNascimento. Eu sou do sexo $this->sexo. <br>";
    }
  }

  class Professor extends Humano{
    public $materia;

    function falar(){
      return "Eu sou um professor e eu estou falando. <br>";
    }

    function toStringProfessor(){
      return $this->toString() . "Eu sou professor e lessiono a matéria $this->materia <br>";
    }
  }

  $pessoa1 = new Humano;
  $pessoa1->nome = "Bruno Cassiano Stoelbenn";
  $pessoa1->idade = 21;
  $pessoa1->sexo = "Masculino";
  $pessoa1->dataNascimento = "11/11/2002";
  $professor = new Professor;
  $professor->nome = "Evandro Frozen";
  $professor->idade = 52;
  $professor->sexo = "Masculino";
  $professor->dataNascimento = "25/03/1972";
  $professor->materia = "Fábrica de software - Java orientado a objetos";
  echo $professor->falar();
  echo $professor->toStringProfessor();

  