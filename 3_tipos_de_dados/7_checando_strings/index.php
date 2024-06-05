<?php

    $nome = "Bruno Cassiano Stoelbenn";
    $endereço = "Avenida Dom Alberto Etges";
    $n1 = 10;

    function checarString($string){
        if (is_string($string)){
            return "A variável é do tipo String.<br>";
        }
        else{
            return "A variável não é do tipo String.<br>";
        }
    }

    echo checarString($nome);
    echo checarString($n1);
    echo checarString($endereço);
