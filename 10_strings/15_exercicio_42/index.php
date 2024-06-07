<?php

  /**
   * Na frase "Cadê o meu queijo? Ele estava aqui em cima" Resgate apenas a palavra queijo;
   */

   $frase = "Cadê o meu queijo? Ele estava aqui em cima";

   $resgatarQueijo = substr($frase, 12, 6);
   $resgatarEstava = substr($frase, 24, 6);
   echo $resgatarQueijo;
   echo "<br>";
   echo $resgatarEstava;