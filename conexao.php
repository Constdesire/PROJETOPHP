<?php

try

{

    $HOST = "localhost";
    $BANCO = "esp32-mysql";
    $USUARIO ="root";
    $SENHA = "";
    
    $PDO = new PDO("mysql:host=". $HOST . ";dbname=" . $BANCO . ";charset=uft8" , $USUARIO, $SENHA);
}catch(PDOExeption $erro){
    echo "Erro de conexão: " . $erro->getMessage();
}
?>
