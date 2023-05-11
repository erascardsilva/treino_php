<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $texto = $_POST["texto"];

    header("Content-Type: text/html; charset=UTF-8");


     echo " <h3>Obrigado ". $nome . "\n" . " seu e-mail ". $email . "</h3>\n" ,
    "<h3>Será guardado e assim que pudermos resolveremos seu problemas </h3>";    ;



    exit();
    };
?>
