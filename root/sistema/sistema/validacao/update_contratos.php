<?php include("dbconexao.php");
echo $_SESSION["fim_contrato"] = $data = date("Y-m-d");
$sql = "UPDATE contratos SET Ativo = 'Nao' WHERE fim_contrato = '{$_SESSION['fim_contrato']}'";

$query = mysql_query($sql)or die(mysql_error()); ?>