<?php

  $host = "localhost";
  $user = "Bruno Stoelbenn";
  $pass = "brunogremist@02";
  $db = "curso_php";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $queryCriarTabela = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
  
  // $conn->query($queryCriarTabela);
  
  $queryInserirNaTabela = "INSERT INTO teste (nome, sobrenome) VALUES ('Bruno', 'Stoelbenn')";

  $queryDeletarTabela = "DROP TABLE teste";

  $conn->query($queryDeletarTabela);

  $conn->close();