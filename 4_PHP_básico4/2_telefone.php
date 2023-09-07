<?php
    $telefnoes = ['(88) 99999 - 9999', '(85) 99999 - 9999',
                    '(87) 92222 - 2222'];

     implode('.PHP_EOL', $telefnoes);

     $array = '  a b c d  ';
     explode(' ', $array, 2);
     //vc limita até onde o explode vai varer a string com o limit

     echo trim($array) . PHP_EOL;
     //apara das pontas os espaço e caracteres semelhantes

     $ddd = '(85)';
     echo trim($ddd, '()') . PHP_EOL;
     //o segundo paramentros vc pode selecionar o que vc quer remove
     //da string e se quiser mais coisa vc pode adicionar no paramentro

     ltrim($ddd) . PHP_EOL;
     //remove apenas da esquerda

     rtrim($ddd) . PHP_EOL;
     //remove apenas da direita
