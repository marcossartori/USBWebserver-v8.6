<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Tables</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<script>
function show (){
	
	var combo= document.getElementById('status').options ="incompleto";
	 if (combo==true){
		 document.getElementById('incompleto').disabled= false;
		 	 
		 }
	  else{document.getElementById('incompleto').disabled= true; }
	}

</script>
</head>

<body>
 <form id="form1" name="form1" method="post" action="processach.php" enctype="multipart/form-data">
<fieldset spry:setrownumber=""><legend></legend>
<?php
include"dados.php";
echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';
 echo"<tr>";
    echo "<td>"; echo "contrato"; echo"</td>";
    echo "<td>"; 	$result = mysql_query("SELECT * FROM CONTRATOS	 ");

	echo "<select name=\"contrato\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" .  $row['id'] . "'>" . $row['n_contrato'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<td>"; echo "ANO"; echo"</td>";
    echo "<td>"; 	$result = mysql_query("SELECT * FROM anos ");

	echo "<select name=\"ano\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codano'] . "'>" . $row['ano'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<td>"; echo "MES"; echo"</td>";
    echo "<td>"; 	$result = mysql_query("SELECT * FROM meses ");

	echo "<select name=\"mes\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codmes'] . "'>" . $row['mes'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
   echo"<tr>";
    echo "<td>"; echo "STATUS"; echo"</td>";
    echo "<td>"; echo'<select name="status" id="status" onchange="show();">
			  <option ></option>
			  <option >completo</option>
			  <option >incompleto</option>'; echo"</td>";
  echo"</tr>";
  echo"<tr>";
	  echo "<td>"; echo 'documentos faltando'; echo"</td>";
     echo "<td>"; echo '<textarea name="incompleto"  id="incompleto" cols="" rows=""></textarea>'; echo"</td>";
     echo"</tr>";
   echo"<tr>";
    echo "<td>"; echo "EMPRESA"; echo"</td>";
    echo "<td>"; 	$result = mysql_query("SELECT * FROM tab_empresa WHERE empresa  <> 'null'  ORDER BY empresa ASC");

	echo "<select name=\"empresa\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['id'] . "'>" . $row['empresa'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
   echo"<tr>";
    echo "<td>"; echo "TIPO"; echo"</td>";
    echo "<td>"; 	$result = mysql_query("SELECT * FROM tipodoc WHERE nome  <> 'null'  ORDER BY nome ASC");

	echo "<select name=\"tipo\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['iddoc'] . "'>" . $row['nome'] . "</option>";
	}
	echo "</select>";
 echo"</td>";
  echo"</tr>";
  
    
  echo"<tr>";
    echo "<td>"; echo "ANEXO"; echo"</td>";
    echo "<td>"; echo '	<input name="fileanexo" type="file" id="filranexo" />';
 echo"</td>";
  echo"</tr>";
  echo"<tr>";
    echo "<td>"; echo '<input name="enviar"  value="Enviar" type="submit" />'; echo"</td>";
	 
    echo "<td>";
 echo"</td>";
  echo"</tr>";
 echo "</table>";
 
 ?>
 </fieldset>
 </form>
</body>
</html>