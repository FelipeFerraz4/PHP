<?php
    require_once '13_funçõesBancoWeb.php';

     $contasCorrentes = [
        100 => [
            'titular' => 'Lucas',
            'saldo' => 1000,
        ], 
        101 => [
            'titular' => 'Maria',
            'saldo' => 300,
        ], 
        102 => [
            'titular' => 'Ana',
            'saldo' => 10000,
        ]
    ];

    $contasCorrentes[] = [
        'titular' => 'Clarisse',
        'saldo' => 7000,
    ];

    echo "<ul>";
    foreach ($contasCorrentes as $cpf => $conta){
        exibirConta($conta, $cpf);
    }
    echo "</ul>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conta correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                Titular <?= $conta['titular']; ?>  - CPF: <?= $cpf; ?>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>