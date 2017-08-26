<?php

session_name('login_adm'); //abre a sessão do login
session_start(); 

if( (!isset($_SESSION['id'])) AND (!isset($_SESSION['nome'])) ) //testa se não existem as Sessões (Elas só existirão se o login for feito com sucesso)
header("Location: login.php");  							//caso não existam, o usuário é enviado para a página de Login.

$id = $_SESSION['id'];

include("dbconexao.php");

$consulta_master = "SELECT * FROM admin WHERE Master = 's' AND Id = $id ";
$resultado_master = mysql_query($consulta_master,$conexao);
$master = mysql_fetch_array($resultado_master);

if ( !isset ( $master['Id'] )) {
 	echo "<script type=\"text/javascript\">
           alert('Acesso negado consulte o Administrador do Sistema!!!');
           history.go(-1);
          </script>";	
    exit();	
}

?>