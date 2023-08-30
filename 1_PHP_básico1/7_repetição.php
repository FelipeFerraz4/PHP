<?php
    $contador = 1;
    while ($contador <= 15) {
        echo "$contador" . PHP_EOL;
        if ($contador == 13){
            break;
        }
        $contador += 1;
    }

    echo "" . PHP_EOL;

    for ($contador = 1; $contador <= 15; $contador++){
        if ($contador == 13){
            continue;
        }

        echo "#$contador" . PHP_EOL;
    }

    $contador = 1;
    do {
        echo "#$contador" . PHP_EOL;
        $contador++;
    }while($contador <= 15);