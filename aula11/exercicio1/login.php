<h2>Login usuário e senha</h2>

<?php

if($_GET['usuario'] == "admin" &&  $_GET['senha'] == 123){
    echo "Usuário logado";
}else{
    echo "Usuário ou senha inválidos!";
}

?>