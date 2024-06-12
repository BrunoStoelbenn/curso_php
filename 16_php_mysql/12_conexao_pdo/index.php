<?php

  $host = "localhost";
  $user = "Bruno Stoelbenn";
  $pass = "brunogremist@02";
  $db = "curso_php";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);