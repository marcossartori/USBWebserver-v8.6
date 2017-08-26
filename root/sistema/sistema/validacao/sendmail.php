<?php

// dados comuns de conexão
$host = "localhost";
$usuario = "root";
$senha = "root";
$base = "lanagro_rs";
$tabela = "funcionarios";


$date = date("Y-m-d");
list($anoatual, $mesatual, $diaatual) = explode("-", $date);
// efetuando a conexão
$con = mysql_connect($host, $usuario, $senha);
mysql_select_db($base);

$aniversario = mysql_query("SELECT * FROM $tabela WHERE data_nasc > $date") 
or die("Não conectou: " . mysql_error());

while ($row = mysql_fetch_array($aniversario))



 {
list($ano, $mes, $dia) = explode("-", $row[1]);
if ($mesatual == $mes) {
if ($diaatual == $dia) {
	
	echo $nome=$row[3];
mail ($row['email'],"Feliz aniversário","$nome, Parabéns pelo seu dia! é o que deseja a Cordenação do LANAGRO/RS");
}
}
}

?>