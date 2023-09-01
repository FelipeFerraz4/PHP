<?php
    $dadosEmString = json_decode(file_get_contents('./12_arquivoJSON.json'), true);
    var_dump($dadosEmString);

    $numeroPaises = count($dadosEmString);
    echo "Numero de paises participantes: $numeroPaises" . PHP_EOL;

    function paises_upper_case($item){
        $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
        return $item;
    }

    $dadosEmString = array_map(function ($item){
        $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
        return $item;
    }, $dadosEmString);

    var_dump($dadosEmString);

    usort($dadosEmString, function($item1, $item2){
        $medalhas1 = $item1['medalhas'];
        $medalhas2 = $item2['medalhas'];

        return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0 
                ? $medalhas2['ouro'] - $medalhas1['ouro']
                : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
                    ? $medalhas2['prata'] - $medalhas1['prata']
                    : $medalhas2['bronze'] - $medalhas1['bronze']);
    });

    $numeroMedalhas = array_reduce($dadosEmString, function ($medalhasAcumuladas, $itemAtual){
            $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual){
                    return ($medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual);
                }, 0);
            return $medalhasAcumuladas + $medalhasDoPais;
        }, 0);
    
    echo "Total de medalhas entregues: $numeroMedalhas" . PHP_EOL;

    $paisesComNomeSemEspaco = array_filter($dadosEmString, function($item){
        return strpos($item['pais'], ' ') === false;
    });

    var_dump($paisesComNomeSemEspaco);