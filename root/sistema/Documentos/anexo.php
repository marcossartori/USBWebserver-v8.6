<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="../imagens/LOGO_novo_vazio.ico">

<title>Login</title>
<link href="../validacao/css_login/style.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" type="text/css"href="../../sistema/validacao/mensagens.css" />



<script src="../validacao/filtros/media/js/jquery.js" type="text/javascript"> </script>

<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/anexo.js"></script>

</head>
  <script type="text/javascript">
    window.onload = function() {
		document.getElementById("obs").disabled=true;
        var eSelect = document.getElementById('status');
        var optOtherReason = document.getElementById('obs');
        eSelect.onchange = function() {
            if(eSelect.selectedIndex === 2) {
                optOtherReason.disabled=false;
            } else {
                optOtherReason.disabled=true;
            }
        }
    }
  </script>


<body >
<?php include('../../sistema/validacao/cima.php');
     include "dados.php";
?>


<?php include('../../sistema/documentos/menu.php'); ?>

<?php 

echo '<center>';
 echo '<table  border="0" style=\"font-size:9;\">';  
 include('..\..\sistema\validacao\saudacao.php');
 echo "</table>"; ?>




 <form id="form1" name="form1" method="post" action="processach.php" enctype="multipart/form-data">

<?php
include"dados.php";
echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
 echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "contrato"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; 	$result = mysql_query("SELECT * FROM CONTRATOS	 ");

	echo "<select name=\"contrato\" onchang=\"window.location='adventure.php?categoria='+this.value\">";
     echo "<option value=''>Selecione</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" .  $row['id'] . "'>" . $row['n_contrato'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "ANO"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; 	$result = mysql_query("SELECT * FROM anos ");

	echo "<select name=\"ano\" onchang=\"window.location='adventure.php?categoria='+this.value\">";
    echo "<option value=''>Selecione</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codano'] . "'>" . $row['ano'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "MES"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; 	$result = mysql_query("SELECT * FROM meses ");

	echo "<select name=\"mes\" onchang=\"window.location='adventure.php?categoria='+this.value\">";
	echo "<option value=''>Selecione</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codmes'] . "'>" . $row['mes'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
   echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "STATUS"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo'<select name="status" id="status"  >
			  <option value="" >Selecione</option>
			  <option value="completo" >completo</option>
			  <option value="Incompleto" >Incompleto</option>'; echo"</td>";
  echo"</tr>";
  echo"<tr>";
	  echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo 'OBSERVAÇÃO'; echo"</td>";
     echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo '<textarea name="incompleto"  id="obs" cols="50" rows="1"></textarea>'; echo"</td>";
     echo"</tr>";
   echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "EMPRESA"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; 	$result = mysql_query("SELECT * FROM tab_empresa WHERE empresa  <> 'null'  ORDER BY empresa ASC");

	echo "<select name=\"empresa\" onchang=\"window.location='adventure.php?categoria='+this.value\">";
     echo "<option value=''>Selecione</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['id'] . "'>" . $row['empresa'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
   echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "TIPO"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; 	$result = mysql_query("SELECT * FROM tipodoc WHERE nome  <> 'null'  ORDER BY nome ASC");

	echo "<select name=\"tipo\" onchang=\"window.location='adventure.php?categoria='+this.value\">";
    echo "<option value=''>Selecione</option>";
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['iddoc'] . "'>" . $row['nome'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  
    
  echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo "ANEXO"; echo"</td>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo '	<input name="fileanexo" type="file" id="filranexo" />';
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<th id='th' scope='col' abbr='Dual 1.8'>"; echo '<input name="enviar"  value="Enviar" type="submit" />'; echo"</td>";
	 
    echo "<th id='th' scope='col' abbr='Dual 1.8'>";
 echo"</td>";
  echo"</tr>";
 echo "</table>";
 
 ?>

 </form>
 

    

</body>
</html>
   
<?php include('../../sistema/validacao/baixo.php') ?>
