<?php

  if(isset($_GET['nome'])) {  //  isset serve para que se não der certo pegar os parâmetros pelo get cair no else
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
  } else {
    $nome = "Padrão";
    $idade = "Padrão";
  }

?>

<h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>