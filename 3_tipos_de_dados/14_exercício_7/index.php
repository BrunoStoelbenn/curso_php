<?php

    $pessoa = [
        'nome' => "Bruno",
        'idade' => 21,
        'data_nascimento' => "11/11/2002",
        'sexo' => "Masculino",
        'peso' => 90,
        'altura' => 1.81
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    $data_nascimento = $pessoa['data_nascimento'];
    $sexo = $pessoa['sexo'];
    $peso = $pessoa['peso'];
    $altura = $pessoa['altura'];

    if($idade >= 18){
        echo "É de maior!<br>";
    }
    else{
        echo "É de menor!<br>";
    }

    echo "Meu nome é $nome, eu tenho $idade anos de idade, nasci no dia $data_nascimento, meu sexo é $sexo, meu peso é de $peso e eu tenho $altura de altura.";