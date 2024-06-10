<?php

  class Cachorro{
    public $nome;
    public $raca;
    public $idade;
    public $cor;

    function __construct($nome, $raca, $idade, $cor){
      $this->nome = $nome;
      $this->raca = $raca;
      $this->idade = $idade;
      $this->cor = $cor;
    }

    function getNome(){
      return $this->nome . "<br>";
    }
    
    function getRaca(){
      return $this->raca . "<br>";
    }

    function getIdade(){
      return $this->idade . "<br>";
    }

    function getCor(){
      return $this->cor . "<br>";
    }

    function toString(){
      return "O nome do cachorro é $this->nome, é da raça $this->raca, tem $this->idade anos e é da cor $this->cor. <br>";
    }

  }

  $sadan = new Cachorro("Sadan", "Pastor alemão", 3, "Dourado");
  echo $sadan->toString();