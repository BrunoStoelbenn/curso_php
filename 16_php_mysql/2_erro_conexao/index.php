<?php

  $host = "localhost";
  $user = "Bruno Stoelbenn";
  $pass = "brunogremist@02";
  $db = "curso_phpa";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
  }