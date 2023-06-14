<?php
   
   //importa o arquivo de conexão
   require_once "banco.php";
   
   $nome = $_POST['nome'];
   $data = $_POST['data'];
   $local = $_POST['local'];
   $descricao = $_POST['descricao'];
  

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `eventos` (`nome`, `data`, `local`, `descricao` ) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $banco->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $data, $local, $descricao);

   //executa o comando
   $comando->execute();


   







