<?php

/*           Fatorial
3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo,
 exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6 */

echo "          Calculo Fatorial   \n";
echo " Digite um numero para descobrirmos o fatorial do mesmo \n";

$numero = readline(" Aqui coloque o numero :  ") ; 

$fatorial = 1;
for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo " O fatorial de " . $numero . " é: ".$fatorial;

?>