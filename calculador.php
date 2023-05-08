<?php

/*               Calculadora com menu
4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 
*/


do{
 echo  "_________________________________________________________________________\n";  
 echo "|                                                                         |\n";  
 echo "|                           Escolha o calculo                             |\n";
 echo "|   1 ) Soma                                                              |\n";  
 echo "|   2 ) Subtração                                                         |\n";  
 echo "|   3 ) Multiplicação                                                     |\n";  
 echo "|   4 ) Divisão                                                           |\n";  
 echo "|   5 ) Sair                                                              |\n";  
 echo "|_________________________________________________________________________|\n"; 
    $escoha = 0;
    $escolha = readline("Digite sua escolha de calculo :  \n");
    if($escolha == 5){ 
        echo "TCHAU !!!!!!";
        return 1;
    }elseif ($escolha > 5){
        echo " Tente novamente  !!!! \n";
    }
}while ($escolha > 5);
    $num1 = readline( "Digite o primeiro numero :  \n");
    $num2 = readline( "Digite o segundo numero :  \n"); 

   
function escolha($escohido ,$num1 ,$num2){
     switch ($escohido){
        case (1):
            echo " A Soma de " . $num1 . " + " . $num2 . " é igual a  " . $num1 + $num2 . "\n";
            break;
        case (2):
            echo " A Subtração de " . $num1 . " - " . $num2 . " é igual a  " . $num1 - $num2 . "\n";
            break;
        case (3):
            echo " A Multiplicação de " . $num1 . " X " . $num2 . " é igual a  " . $num1 * $num2 . "\n";
            break;    
        case (4):
            echo " A Divisão de " . $num1 . " / " . $num2 . " é igual a  " . $num1 / $num2 . "\n";
            break;
        default :
            echo " Digite uma opção valida ";
            break;       

        } 
}


escolha($escolha, $num1, $num2);

