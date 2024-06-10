<?php
    function encontrarPares($arrayNumeros){
        $arrayPares = [];
        if (count($arrayNumeros) >= 0){
            foreach($arrayNumeros as $numero){
                if($numero % 2 == 0){
                    $arrayPares[] = $numero;
                }
                else{
                    continue;
                }
            }
        }
        else{
            return "O array deve conter pelo menos um numero!";
        }
        return $arrayPares;   
    }
    
    $arrayNumeros = [10, 20, 30, 40, 33, 21, 45, 66, 88, 93, 2, 3, 4, 5];

    print_r(encontrarPares($arrayNumeros));
