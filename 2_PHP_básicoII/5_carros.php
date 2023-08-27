<?php
    $carros = [
        "kla-3232" =>[
            'marca' => 'fiat',
            'modelo' => 1.0
        ],
        "sjw-9873" =>[
            'marca' => 'ford',
            'modelo' => 2.0
        ],
        "ksw-3121" =>[
            'marca' => 'bmw',
            'modelo' => 5.0
        ]
    ];

    foreach ($carros as $key => $carro) {
        echo $carro['marca'] . PHP_EOL;
        echo $carro['modelo'] . PHP_EOL;
        echo $key . PHP_EOL;
    }
