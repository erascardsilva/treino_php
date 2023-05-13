<?php 
    /*   Conexão dados Erasmo
     Conecta ao banco de dados 
     Expecifica caminho do arquivo sql */
    
     $dadof = './dados/dados.db';
    
    //Condição de existencia se não cria se sim conecta
    if(!file_exists($dadof)){
    try {
        $dados = new PDO("sqlite:$dadof");
        $dados->exec("CREATE TABLE IF NOT EXISTS dados (id INTEGER PRIMARY KEY, nome TEXT, telefone INT, email TEXT)");
        $dados->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Banco criado";
    }catch (PDOException $erro){
        die("Erro ao criar arquivo : ". $erro->getMessage());

    }}else{
        try {
            $dados = new PDO("sqlite:$dadof");
            $dados->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado ao BANCO !!!";
        }catch(PDOException $erro){
            die("Erro ao conectar ao banco de dados !!" . $erro->getMessage());  

            
        }}
