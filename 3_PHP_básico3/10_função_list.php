<?php
    $dados = [
        'nome' =>'carla', 
        'tamanho' => 149,
        'idade' => 19,
    ];

    list($nome, $tamanho, $idade) = $dados;
    //separa os dados em variaveis

    //[$nome, $tamanho, $idade] = $dados;
    //faz a mesma coisa da função lista

    ['nome' => $nome, 'tamanho' => $tamanho, 'idade' => $idade] = $dados;
    //usando para separar tanto os valores como as chaves

    extract($dados);
    //transforma os indice em variaveis - transforma o array em variaveis
    //cuidado se os dados não forem confiaveis pode haver criação de coisa
    //que pode gerar falhas, com dados não tratados

    compact('nome', 'nota', 'idade');
    //une varias variaveis formando um array
    
