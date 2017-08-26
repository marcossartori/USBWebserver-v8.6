<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="imagens/LOGO_novo_vazio.ico">

<title>Login</title>
<link href="../sistema/validacao/css_login/style.css" rel="stylesheet" type="text/css" />
<script src="../sistema/validacao/filtros/media/js/jquery.js" type="text/javascript"> </script>

</head>

<body>
<?php include('..\sistema\validacao\cima.php');



session_name('login_adm'); // abre a sesso de adm
session_start(); 

unset($_SESSION['nome']);		// apaga as variveis de sesso, não permitindo acesso para as pginas restritas 
unset($_SESSION['id']); 

header("Expires: 0");

header("Last-Modified: 0");

header("Cache-Control: no-cache, must-revalidate");

header("Pragma: no-cache");


 ?>
 <center>
 
<form action="login_adm.php" method="post" >


	<div class="box">
    	<p class="txt">Usuário:</p>
        <input type="text" name="login" class="txtbox" />
        <p class="txt">Senha:</p>
        <input type="password" name="senha" class="txtbox" />
        <input type="submit" id="envia" value="Entrar" class="button" />
    </div>
	
    

</body>
</html>
   
<?php include('..\sistema\validacao\baixo.php') ?>
