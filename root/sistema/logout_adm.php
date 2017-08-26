<?php

session_name('login_adm'); // abre a sesso de adm
session_start(); 

unset($_SESSION['nome']);		// apaga as variveis de sesso, não permitindo acesso para as pginas restritas 
unset($_SESSION['id']); 
unset( $_SESSION["Fiscal"]);
unset($_SESSION["Acesso"]);
unset( $_SESSION["Acesso2"]);
unset( $_SESSION["Acesso3"]);
unset( $_SESSION["Acesso4"]);
unset( $_SESSION["Master"]);
unset( $_SESSION["email"]);
unset($_SESSION["n_port"]);
unset($_SESSION["portaria"]);


header("Expires: 0");

header("Last-Modified: 0");

header("Cache-Control: no-cache, must-revalidate");

header("Pragma: no-cache");


header("Location: ../../sistema/tela_login.php"); // volta para a tela de login

?>