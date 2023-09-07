<?php
    $nome = 'Felipe Ferraz';

    //verifica uma string dentro da outra
    str_contains($nome, 'ferraz');

    $url = 'https://gov.com.br';

    //verifica se a string começa com https
    str_starts_with($url, 'https');

    //verifica se a string termina com br
    str_ends_with($url, '.br');
    
    //pega uma substring começando da posição 8 e indo 3 posições a frente
    echo substr($url, 8, 3) . PHP_EOL;
    //pega uma substring começando da posição 8 e vai pegar até o final
    echo substr($url, 8) . PHP_EOL;

    $email = 'gato@gmail.com.br';

    //pega a posição que uma string aparece
    $posicaoArroba = strpos($email, '@');

    echo substr($email, 0, $posicaoArroba) . PHP_EOL;
    echo substr($email, $posicaoArroba+1) . PHP_EOL;

    $senha = '123';

    //pode ser acessada como array, mas não é um array
    //não recomendado
    echo $senha[0] . PHP_EOL;

    //retorna o tamanho em bytes
    //cuidado com caracteres complexos, ã - í
    //se precisar modificar as complexas precisa da extensão mb_strlen
    echo strlen($senha) . PHP_EOL;

    //retorna uma string com letra maiuscula
    //só para caracteres simples
    //se precisar modificar as complexas precisa da extensão mb_strtouppper
    echo strtoupper($nome) . PHP_EOL;
    echo strtolower($nome) . PHP_EOL;

    explode('@', $email);
    //separa a string no operador definido neste caso @
    //retornando um array separado
    //podendo adicionar o paramentro limit

