<?php
    $notas1 = [
        'Ana' => 10,
        'jonh' => 8,
        'Maria' => 9,
        'Roberto' => 7,
    ];

    $notas2 = [
        'paula' => 10,
        'erica' => 8,
        'carla' => 6,
    ];

    array_merge($notas1, $notas2);
    //combina dois array um atrás do outro, sem preserva as chaves
    //cuidado com a sobreescrita quando tem string no indice

    $alunos = $alunosSala1 + $alunosSala2;
    //combina dois array um atrás do outro, sem preserva as chaves
    //mas não sobreescreve os valores, invez disso, ele ignora os
    //indices repetidos

    $alunos = [...$alunosSala1, " " ,...$alunosSala2];
    //...$array faz o desempacotamento do array em array separados
    //mais versatil

    //cuidado: ... pode significar outra coisa
    //em function podemos usar para empacotar dados
    soma(2, 3, 4, 5);

    function soma(int ...$number)
    {

    }