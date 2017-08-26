<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link href="../validacao/css_login/style.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="../validacao/filtros/media/js/jquery.js" type="text/javascript"> </script>
</head>

<body>
<?php
//include('..\..\sistema\validacao\testa_adm_master.php'); //Include de teste do administrador

	
 include('../../sistema/validacao/cima.php');
     include('../../sistema/documentos/dados.php');
?>


<?php include('../../sistema/documentos/menu.php'); ?> 

<?php 
echo '<center>';
echo '<table border="0" style=\"font-size:9;\">';  
 include('..\..\sistema\validacao\saudacao.php');
 echo "</table>"; ?>
 
 <form action="" method="post">
<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>
<tr>
<th id="th" scope="col" abbr="Dual 1.8"> CONTRATO:
	  
	 <?php $result = mysql_query("SELECT * FROM  contratos order by n_contrato ASC");

	echo "<select name=\"contrato\" onchang=\"window.location='teste2.php?ano='+this.value\">";
     echo "<option>"; echo "</option>";	
	while($row = mysql_fetch_array($result))
	{
	
	echo "<option >" . $row['n_contrato'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>

	 <th id="th" scope="col" abbr="Dual 1.8"> ANO:
	  
	 <?php $result = mysql_query("SELECT ano FROM  anos order by ano ASC ");

	echo "<select name=\"ano\" onchang=\"window.location='teste2.php?ano='+this.value\">";
    echo "<option>"; echo "</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option >" . $row['ano'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>

<th id="th" scope="col" abbr="Dual 1.8"> MES:
	  
	 <?php $result = mysql_query("SELECT * FROM  meses ");

	echo "<select name=\"mes\" onchang=\"window.location='teste2.php?ano='+this.value\">";
    echo "<option>"; echo "</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option >" . $row['mes'] . "</option>";
	}
	echo "</select>";
	  ?>
      </th>
            <th id="th" scope="col" abbr="Dual 1.8" > <label>EMPRESA: <select name="empresa" class="hover">
			  <option></option>
			  <?php
						$sql = "SELECT empresa FROM tab_empresa  order by empresa ASC ";
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
	  </select></label> </th> 
           <th id="th" scope="col" abbr="Dual 1.8"> DOCUMENTO:
	  
	 <?php $result = mysql_query("SELECT nome FROM  tipodoc order by nome ASC");

	echo "<select name=\"tipo\" onchang=\"window.location='teste2.php?ano='+this.value\">";
     echo "<option>"; echo "</option>";	

	while($row = mysql_fetch_array($result))
	{
	
	echo "<option >" . $row['nome'] . "</option>";
	}
	echo "</select>";
	  ?>
	   </th>
            
          <th id="th" scope="col" abbr="Dual 1.8">  <label>STATUS:  <select name="status" id="mes">
			  <option ></option>
			  <option >Completo</option>
			  <option >Incompleto</option>
			</select></label></th>


	 <th id="th" scope="col" abbr="Dual 1.8"><label><input type="submit" name="ok" value="Ok" /></label> </th>
    </tr>
    </table>
    </form>
    <?php

echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
  echo'<caption>&nbsp;</caption>';
	echo'<tr>';
	echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'CONTRATO';  echo'</th>';
	 echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'ANO';  echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8">'; echo 'MES'; echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'DOCUMENTO'; echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'EMPRESA'; echo'</th>';
	  echo' <th class="tooltip" id="th" scope="col" abbr="Dual 1.8">'; echo 'STATUS'; echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'ANEXO'; echo'</th>';
	 echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo 'EDITAR'; echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8" >'; echo 'ECLUIR'; echo'</th>';
	echo '</tr>';
	
		$and = Array();

		$ano = getPost('ano');
		$mes = getPost('mes');
		$status =getPost('status');
		$empresa =getPost('empresa');
		$ncontrato =getPost('contrato');
		$tipodoc =getPost('tipo');
	

		if( $ano ){ $and[] = " `ano` = '{$ano}'"; }
		if( $mes ){ $and[] = " `mes` = '{$mes}'"; }
		if( $status ){ $and[] = " status = '{$status}'"; }
		if( $empresa ){ $and[] = " empresa = '{$empresa}'"; }
		if( $ncontrato ){ $and[] = " n_contrato = '{$ncontrato}'"; }
		if( $tipodoc ){ $and[] = " nome = '{$tipodoc}'"; }
		


		$sql = "SELECT * from documentos where ativo='y' ";
		if( sizeof( $and ) )
		  $sql .= 'and'.implode( ' and ',$and );
            $page= mysql_query($sql);
			while( $linha=mysql_fetch_array($page))
			
			
			{
			    $codigo= $linha['codarq'];
				$id= $linha['codano'];
				$mes= $linha['mes'];
				$obs= $linha['obs'];
				$contrato= $linha['n_contrato'];
				$ano= $linha['ano'];
				$tipo= $linha['nome'];
				$empresa= $linha['empresa'];
				$name= $linha['name'];
				$status=$linha['status'];
		
				
				
  
  echo '<tr>';
     echo '<td id="td">'; echo $contrato; echo'</td>';
     echo '<td id="td">'; echo $ano; echo'</td>';
     echo '<td id="td">'; echo $mes; echo'</td>';
     echo '<td id="td">'; echo $tipo; echo'</td>';
    echo '<td id="td">';echo $empresa; echo'</td>';
    echo '<td id="td">'; 	if ($status== "Incompleto"){
				
				 $status= ' <p class="formata">';
echo '<a href="#" class="dcontexto"> <IMG SRC="../../sistema/documentos/images/negado.png" WIDTH="20" HEIGHT="20" alt="NOME"/>'; echo'<span>';
 echo '<strong>'; echo $obs;  echo'</strong>'; echo'</p> ';
				
				} else{ echo $status= '<img  class="dcontexto" src="../../sistema/documentos/images/certo.png" WIDTH="20" HEIGHT="20"/>';}	 echo'
	
	
	
	
	</td>';

      echo '<td id="td">';
	  ' <p class="formata">';
	  echo "<a   href='http:../../sistema/documentos/anexo_documentos.php?codarq=".$codigo."' class='dcontexto')'>"; echo '<IMG SRC="../../sistema/documentos/images/clips-29.png" WIDTH="20" HEIGHT="20" border="0" alt="Anexar documentos"/>';
	  echo'<span>';
      echo '<strong>'; echo $name;  echo'</strong>'; echo'</p> ';
	  echo'</td>';
	
      echo '<td id="td">'; echo "<a   href='http:../../sistema/documentos/editar_anexo.php?codarq=".$codigo."')'>"; echo '<IMG SRC="../../sistema/documentos/images/editar.png" WIDTH="20" HEIGHT="20"  border="0" />'; echo'</td>';
      echo '<td id="td">'; echo "<a  href='http:../../sistema/documentos/delete_arquivo.php?codarq=".$codigo."')'>"; echo '<IMG SRC="../../sistema/documentos/images/lixeira.png" WIDTH="20" HEIGHT="20"  border="0"/>'; echo'</td>';
      echo"</tr>";
	  
	}
	  echo'<tr>';
	 echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo '';  echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	 echo' <th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	  echo'<th id="th" scope="col" abbr="Dual 1.8">'; echo ''; echo'</th>';
	echo '</tr>';
	//a cargo do leitor melhorar o filtro anti injection
	function filter( $str ){
		return addslashes( $str );
	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	}
	 echo "</table>";
?>
</body>
</html>