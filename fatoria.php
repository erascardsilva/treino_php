<?php

/*           Fatoria
3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo,
 exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6 */


 echo "     Calculo Fatorial   \n";
 echo " Digite um numero para descobrirmos o fatorial do mesmo \n";

 $numero = readline(" Aqui coloque o numero :  ");
 function calcularFatorial($numero) {
    if ($numero == 0) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}


$fatorial = calcularFatorial($numero);

echo "O fatorial de $numero é: $fatorial";
