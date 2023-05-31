<?php

print
    "Digite a primeira mensagem : \n";
$one = fgets(STDIN);
print
    "Digite a segunda mensagem : \n";
$two = fgets(STDIN);

$message = array(
    "position_one" => $one,
    "position_two" => $two

);

print
    "------------------------------------\n";
print
    $message["position_one"];
print
    "\n";
print
    $message["position_two"];
print
    "\n";
print
    "------------------------------------\n";
