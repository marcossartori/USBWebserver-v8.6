<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Tables</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="styless.css" rel="stylesheet" type="text/css" />
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Ajax Loader</title>
	
	
	
	
</head>
<body>

<p>&nbsp;
</p>

<p>
 <?php include "dados.php"; ?> 
  <center>
  <div id="mytabe">
  
  <div id="header" style="overflow:auto" >
  
</p>
     
   
        
        <form action="" method="post">
<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>
<tr>
<th scope="col" abbr="Dual 1.8"> CONTRATO:
	  
	 <?php $result = mysql_query("SELECT * FROM  contratos");

	echo "<select name=\"contrato\" onchang=\"window.location='teste2.php?ano='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
	echo "<option>"; echo "</option>";	
	echo "<option >" . $row['n_contrato'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>

	 <th scope="col" abbr="Dual 1.8"> ANO:
	  
	 <?php $result = mysql_query("SELECT * FROM  anos ");

	echo "<select name=\"ano\" onchang=\"window.location='teste2.php?ano='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
	echo "<option>"; echo "</option>";	
	echo "<option >" . $row['ano'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>

<th scope="col" abbr="Dual 1.8"> MES:
	  
	 <?php $result = mysql_query("SELECT * FROM  meses ");

	echo "<select name=\"mes\" onchang=\"window.location='teste2.php?ano='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
	echo "<option>"; echo "</option>";	
	echo "<option >" . $row['mes'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>
            <th> <label>EMPRESA: <select name="empresa" class="hover">
			  <option></option>
			  <?php
						$sql = "SELECT empresa FROM tab_empresa ";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							echo $nome= $reg["empresa"];
							echo $idmes = $reg["empresa"];
					?>
				   <option value= "<?php print("$idmes");?>"><?php print("$nome");?>
			      </option>
					<?php
					}
					?>
	  </select></label></th> 
            <th scope="col" abbr="Dual 1.8"> DOCUMENTO:
	  
	 <?php $result = mysql_query("SELECT * FROM  tipodoc");

	echo "<select name=\"tipo\" onchang=\"window.location='teste2.php?ano='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
	echo "<option>"; echo "</option>";	
	echo "<option >" . $row['nome'] . "</option>";
	}
	echo "</select>";
	  ?>
	   </th>
            
          <th>  <label>STATUS:  <select name="status" id="mes">
			  <option ></option>
			  <option >Completo</option>
			  <option >Incompleto</option>
			</select></label></th>


	<th> <label><input type="submit" name="ok" value="Ok" /></label> </th>
    </tr>
    </table>
</form>
        
<?php

echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
  echo'<caption>&nbsp;</caption>';
	echo'<tr>';
	echo' <th scope="col" abbr="Dual 1.8">'; echo 'CONTRATO';  echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANO';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'MES'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'DOCUMENTO'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'EMPRESA'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'STATUS'; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo 'ANEXO'; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo 'EDITAR'; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo 'ECLUIR'; echo'</th>';
	echo '</tr>';
	
		$where = Array();

		$ano = getPost('ano');
		$mes = getPost('mes');
		$status =getPost('status');
		$empresa =getPost('empresa');
		$ncontrato =getPost('contrato');
		$tipodoc =getPost('tipo');

		if( $ano ){ $where[] = " `ano` = '{$ano}'"; }
		if( $mes ){ $where[] = " `mes` = '{$mes}'"; }
		if( $status ){ $where[] = " status = '{$status}'"; }
		if( $empresa ){ $where[] = " empresa = '{$empresa}'"; }
		if( $ncontrato ){ $where[] = " n_contrato = '{$ncontrato}'"; }
		if( $tipodoc ){ $where[] = " nome = '{$tipodoc}'"; }


		$sql = "SELECT * from documentos ";
		if( sizeof( $where ) )
		 $sql .= ' WHERE '.implode( ' and ',$where );
            $page= mysql_query($sql);
			while( $linha=mysql_fetch_array($page))
			
			
			{
			
				$id= $linha['codano'];
				$mes= $linha['mes'];
				$contrato= $linha['n_contrato'];
				$ano= $linha['ano'];
				$tipo= $linha['nome'];
				$empresa= $linha['empresa'];
				$name= $linha['name'];
				$status=$linha['status'];
			if ($status== "incompleto"){
				
				$status= '<IMG SRC="../../sistema/documentos/images/negado.png" WIDTH="20" HEIGHT="20"/>';
				
				} else{$status= '<img src="../../sistema/documentos/images/certo.png" WIDTH="20" HEIGHT="20"/>';}	
				
				
  
  echo '<tr>';
     echo '<td>'; echo $contrato; echo'</td>';
     echo '<td>'; echo $ano; echo'</td>';
     echo '<td>'; echo $mes; echo'</td>';
     echo '<td>'; echo $tipo; echo'</td>';
    echo '<td>';echo $empresa; echo'</td>';
    echo '<td>'; echo $status; echo'</td>';
    echo '<td>';  echo "<a alt='texto';  href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/clips-29.png" WIDTH="20" HEIGHT="20" border="0" alt="Anexar documentos"/>'; echo'</td>';
    echo '<td>'; echo "<a   href='http:../../sistema/validacao/anexo_documentos.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/editar.png" WIDTH="20" HEIGHT="20"  border="0" />'; echo'</td>';
     echo '<td>'; echo "<a  href='http:../../jquery-ajax/ajax/delete_arquivo.php?codano=".$id."')'>"; echo '<IMG SRC="../../sistema/documentos/images/lixeira.png" WIDTH="20" HEIGHT="20"  border="0"/>'; echo'</td>';
  echo"</tr>";
	}
	  echo'<tr>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo '';  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	 echo' <th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	echo '</tr>';
	//a cargo do leitor melhorar o filtro anti injection
	function filter( $str ){
		return addslashes( $str );
	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	}
?>
<style type="text/css">
label { display: block; }
</style>


 
</body>
</html>
