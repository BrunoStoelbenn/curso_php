<?php

  include_once("models/Car.php");

  class CarDAO implements CarDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
      $this->conn = $conn;
    }

    public function findAll() {

      $cars = [];
      
      $stmt = $this->conn->query("SELECT * FROM cars");

      $data = $stmt->fetchAll();

      foreach($data as $item) {

        $car = new Car($item["brand"], $item["modelo"], $item["km"], $item["color"]);

        $car->setId($item["id"]);

        $cars[] = $car;

      }

      return $cars;

    }

    public function create(Car $car) {
      
      $stmt = $this->conn->prepare("INSERT INTO cars(brand, modelo, km, color) VALUES (:brand, :modelo, :km, :color)");

      $stmt->bindParam(":brand", $car->getBrand());
      $stmt->bindParam(":modelo", $car->getModelo());
      $stmt->bindParam(":km", $car->getKm());
      $stmt->bindParam(":color", $car->getColor());

      $stmt->execute();
    }

  }