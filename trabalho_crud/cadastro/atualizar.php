<?php
   
   //importa o arquivo de conexão
   require_once "banco.php";
   
   $id = $_POST['idevento'];
   $nome = $_POST['nome'];
   $data = $_POST['data'];
   $local = $_POST['local'];
   $descricao = $_POST['descricao'];
  

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `evento` SET `nome`=?, `data`=?, `local`=?, `descricao`=? WHERE  `idprimario`=?;";
 
   //prepara o comando para ser executado no mysql
   $comando = $banco->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $data, $local, $descricao,   $id );

  $comando->execute();

  header("Location: lista_eventos.php");

  ?>


   







