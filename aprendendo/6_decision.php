<?php
    $year = 21;
    $atestado_de_saude = true;

    echo "voce so pode entrar se tiver mais do que 18 anos" . PHP_EOL;

    //Operadore logicos e relacionais são iguais ao c, mas aceitam igual ao python
    //precedência && - || - and - or
    //(< - >, >= - <=, ==, !=) tem a mesma precedência, logo 
    //serão aplicados da esquerda para direita.
    if ($year >= 18 && $year <= 40) {
        echo "Voce tem $year anos." . PHP_EOL;
        echo "Pode entrar" . PHP_EOL;
    }
    else if ($year >= 18 && $atestado_de_saude == true) {
        echo "Voce tem $year anos." . PHP_EOL;
        echo "Voce tem um atestado" . PHP_EOL;
        echo "Pode entrar" . PHP_EOL;
    }
    else {
        echo "Voce e menor de idade ou passor da idade" . PHP_EOL;
    }
    echo "Adeus!";
    // o else if pode também ser junto elseif
    //PHP também aceita o operador ternario sendo
    //$varialvel = $condição ? $valorseverdadeiro : $valorsefalso

    //no PHP também temos o switch e no novo PHP(8) temos o mach