<?php

session_name('login_adm'); // abre a sess�o de adm
session_start(); 

unset($_SESSION['nome']);		// apaga as vari�veis de sess�o, n�o permitindo acesso para as p�ginas restritas 
unset($_SESSION['id']); 

header("Location: http://localhost/sistema/login.php"); // volta para a tela de login

?>