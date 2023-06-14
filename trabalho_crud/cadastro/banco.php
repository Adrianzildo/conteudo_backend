<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "eventos";
$port = 3306;

//cria uma conexão com o mysql
$banco = new mysqli($host, 
                      $user, 
                      $password,
                      $database,
                      $port);

//verifica se existe erros na conexão                      
if($banco->connect_error){
    echo $banco->connect_error;
    die();
}