<?php

/*   tabuada
2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40. */

function separa(){
    echo " __________________________________________________". "\n";
    echo "|                                                  |". "\n";
};

function separa_dow(){
    echo "|__________________________________________________|". "\n"; 
};

separa();
echo "       Digite um numero para tabuada" . "\n";
$tabuada = readline("                  AQUI : "  );

echo "\n";
separa_dow();
if($tabuada !== null){
 separa();   
    for ($i = 0 ; $i <= 10; $i++){
        echo  "                 " . $tabuada . " X " . $i . " = " .$tabuada * $i . "\n";
}
separa_dow();
   }
