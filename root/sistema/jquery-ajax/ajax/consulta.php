<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Tables</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<form id="form1" name="form1" method="post" action="teste2.php" >
include "dados.php";
echo '<table border="0" align="center" cellspacing="0" class="alt" id="mytable" summary="The technical specifications of the Apple PowerMac G5 series";>';


  echo'<tr>';
  
	 echo' <th scope="col" abbr="Dual 1.8">'; 
	 
	 $result = mysql_query("SELECT * FROM anos ");

	echo "<select name=\"anos\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codano'] . "'>" . $row['ano'] . "</option>";
	}
	echo "</select>";
	 
	  echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; 
	  $result = mysql_query("SELECT * FROM meses");

	echo "<select name=\"mes\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['codmes'] . "'>" . $row['mes'] . "</option>";
	}
	echo "</select>";
	  
	   echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">';
	  $result = mysql_query("SELECT * FROM  tipodoc ");

	echo "<select name=\"tipo\" onchange=\"window.location='teste2.php?tipo='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['iddoc'] . "'>" . $row['nome'] . "</option>";
	}
	echo "</select>";
	  
	   echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; 
	  
	  $result = mysql_query("SELECT * FROM  tab_empresa ");

	echo "<select name=\"empresa\" onchang=\"window.location='adventure.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='" . $row['id'] . "'>" . $row['empresa'] . "</option>";
	}
	echo "</select>";
	  
	   echo'</th>';
	  echo' <th scope="col" abbr="Dual 1.8">'; echo '<select name="status">
	    <option value="0">PSQUISAR POR STATUS
	    <option value="1">COMPLETO
	    <option value="2">INCOMPLETO        
	    ';
	  echo '';
	  
	   echo '</select>
	  ';  echo'</th> ';
	  echo' <th scope="col" abbr="Dual 1.8">';  echo' <input name="enviar" type="submit" value="Pesquisar" />'; echo'</th>';
	
	echo '</tr>';

include'teste2.php';
  
  
echo "</table>"
?>

<p>&nbsp;</p>
</form>
</center>
</body>
</html>