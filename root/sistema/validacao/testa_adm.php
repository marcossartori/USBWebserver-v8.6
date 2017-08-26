<?php

session_name('login_adm'); //abre a sessão do login
session_start(); 

if( (!isset($_SESSION['id'])) AND (!isset($_SESSION['nome'])) ) //testa se não existem as Sessões (Elas só existirão se o login for feito com sucesso)
header("Location: tela_login.php");  							//caso não existam, o usuário é enviado para a página de Login.

?>