<?php
    $alunos = [
        'Ana',
        'jonh',
        'Maria',
        'Roberto',
        'Vinicius',
    ];

    array_push($alunos, 'Alice', 'clara', 'Bia');
    //adiciona esse elementos no final do array

    $alunos[] = 'luiza';
    //adiciona esse elementos no final do array

    array_unshift($alunos, 'amanda');
    //adiciona elemento no inicio

    array_shift($alunos);
    //remove o primeiro elemento

    array_pop($alunos);
    //remove o ultimo elemento

