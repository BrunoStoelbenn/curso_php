<?php

  $host = "localhost";
  $user = "Bruno Stoelbenn";
  $pass = "brunogremist@02";
  $db = "curso_php";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  $conn->close();

  // UM RESULTADO
  $item = $result->fetch_assoc();

  // TODOS OS RESULTADOS
  $itens = $result->fetch_all();

  print_r($itens);