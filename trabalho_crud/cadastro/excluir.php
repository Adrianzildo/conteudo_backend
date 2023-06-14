<?php
   require_once "banco.php";

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `evento` WHERE  `idprimario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $banco->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //volta para a listagem de usuários
   header("Location: lista_eventos.php");
