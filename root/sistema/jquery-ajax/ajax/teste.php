<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<form action="teste.php" method="post" target="_blank">
<?php
include 'dados.php';
$result = mysql_query("SELECT * FROM tab_empresa");

	echo "<select name=\"categoria\" onchange=\"window.location='teste2.php?categoria='+this.value\">";

	while($row = mysql_fetch_array($result))
	{
	echo "<option value='" . $row['id'] . "'>" . $row['empresa'] . "</option>";
	}
	echo "</select>";

?>
</form>

</body>
</html>