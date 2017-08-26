<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Tables</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include 'dados.php';
switch($_GET['page'])  {
	case '#page1' : $page = '<b>Introduction</b><ul><li>History support, solved ajax Back Button limitation with jquery.history.js</li><li>Bookmark support. Using hash value to identify a specific page and load it</li><li>It\'s AJAX/AHAH! It\'s cool and cutting edge!</li><li>This tutorial can be used as a kickstart for your AJAX based web development project. Small ajax based content like autocomplete and check username are basically using the same concept.</li></ul><br/>'; break;

	case '#page2' :
	echo' <form id="form1" name="form1" method="post" action="processach.php" enctype="multipart/form-data">';
	include "anexo.php";
 echo '</form>';

	
	break;

	case '#page3' : $page = '<b>About</b><br/>This is a simple AJAX-Based website created by Kevin from Queness.com. General speaking, we shouldn\'t call this as AJAX (Asynchronous Javascript and XML) because there is no XML data. Instead of AJAX, we should call it as AHAH.<br/><br/><b>Asychronous HTML and HTTP aka AHAH</b><br/>AHAH is a technique for dynamically updating web pages using JavaScript, involving usage of XMLHTTPRequest to retrieve (X)HTML fragments which are then inserted directly into the web page. Inspite of retreiving XML, AHAH stands for retreiving (X)HTML. It\'s a subset of AJAX.'; break;

	case '#page' : 
	echo' <form id="form1" name="form1" method="post" action="teste2.php" enctype="multipart/form-data">';
	  echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
  echo'<caption>&nbsp;</caption>';
	echo'<tr>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANO';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'MES'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'DOCUMENTO'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'EMPRESA'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'STATUS'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANEXO'; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'EDITAR'; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo 'ECLUIR'; echo'</th>';
	echo '</tr>';
	
	if (isset($_POST['enviar'])) {
		echo   $teste=$_POST['ano'];
		 echo $teste1=$_POST['mes'];
		  echo $status=$_POST['status'];
	
		   $sql = "SELECT DISTINCT anos.ano, anos.codano, meses.mes, arquivos.`status`,arquivos.`name`, tipodoc.nome, tab_empresa.empresa
						  FROM arquivos, tab_empresa, tipodoc,meses,anos
						  WHERE tab_empresa.id= arquivos.codempresa
							 and arquivos.tipo_arq = tipodoc.iddoc 
							 and arquivos.ano = anos.codano
							and arquivos.mes = meses.codmes
						and anos.codano= '$teste'
							and meses.codmes= '$teste1'
							 ";
							
						  $page = mysql_query($sql);
						  }
						  
							
	
	

			else{  $sql = "SELECT anos.ano, anos.codano, meses.mes, arquivos.`status`,arquivos.`name`, tipodoc.nome, tab_empresa.empresa
						  FROM arquivos, tab_empresa, tipodoc,meses,anos
						  WHERE tab_empresa.id= arquivos.codempresa
							 and arquivos.tipo_arq = tipodoc.iddoc 
							 and arquivos.ano = anos.codano
							and arquivos.mes = meses.codmes ";}
							$page = mysql_query($sql);
							while( $linha=mysql_fetch_array($page))
			
			
			{
				$id= $linha['codano'];
				$mes= $linha['mes'];
				$ano= $linha['ano'];
				$tipo= $linha['nome'];
				$empresa= $linha['empresa'];
				$name= $linha['name'];
				$status=$linha['status'];
			if ($status== "incompleto"){
				
				$status= '<IMG SRC="../../sistema/documentos/images/negado.png" WIDTH="20" HEIGHT="20"/>';
				
				} else{$status= '<img src="../../sistema/documentos/images/certo.png" WIDTH="20" HEIGHT="20"/>';}	
				
				
  
  echo '<tr>';
  
     echo '<td>'; echo $ano; echo'</td>';
     echo '<td>'; echo $mes; echo'</td>';
     echo '<td>'; echo $tipo; echo'</td>';
    echo '<td>';echo $empresa; echo'</td>';
    echo '<td>'; echo $status; echo'</td>';
    echo '<td>';  echo "<a alt='texto';  href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/clips-29.png" WIDTH="20" HEIGHT="20" border="0" alt="Anexar documentos"/>'; echo'</td>';
    echo '<td>'; echo "<a   href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/editar.png" WIDTH="20" HEIGHT="20"  border="0" />'; echo'</td>';
     echo '<td>'; echo "<a  href='http:../../jquery-ajax/ajax/delete_arquivo.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/lixeira.png" WIDTH="20" HEIGHT="20"  border="0"/>'; echo'</td>';
  echo"</tr>";}

  
 echo '</form>';
	 break;

}

//echo $page;
?>

</body>
</html>