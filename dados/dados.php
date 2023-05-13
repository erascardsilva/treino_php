<?php 
    // Conecta ao banco de dados 

    $dadof = 'dados.db';

    if(!file_exists($dadof)){
    try {
        $dados = new PDO("sqlite:$dadof");
        $dados->exec("CREATE TABLE IF NOT EXISTS exemplo (id INTEGER PRIMARY KEY, nome TEXT)");
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


?>