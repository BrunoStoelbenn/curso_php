<?php

    /**
     * EXERCÍCIO 4
     * Crie um arquivo PHP;
     * Imprima três floats;
     * Utilize a função is_float em um deles;
     */
    $n1 = 1.90;
    $n2 = 2.60;
    $n3 = 3.80;
    $n4 = 4.25;

    if (is_float($n1)){
        echo ("O primeiro número é float<br>");
        echo $n1 . "<br>";
    }

    if (is_float($n2)){
        echo ("O segundo número é float<br>");
        echo $n2 . "<br>";
    }

    if (is_float($n3)){
        echo ("O terceiro número é float<br>");
        echo $n3 . "<br>";
    }

    if (is_float($n4)){
        echo ("O quarto número é float<br>");
        echo $n4 . "<br>";
    }

    function soma($n1, $n2, $n3, $n4){
        return $n1 + $n2 + $n3 + $n4;
    }

    echo "Soma dos números: " . soma($n1, $n2, $n3, $n4);