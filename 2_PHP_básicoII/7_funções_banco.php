<?php
    function printMensagem ($mensagem) {
        echo $mensagem . PHP_EOL;
    }
    // podemos definir ou não o tipo de parametro
    //podemos definir ou não o return da função
    // definir aumenta a segurança e facilita a procura do erro
    //pois irar acontecer na chamada da função e não na função
    function sacar (array $conta, float $valor): float 
    {
        if ($conta['saldo'] >= $valor ){
            $conta['saldo'] -= $valor;
        } 
        else {
            printMensagem(mensagem: "Saldo insuficiente");
        }

        return $conta['saldo'];
    }

    function deposito ($conta, $valor) {
        if ($valor >= 0){
            return $conta['saldo'] + $valor;
        }else{
            printMensagem(mensagem: "deposito precisa ser maior que 0");
            return $conta['saldo'];
        }
    }