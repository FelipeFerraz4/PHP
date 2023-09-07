<?php
    $nome = 'lucas';
    function geraEmail($nome): void {
        $conteudoEmail = <<<FINAL
        'Olá, $nome
        
        Estamos entrando em contato para
        lhe informa de sua premião estão
        para chegar
        
        atenciosamente, premioXFD'
        
        FINAL;

        echo $conteudoEmail . PHP_EOL;
    }

    geraEmail($nome);
    //heredoc
    //usando o <<<Final podemos fazer com que o php
    //ignore a tabulação
    //pode ser qualquer nome <<<Fim texto Fim
    //semelhante a as duas ""

    function geraEmail2($nome): void {
        $conteudoEmail = <<<'FINAL'
        'Olá, $nome
        
        Estamos entrando em contato para
        lhe informa de sua premião estão
        para chegar
        
        atenciosamente, premioXFD'
        
        FINAL;

        echo $conteudoEmail . PHP_EOL;
    }

    geraEmail2($nome);
    //nowdoc
    //como final está entre aspa, nos dissemos que o texto
    //depois dele vai ser de aspa simples, ou seja, 
    //não aceita variaveis dentro do texto naturamente