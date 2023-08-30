<?php
    $notas = [
        [
            'aluno' => 'Maria',
            'nota' => 10,
        ],
        [
            'aluno' => 'Jonh',
            'nota' => 7,
        ],
        [
            'aluno' => 'Carla',
            'nota' => 9,
        ],
        [
            'aluno' => 'Julha',
            'nota' => 4,
        ],
    ];

    function ordenaNotas(array $notas1, array $notas2){

        /*

        if ($notas1['nota'] > $notas2['nota']) {
            return -1;
        }
        else if($notas1['nota'] < $notas2['nota']) {
            return 1;
        }
        else{
            return 0;
        }

        */

        return $notas1['nota'] <=> $notas2['nota'];
        //operador do php que, se o primeiro elemento for
        //menor que retorna -1, se maior return 1, se igual
        //retorna 0 

    }

    //usada quando queremos nós mesmo definir os parametros para ordenação
    //recebe o array e uma função de comparação
    usort($notas, 'ordenaNotas');

    var_dump($notas);

    //funções anonimas, são funções sem nome que devem ser usadas como parametros ou atruida a uma variavel
    function (array $notas1, array $notas2){
        return $notas1['nota'] <=> $notas2['nota'];
    };
    usort($notas, function (array $notas1, array $notas2){
        return $notas1['nota'] <=> $notas2['nota'];
        }
    );