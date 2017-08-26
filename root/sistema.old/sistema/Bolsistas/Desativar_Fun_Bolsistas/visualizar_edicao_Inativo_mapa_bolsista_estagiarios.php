<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body link="##063" vlink="##063" alink="##063">
<p>


<?php include('C:\wamp\www\sistema\validacao\somar_data.php');?>


<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

<?php
require 'C:\wamp\www\sistema\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("root");

$objetoConexao->abrirConexao();

if ($objetoConexao->estaConectado() == false){
	//echo "conexao nao realizada com sucesso!";
} else {
	//echo "conexao realizada com sucesso";
	$objetoConexao->defineNomedobanco("lanagro_rs");
	$objetoConexao->selecionaBanco();
	if ($objetoConexao->estaComBancoSelecionado()==false) {
		echo "nao consegui selecionar o banco de ";
	} else {
		
			$idGet = $_GET['id'];
		$sql = "SELECT * FROM funcionarios, desativa_func WHERE desativa_func.funcionarios = funcionarios.nome_funcionario AND funcionarios.id = $idGet";

		//echo "sql:"; //echo $sql;
		$resultado = $objetoConexao->consulta($sql);
		if ($resultado == false){
			echo "nenhum resultado valido!";
		} else {
			$dado_adm = mysql_fetch_array($resultado);
		}
	}
}
?>
</p>



<form id="form2" name="form2" method="post" action="processa_edicao2_Inativo_mapa_bolsista_estagiarios.php">
   <center>
 
<table cellpadding="0" cellspacing="0" border="0" style=" background-image:url(http://localhost/sistema/imagens/fundo_cadastro.png); width:450px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="background-image:url(http://localhost/sistema/imagens/fundo_cadastro_topo.png); height:25;">&nbsp;        </td>
	</tr>




      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:430px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> 
        Contrato: <b>
		<?php echo $dado_adm['nome_funcionario'];?><b>
      
                                                                   
        <hr style=" width:430px; text-align:center;"></p>        </td>
        
 
	</tr>

    
   <tr>
 		<td style=" text-align:right; width:150px;">Descricao: </td>
        <td style=" text-align:left; width:250px;"><p>
		
		
		
<br />		
<?php 

$texto = $dado_adm['descricao2'];
$novo_texto = wordwrap( $texto, 30, "\n", 1);



echo "$novo_texto\n";

?>
<br />
<br />		


        
        </p></td>
 	</tr>
    
    

   	<tr>
    
 		<td style=" text-align:right; width:150px;">Hora: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Hora'];?></td>
 	</tr>
    <tr>
    
    
    
    
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Data: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Data'];?></td>
 	</tr>
    <tr>
  
  
   	<tr>
    
 		<td style=" text-align:right; width:150px;">usuario: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['usuario'];?></td>
 	</tr>


  </table>
  <p align="center">&nbsp;</p>
  <p align="center">

  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
