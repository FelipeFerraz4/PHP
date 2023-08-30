<?php
    $notas = [
        10,
        3,
        9,
        4
    ];

    //mostrar a estrutura do item
    //var_dump($notas);

    $ordenadasNotas = $notas;

    //sort($ordenadasNotas);//número -> ordem crescente e letras -> ordem alfabetica
    //sort passa os números por referência

    echo "Desordenadas" . PHP_EOL;
    var_dump($notas);

    sort($ordenadasNotas);//número -> ordem crescente e letras -> ordem alfabetica

    echo "Ordenadas" . PHP_EOL;
    var_dump($ordenadasNotas);
