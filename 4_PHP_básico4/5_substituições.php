<?php
    $text = 'Texto com poxa e caramba';
    str_replace('poxa', '***', $text);
    //substitui a palavra na string
    str_replace(['poxa', 'caramba'], '***', $text);
    //substitui as palavras de uma lista na string
    str_replace(['poxa', 'caramba'], ['p', 'c'], $text);
    //substitui as palavras de uma lista na string

    strtr($text, 'poxa', '***@');
    // faz semelhante mais substitui cada caracter por o seu correspondente
    strtr($text, ['poxa' => 'p', 'caramba' => 'c']);
    //mas pode ser usado com palavras se tiverem em uma lista
    //usado quando precisa substituir palavras repetidas
