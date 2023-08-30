<?php

    $year = 21;
    // barra \n nao funciona
    echo 'Hello world!\n I was ' . $year . ' years.' . PHP_EOL;

    //Normal
    echo "Hello world! I was $year years.\n";

    //No windows ele le o \n como \r\n
    echo "Hello world! I was $year years.\r\n";

    //Geral, funciona em todos os SO, mais indicada
    echo "Hello world! I was $year years." . PHP_EOL;