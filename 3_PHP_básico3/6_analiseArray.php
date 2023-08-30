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
        'Maria' => 9,
        'Roberto' => 7,
        'Vinicius' => 6,
    ];

    //essas funções abaixo retorna array da diferença

    array_diff($notasB1, $notasB2);
    //retorna a diferença entre os array usando os valores como comparadores
    //atenção aos erros pois ele ver os valores que tinha no primeiro tem no segundo

    array_diff_key($notasB1, $notasB2);
    //retorna a diferença entre os array usando os indice como comparadores

    array_diff_assoc($notasB1, $notasB2);
    //retorna a diferença entre os array usando os indice e os valores como comparadores

    array_diff_uassoc($notasB1, $notasB2, $functinoComparation);
    //retorna a diferença entre os array usando os indice e os valores como comparadores
    //usando uma função que vc cria

    array_udiff($notasB1, $notasB2, $functinoComparation);
    //retorna a diferença entre os array usando os valores como comparadores
    //usando uma função criada