<?php
    $telefones = ['(88) 98888 - 8888', '(87) 98888 - 8888', '(86) 98888 - 8888'];
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    foreach ($telefones as $telefone){
        $telefonevalido = preg_match(
            '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
            $telefone);
            //verificação com expressão regulares
        if ($telefonevalido) {
            echo 'telefone válido' . PHP_EOL;
        }
        else{
            echo 'telefone não válido' . PHP_EOL;
        }
    }

    foreach ($telefones as $telefone){
        $telefonevalido = preg_match(
            '/(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
            $telefone, 
            $correspondeSelecionado
        );
            //podemos usar mais parametros para delimitar
            //e pegar o texto se ele passar na condição
            //e armazena em um variável
        if ($telefonevalido) {
            echo 'telefone válido' . PHP_EOL;
        }
        else{
            echo 'telefone não válido' . PHP_EOL;
        }


        preg_replace(
            '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/',
            '(xx) /2',
            $telefone,
        );
        //com isso podemos subtituir n string apos se verificada
        // /2 representa o segundo grupo de capitura, ou seja,
        // o segundo ()
    }