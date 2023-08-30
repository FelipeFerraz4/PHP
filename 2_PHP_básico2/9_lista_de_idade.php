<?php
    $idadeList = [21, 34, 65, 87, 98, 12];

    //pega os três primeiros valores da idadeList
    list($idadeLucas, $idadeMaria, $idadeAna) = $idadeList;

    //pega o primeiro e o terceiro valor da idadeList
    //list($idadeLucas, , $idadeAna) = $idadeList;

    $idadeList[] = 20;

    foreach ($idadeList as $idade){
        echo $idade . PHP_EOL;
    }