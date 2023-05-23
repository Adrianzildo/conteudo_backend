<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verefica se o nome,login e senha foram enviado
   //do formulário de cadastro
   if(isset($_POST['nome']) && isset($_POST['login']) &&
   isset($_POST['senha'])){
   
   //faz o upload do foto do usuário
   require_once "faz_upload.php";
   
   $nome = $_POST['nome'];
   $login = $_POST['login'];
   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`, foto) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $login, $senha, $nome_foto);

   //executa o comando
   $comando->execute();
   }

   //volta para o formulário
   header("Location: index.php");

   







