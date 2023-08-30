<?php
    function printMensagem ($mensagem) 
    {
        echo $mensagem . '<br>';
    }
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
    function upperCaseTitular (array &$conta) {
        $conta['titular'] = mb_strtoupper($conta['titular']);
    }

    function exibirConta (array $conta, $cpf) {
        echo "<li>Titular: {$conta['titular']} CPF: $cpf Saldo: {$conta['saldo']} </li>";
    }