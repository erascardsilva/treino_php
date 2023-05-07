<?php

 /*    Treino
 
 1) - Crie um algoritmo que receba um número digitado pelo usuário
 e verifique se esse valor é positivo, negativo ou igual a zero. 
 A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". */

    echo " Bem vindo digite um número para verificação" . "\n";

    //$numero = fgets(STDIN);
    $numero = readline("Digite aqui : " );


    echo  "Vamos verificar" . "\n" . "Você digitou :  " . $numero . "\n" ;

    if( $numero > 0){
        echo "Seu numero é positivo";
        return 0;
    }elseif($numero < 0){
        echo "Seu numero é negativo";
        return 0;
    }else{
        echo "Seu numero é zero ! ";
    }
