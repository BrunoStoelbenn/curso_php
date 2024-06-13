<?php

  class Car {

    private $id;
    private $brand;
    private $modelo;
    private $km;
    private $color;


    function __construct($brand, $modelo, $km, $color){
      $this->brand = $brand;
      $this->modelo = $modelo;
      $this->km = $km;
      $this->color = $color;
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getBrand() {
      return $this->brand;
    }

    public function setBrand($brand) {
      $this->brand = $brand;
    }

    public function getModelo() {
      return $this->modelo;
    }

    public function setModelo($modelo) {
      $this->brand = $modelo;
    }

    public function getKm() {
      return $this->km;
    }

    public function setKm($km) {
      $this->km = intval($km);
    }

    public function getColor() {
      return $this->color;
    }

    public function setColor($color) {
      $this->color = $color;
    }

  }

  interface CarDAOInterface {

    public function create(Car $car);
    public function findAll();

  }