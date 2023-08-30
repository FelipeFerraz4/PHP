<?php
    $notas = [
        'Ana' => 10,
        'jonh' => 8,
        'Maria' => 9,
        'Roberto' => 7,
        'Vinicius' => 6,
    ];

    ksort($notas);
    var_dump($notas);

    if (gettype($notas) == 'array') {
        echo 'Sim, é um array' . PHP_EOL;
    }
    //verifica se é um array

    if (is_array($notas)) {
        echo 'Sim, é um array' . PHP_EOL;
    }
    //verifica se é um array

    array_is_list($notas);
    //verifica se esse array é numerico, se começa com 0 e 
    //as outras são crescenete, sem pular chave -> true
    
    var_dump(array_is_list($notas));