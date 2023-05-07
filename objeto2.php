<?php
    class Pessoa {
        public $nome,
               $idade,
               $cor;

        function  __construct($nome,$idade,$cor){
                $this->nome = $nome;
                $this->idade = $idade;
                $this->cor = $cor;
            echo "Estou criado meu nome é ".$this->nome ." tenho " .$this->idade . " anos e nasci em ". 2023 - $this->idade." sou da cor ". $this->cor;
                
        }
    }     
    $um = "Erasmo Cardoso";
    $dois = 47;
    $tres = "pardo";
    
    $pessoa1 =  new Pessoa ($um,$dois,$tres);   

      
