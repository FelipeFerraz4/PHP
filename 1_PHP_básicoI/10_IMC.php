<?php
    $altura = 1.77;
    $peso = 78;

    $imc = ($peso) / ($altura * $altura);

    echo "$imc" . PHP_EOL;

    if ($imc < 18.5) {
        echo "Baixo imc" . PHP_EOL;
    }
    else if ($imc > 24.9) {
        echo "ALto imc" . PHP_EOL;
    }
    else {
        echo "imc normal" . PHP_EOL;
    }