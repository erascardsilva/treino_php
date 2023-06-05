<?php
//Teste API Erasmo
// Faz a requisição à API de câmbio
$data = file_get_contents('https://api.exchangerate-api.com/v4/latest/USD');

// Decodifica o JSON retornado pela API
$result = json_decode($data, true);

// Obtém o valor do dólar atual
$dolarValue = $result['rates']['BRL'];

// Exibe o valor do dólar no console
echo "O valor atual do dólar é: " . $dolarValue ."\n";

?>
