<?php

  function defineCorCarro($cor = "Vermelho"){
    return "Cor: $cor.<br>";
  }

  echo defineCorCarro();
  echo defineCorCarro("Azul");