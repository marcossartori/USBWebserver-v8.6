<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Tables</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Ajax Loader</title>
	
	
	
	
</head>
<body>
 <center>
<div id="mytabe">

	        <?php
	   include 'dados.php';
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
							and arquivos.mes = meses.codmes  order by 'ASC'";}
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

  echo'<tr>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo '';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	echo '</tr>';
 echo '</form>';?>
	</div>
		<div class="loading"></div>
	<div id="body">
		<div class="header"></div>
		<div class="body">
			<div id="content">
			<!-- Ajax Content -->
			</div>
		</div>
		<div class="footer"></div>
      
	</div>
</div>

</div>

  
  
  

</center>
 </center>
</body>
</html>