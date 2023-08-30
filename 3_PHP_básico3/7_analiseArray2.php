<?php
    $notasB1 = [
        'Ana' => 10,
        'jonh' => 8,
        'Maria' => 9,
        'Roberto' => 7,
    ];

    $notasB2 = [
        'Ana' => 10,
        'jonh' => 8,
        'Vinicius' => 6,
    ];

    $alunosFaltantes = array_diff($notasB1, $notasB2);

    $nomeAlunos = array_keys($alunosFaltantes);
    //retorna um novo array com as chaves

    $notasAlunos = array_values($alunosFaltantes);
    //retorna um novo array com os valores

    array_combine($notasAlunos, $nomeAlunos);
    //return um novo array com a cobinação dos array passados, notas indice e nomes valores
    //array do mesmo também

    array_flip($alunosFaltantes);
    //inverte os valores com as chaves 
