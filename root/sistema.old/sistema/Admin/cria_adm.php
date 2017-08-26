<?php

$login = $_POST['Login'];
$senha = $_POST['Senha'];
$nome_adm = $_POST['Nome_Adm'];
$email = $_POST['email'];
$master = $_POST['Master'];

$Acesso = $_POST['Acesso'];
$Acesso2 = $_POST['Acesso2'];
$Acesso3 = $_POST['Acesso3'];
$Acesso4 = $_POST['Acesso4'];

 $cadastro_adm = "INSERT INTO admin SET email='$email',Acesso = '$Acesso', Acesso2 = '$Acesso2', Acesso3 = '$Acesso3', Acesso4 = '$Acesso4', Nome = '$nome_adm', Login = '$login ', Senha = '$senha', Master = '$master'";

include('C:\wamp\www\sistema\validacao\dbconexao.php');

mysql_query($cadastro_adm,$conexao);

header("Location: http://localhost/sistema/Admin/Administrador.php?pagina=1");

?>