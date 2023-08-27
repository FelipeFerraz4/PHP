<?php
    require_once '7_funções_banco.php';

     $contasCorrentes = [
        100 => [
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

    $contasCorrentes[] = [
        'titular' => 'Clarisse',
        'saldo' => 7000,
    ];

    //deleta o elemento de indice 100
    //o unset pode receber também várias variaveis para excluir
    unset($contasCorrentes[100]);

    foreach ($contasCorrentes as $cpf => $conta){
        //forma antiga
        //list('titular' => $titular, 'saldo' => $saldo) = $conta;
        //forma nova
        ['titular' => $titular, 'saldo' => $saldo] = $conta;

        printMensagem(mensagem: 
            "$cpf $titular $saldo"
        );
    }
