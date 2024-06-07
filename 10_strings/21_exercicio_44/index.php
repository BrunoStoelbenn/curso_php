<?php
  /**
   * Converta o seguinte array para uma string:
   * ["O", "PHP", "é", "muito", "legal"]
   */

  $arr = ["O", "PHP", "é", "muito", "legal"];

  $arrToString = implode(" ", $arr);

  echo $arrToString;
