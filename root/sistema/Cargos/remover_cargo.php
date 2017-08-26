<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Remover cargos</title>


<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/>

</head>

<body link="##063" vlink="##063" alink="##063">

<?php

include('..\..\sistema\validacao\dbconexao.php');

include('..\..\sistema\validacao\testa_adm.php');

 $id_cargo = (int) $_GET['id_cargo'];
  
 $deleta_adm = "DELETE FROM tab_cargo WHERE id = $id_cargo";
  
 if(!mysql_query($deleta_adm,$conexao)){
	 	 
 	echo "<script type=\"text/javascript\">
           alert('Erro na excluso do Cargo');
           history.go(-1);
          </script>";	
    exit();	
	
 }
 
echo "<script type=\"text/javascript\">

           history.go(-1);
          </script>";	
    exit();	
 
?>