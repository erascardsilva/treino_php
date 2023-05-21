<?php
/*Escreva um programa que imprima os números de 1 a 100.
      Mas para múltiplos de três imprima "Fizz" em vez do número
      e para os múltiplos de cinco imprima "Buzz". Para números que
      são múltiplos de três e cinco, imprima "FizzBuzz"*/

for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0  && $i % 5 == 0) {
        echo "FizzBuzz ( " . $i . ")\n";
    } else if ($i % 5 == 0) {
        echo "Fizz     ( " . $i . ")\n";
    } else if ($i % 3 == 0) {
        echo "Buzz     ( " . $i . ")\n";
    } else {
        echo "         ( " . $i . ")\n";
    }
}
