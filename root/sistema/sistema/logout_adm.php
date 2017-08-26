<?php

session_name('login_adm'); // abre a sessão de adm
session_start(); 

unset($_SESSION['nome']);		// apaga as variáveis de sessão, não permitindo acesso para as páginas restritas 
unset($_SESSION['id']); 

header("Location: http://localhost/sistema/login.php"); // volta para a tela de login

?>