<?php
    $notas = [
        'Ana' => 10,
        'jonh' => 8,
        'Maria' => 9,
        'Roberto' => 7,
        'Vinicius' => 6,
    ];

    asort($notas);
    //ordena que nem o sort, mantendo os indice

    rsort($notas);
    //ordena na ordem inversar do sort, mas perdi os indice

    arsort($notas);
    //ordena que nem o rsort, mas mantendo os indice

    ksort($notas);
    //ordena pelas chaves do array

    krsort($notas);
    //ordena pelas chaves do array, na ordem inversa

    uksort($notas, $functionComparation);
    //escolhemos como vai ser ordenado usando a chaves

    var_dump($notas);
    