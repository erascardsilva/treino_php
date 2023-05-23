<?php
   //php 7.3.0
  
  // Teste e treino em PHP

  class  Pessoa{
   public  $nome , $idade;
    
    
    
    function __construct ($nome,$idade){
      
    $this->nome = $nome;
    $this->idade = $idade;
    }
    function chama(){
      $idaint = intval($this->idade);    
      echo "Meu nome é ".$this->nome . " tenho ".$this->idade . " nasci em " . (2023 - $idaint) ;
    }
  }

    
echo "Digite seu nome e depois a idade : \n";
$nome1 = readline("Digite nome ");
$age = readline("Digite idade ");  
  
 
  $pess = new Pessoa ($nome1,$age);
  $pess->chama();
  
 ?>