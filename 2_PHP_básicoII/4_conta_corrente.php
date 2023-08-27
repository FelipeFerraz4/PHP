<?php
    //array associativo => nós definimos os indice
    $conta1 = [
        //761 => 'Lucas' também podemos definir números como indice
        'titular' => 'Lucas',
        'saldo' => 1000,
    ];
    $conta2 = [
        'titular' => 'Maria',
        'saldo' => 300,
    ];
    $conta3 = [
        'titular' => 'Ana',
        'saldo' => 10000,
    ];
    //os indice são apenas inteiros e string
    //string numericas são convertidas para numeros
    $contasCorrentes = [
        100 => [
            //761 => 'Lucas' também podemos definir números como indice
            'titular' => 'Lucas',
            'saldo' => 1000,
        ], 
        101 => [
            'titular' => 'Maria',
            'saldo' => 300,
        ], 
        102 => [
            'titular' => 'Ana',
            'saldo' => 10000,
        ]
    ];

    $contasCorrentes[104] = [
        'titular' => 'Clara',
        'saldo' => 7000
    ];

    //Quando não informamos o indice, ele pega depois do ultimo
    $contasCorrentes[] = [
        'titular' => 'Bia',
        'saldo' => 12000
    ];

    foreach ($contasCorrentes as $key => $conta){
        echo $conta['titular'] . PHP_EOL;
        echo $conta['saldo'] . PHP_EOL;
        echo $key . PHP_EOL;
    }
