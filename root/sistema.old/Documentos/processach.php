

<?php
include('C:\wamp\www\sistema\validacao\dbconexao.php');


session_name('portaria');							// abre uma sessדo de login
 session_start();


$_SESSION["ano"] = $_POST['ano'];
$_SESSION["mes"]=$_POST['mes'];
$_SESSION["empresa"]=$_POST['empresa'];
$_SESSION["tipo"]=$_POST['tipo'];
$_SESSION["status"]=$_POST['status'];
$_SESSION["contrato"]=$_POST['contrato'];
$_SESSION["incompleto"]=$_POST['incompleto'];


//$maxsize=$_POST['MAX_FILE_SIZE'];		
$size=$_FILES['fileanexo']['size'];
$imgdetails= getimagesize($_FILES['fileanexo']['tmp_name']);
$mime_type = $imgdetails['mime']; 
$filename=@$_FILES['fileanexo']['name'];	
$imgData =addslashes (file_get_contents($_FILES['fileanexo']['tmp_name']));




//echo $_SESSION["login"];
 $sql = "INSERT INTO arquivos SET ano= '{$_SESSION['ano']}', contrato = '{$_SESSION['contrato']}', mes = '{$_SESSION['mes']}', status='{$_SESSION['status']}', codempresa = '{$_SESSION['empresa']}', tipo_arq= '{$_SESSION['tipo']}',
name='$filename', anexo='$imgData',type='$mime_type', size='$size', obs='{$_SESSION['incompleto']}'";
mysql_query($sql) ;

		 header('Location:../../sistema/documentos/pesquisa.php');
//		



?>


 