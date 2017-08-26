<?php

 include("dados.php");
 echo $pk=$_POST['pk'];
 echo $ano=$_POST['ano'];
  echo  $mes=$_POST['mes'];
   echo $empresa=$_POST['empresa'];
   echo $contrato=$_POST['contrato'];
 echo  $documento=$_POST['documento'];
 echo $status=$_POST['status'];
  $show= $_POST['show'];
   $obs= $_POST['incompleto'];
    $size=$_FILES['fileanexo']['size'];
   $imgdetails= getimagesize($_FILES['fileanexo']['tmp_name']);
   $mime_type = $imgdetails['mime']; 
  $filename=$_FILES['fileanexo']['name'];	
  $imgData =addslashes (file_get_contents($_FILES['fileanexo']['tmp_name']));
  

$sql = "update arquivos SET ano = '$ano', obs = '$obs', contrato = '$contrato', mes = '$mes', status='$status', codempresa = '$empresa', tipo_arq= '$documento' WHERE codarq = '$pk'";
mysql_query($sql) or die(mysql_error());
	 


	if(isset ($_POST['show'] )){
	
	$sql = "UPDATE arquivos SET name='$filename', anexo='$imgData',type='$mime_type', size='$size'
WHERE codarq = '$pk'"; mysql_query($sql);}

	
	

		header('Location:../../sistema/documentos/pesquisa.php');
  
?>
	


 