<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br />
<br />

</head>

<?php

require 'C:\wamp\www\sistema\validacao\class_conexao2.php';

$temosresultados = false;
$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("root");

$objetoConexao->abrirConexao();

if ($objetoConexao->estaConectado() == false){
	echo "conexao nao realizada com sucesso!";
} else {
	//echo "conexao realizada com sucesso";
	$objetoConexao->defineNomedobanco("lanagro_rs");
	$objetoConexao->selecionaBanco();
	if ($objetoConexao->estaComBancoSelecionado()==false) {
		//echo "nao consegui selecionar o banco de dados";
	} else {
		$sql = "select * from tab_empresa";
		$resultado = $objetoConexao->consulta($sql);
		if ($resultado == false){
			echo "nenhum resultado valido!";
		} else {
			$temosresultados = true;
			
		}
	}
}



?>

<body link="##063" vlink="##063" alink="##063">
<p></p>


<div id=tabela Style="overflow:scroll; padding: 0px; position: absolute; height:360px; Left: 360; top: 250; width: 150%">
<table width="1300" border="0" align="left">

  <tr>
    <th scope="col">Empresa</th>
    <th scope="col">CNPJ</th>
    <th scope="col">Endereco</th>
    <th scope="col">CEP</th>
    <th scope="col">Telefon</th>
    <th scope="col">Bolsista</th>
    <th scope="col">Preposto</th>
    <th scope="col">Nome Fantasia</th>

  </tr>

  <?php
  
if ($temosresultados == true){
	while ($dado_adm = mysql_fetch_array($resultado)){
		echo "<tr>";

		echo "<td>";
	
			echo "<a href='"; 
			echo "http://localhost/sistema/edit_empresa.php?id=";
			echo $dado_adm['id'];
			echo "'>";
			echo $dado_adm['empresa']; echo "</a>";
			
		echo "</td>";
		
		echo "<td>"; echo $dado_adm['CNPJ']; echo "</td>";
		echo "<td>"; echo $dado_adm['Endereco']; echo "</td>";
		echo "<td>"; echo $dado_adm['CEP']; echo "</td>";
		echo "<td>"; echo $dado_adm['Telefone']; echo "</td>";
		echo "<td>"; echo $dado_adm['Preposto']; echo "</td>";
		echo "<td>"; echo $dado_adm['Nome_Fantasia']; echo "</td>";
		echo "</tr>";
		

	}
} else {

echo "<tr>";
echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>";
echo "</tr>";

}

?>

</table>
</div>

<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
