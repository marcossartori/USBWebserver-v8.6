

<?php
include('..\validacao\dbconexao.php');


session_name('portaria');							// abre uma sessדo de login
 session_start();


$_SESSION["login"] = $_POST['Login'];
$_SESSION["senha"]=$_POST['Senha'];
$_SESSION["nome_adm"]=$_POST['Nome_Adm'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["master"]=$_POST['Master'];
$_SESSION["acesso"]=$_POST['Acesso'];
$_SESSION["acesso2"]=$_POST['Acesso2'];
$_SESSION["acesso3"]=$_POST['Acesso3'];
$_SESSION["acesso4"]=$_POST['Acesso4'];
$_SESSION["fiscal"]= @$_POST['fiscal'];
$n_port= $_POST['port'];
$maxsize=$_POST['MAX_FILE_SIZE'];		
$size=$_FILES['file']['size'];
$imgdetails= getimagesize($_FILES['file']['tmp_name']);
$mime_type = $imgdetails['mime']; 
$filename=@$_FILES['file']['name'];	
$imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));


if (!isset($_SESSION["fiscal"])){
	
	$_SESSION["fiscal"]="nao";
	
	}

//echo $_SESSION["login"];
 $sql = "INSERT INTO admin SET Login= '{$_SESSION['login']}',Senha = '{$_SESSION['senha']}', Nome = '{$_SESSION['nome_adm']}', email= '{$_SESSION['email']}',
 Master='{$_SESSION['master']}', Acesso='{$_SESSION['acesso']}', Acesso2='{$_SESSION['acesso2']}', Acesso3='{$_SESSION['acesso3']}', Acesso4='{$_SESSION['acesso4']}' , Fiscal='{$_SESSION['fiscal']}',n_port= '$n_port',name_port='$filename', portaria='$imgData',type_port='$mime_type', size_port='$size'";
mysql_query($sql) or die(mysql_error());

		header('Location:Administrador.php?pagina=1');
//		



?>
 