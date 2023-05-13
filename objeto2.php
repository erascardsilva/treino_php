<?php

// Cria objeto pessoa nome idade e cor 
//construtor
class Pessoa
{
    public $nome, $idade, $cor, $ano;

    function __construct($nome, $idade, $cor, $ano)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cor = $cor;
        $this->ano = $ano;
        echo "Oi, meu nome é " . $this->nome . ".\nTenho " . $this->idade . " anos e nasci em " . $this->ano . ".\nSou da cor " . $this->cor . ".";
    }
}

// limpa tela
function limpa()
{
    system("clear");
}

limpa();


// menu
echo "Crie uma nova pessoa:\n";
$um = readline("Qual o nome da pessoa: ");
$dois = readline("Qual é a idade: ");
$mesNascimento = readline("Qual é o mês de nascimento (em número): ");
$tres = readline("Qual a cor da pele: ");

// captura ano e mês atual
$anoAtual = date("Y");
$mesAtual = date("m");

//condição mês
$ano = $anoAtual - $dois;
if ($mesAtual < $mesNascimento) {
    $ano--;
}

limpa();

//cria objeto pessoa
$pessoa1 = new Pessoa($um, $dois, $tres, $ano);
?>
