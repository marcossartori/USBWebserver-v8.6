<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body link="##063" vlink="##063" alink="##063">
<p>





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
		$sql = "select * from funcionarios WHERE id=$idGet";

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



<form id="form2" name="form2" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">
   <center>
 
 

 
<table cellpadding="0" cellspacing="0" border="0" style=" background-image:url(imagens/fundo_cadastro.png); width:450px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="background-image:url(imagens/fundo_cadastro_topo.png); height:25;">&nbsp;        </td>
	</tr>
    
    
    <tr>
    	<td colspan="2">
        <hr style=" width:477px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Funcionário (a): <b><?php echo $dado_adm['nome_funcionario'];?></b>
        <span style=" margin:15px; text-align:justify; ">Contrato: <b><?php echo $n_contrato = $_SESSION["n_contrato"];?></b></span>        
        <p style=" margin:15px; text-align:justify; ">   Empresa: <b><?php echo $empresa = $_SESSION['empresa'];?></b>       
      <hr style=" width:477px; text-align:center;"></p></td>
        <td colspan="2">
        <p style=" margin:15px; text-align:justify; "><b><b>
       </td>   
<td colspan="2" style="font-size:15px; color:#000;"><b></td>
	</tr>

         	<tr>
    
 		<td style=" text-align:right; width:150px;">Telefone: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['telefone'];?></td>
 	</tr>
    <tr>
    
    
    
            	<tr>
    
 		<td style=" text-align:right; width:150px;">Data de Nascimento: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['data_nasc'];?></td>
 	</tr>
    <tr>
  
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Email: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['email'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Endereco: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['endereco'];?></td>
 	</tr>
    <tr>
  
  
         	<tr>
    
 		<td style=" text-align:right; width:150px;">Número: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Numero'];?></td>
 	</tr>
    <tr>
    
    
             	<tr>
    
 		<td style=" text-align:right; width:150px;">Complemento: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Complemento'];?></td>
 	</tr>
    <tr>
    
    
    
                 	<tr>
    
 		<td style=" text-align:right; width:150px;">Bairro: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Bairro'];?></td>
 	</tr>
    <tr>
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Cidade: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Cidade'];?></td>
 	</tr>
    <tr>
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Cargo: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['cargo'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Vínculo: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['tipo_contrato'];?></td>
       
 	</tr>
    <tr>
  

       	<tr>
    
 		<td style=" text-align:right; width:150px;">Sexo: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['sexo'];?></td>
 	</tr>
    <tr>
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Escolaridade: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['escolaridade'];?></td>
 	</tr>
    <tr>
    
    
    
           	<tr>
    
 		<td style=" text-align:right; width:150px;">Formação: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['formacao'];?></td>
 	</tr>
    <tr>
  
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Filhos: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['filhos'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Estado: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Estado'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;">Unidade: </td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['unidade'];?></td>
         
 	</tr>






    <tr>
<?php  
  
$_SESSION["Ativo"] = $dado_adm['Ativo'];

 ?>   

		<?php

	 if($_SESSION["tipo_contrato"] == 'Mapa' ){
		 
		echo "<tr>";
		echo '<td style=" text-align:right; width:150px;">'; echo "Cargo Chefia:"; echo "</td>";
        echo '<td style=" text-align:left; width:250px;">'; 
		echo $dado_adm['cargo_chefia']; 
		echo "</td>";
    	echo "</tr>"; 
		
		}?>


        		<?php

	 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
		 
		echo "<tr>";
		echo '<td style=" text-align:right; width:150px;">'; echo "Tipo de Bolsa:"; echo "</td>";
        echo '<td style=" text-align:left; width:250px;">'; 
		echo $dado_adm['bolsista'];
		echo "</td>";
    	echo "</tr>";
		
		}?>

    </tr>





          <b><?php include('C:\wamp\www\sistema\validacao\menu\funcionarios\menu_visualiza_fun_rodape.php');?></b>

  </table>
</form>
</body>
</html>
