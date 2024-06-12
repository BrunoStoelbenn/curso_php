<?php

  $host = "localhost";
  $user = "Bruno Stoelbenn";
  $pass = "brunogremist@02";
  $db = "curso_php";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  // $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

  $q = "DROP TABLE teste";

  $conn->query($q);

  $conn->close();