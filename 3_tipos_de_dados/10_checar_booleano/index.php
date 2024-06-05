<?php

    $valor_verdadeiro = true;
    $valor_falso = false;
    $nome = "João";
    $n1 = 89;

    function checarBooleano($valorboleano){
        if(is_bool($valorboleano)){
            return "É booleano!<br>";
        }

        else {
            return "Não é booleano!<br>";
        }
    }

    echo checarBooleano($valor_verdadeiro);
    echo checarBooleano($valor_falso);
    echo checarBooleano($nome);
    echo checarBooleano($n1);