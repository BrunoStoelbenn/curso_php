<?php

  /**
   * Converta a seguinte string para array:
   * carro - navio - helicóptero - barco - jangada
   */

   $frase = "carro - navio - helicóptero - barco - jangada";

   $fraseArray = explode("-", $frase);

   print_r($fraseArray);