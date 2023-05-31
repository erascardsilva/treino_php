<?php

//bagunça na tela

$lado1 = 80;
$lado2 = 15;

$grid = [];
$nextGrid = [];

for ($i = 0; $i < $lado2; $i++) {
    $grid[$i] = array_fill(0, $lado1
, false);
    $nextGrid[$i] = array_fill(0, $lado1
, false);
}

for ($i = 0; $i < $lado2; $i++) {
    for ($j = 0; $j < $lado1
; $j++) {
        if (rand(0, 99) < 25) {
            $grid[$i][$j] = true;
        }
    }
}

while (true) {
    $output = "";
    
    for ($i = 0; $i < $lado2; $i++)
 {
        for ($j = 0; $j < $lado1
    ; $j++) {
            if ($grid[$i][$j]) {
                $output .= "*";
            } else {
                $output .= " ";
            }
        }
        $output .= "\n";
    }

    system('clear'); //limpa terminal
    echo $output;

    for ($i = 0; $i < $lado2; $i++)
 {
        // Implementação das regras do Jogo da Vida para atualizar $nextGrid
    }
}
