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

    array_key_exists('Vinicius', $notas);
    //procura se uma chave existe no array também chamada de key_exists()

    isset($notas['Vinicius']);
    //verifica se a chave existe e seu valor é diferente de NULL

    in_array(10, $notas);
    //verifica se existem o valor 10 em algum indice do array $notas

    in_array(10, $notas, true);
    //verifica se existem o valor 10 em algum indice do array $notas de uma forma mais rigida, usando ===
    //pois usando == o php converte string numericas em numeros, com isso, podendo gerar problemas

    $key = array_search(10, $notas);
    //procura quem tem o valor 10 como valor e retorna seu indice, se não encontrar retorna falso

    $key = array_search(10, $notas, true);
    //procura quem tem o valor 10 como valor e retorna seu indice, se não encontrar retorna falso
    //de forma mais rigida