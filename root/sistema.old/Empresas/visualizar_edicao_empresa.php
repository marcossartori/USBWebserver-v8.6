<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body link="##063" vlink="##063" alink="##063">
<p>






<?php
require '..\..\sistema\validacao\class_conexao2.php';

$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("usbw");

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
		$sql = "SELECT * FROM contratos, tab_empresa WHERE tab_empresa.id = contratos.empresa AND tab_empresa.id = $idGet";

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



<form id="form2" name="form2" method="post" action="processa_edicao2_empresa.php">
   <center>
   
       <b><?php include('..\..\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>

 
<table cellpadding="0" cellspacing="0" border="0" style=" background-image:url(imagens/fundo_cadastro.png); width:450px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="background-image:url(imagens/fundo_cadastro_topo.png); height:25;">&nbsp;</td>
	</tr>
    
    
    <tr>
    
    	<td colspan="2">
        <hr style=" width:430px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> <strong>Empresa: </strong><?php echo $dado_adm['empresa'];?>
        <hr style=" width:430px; text-align:center;"></p>        </td>
	</tr>

    
     	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>CNPJ:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['CNPJ'];?></td>
 	</tr>
    <tr>
    
    
         	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Razao Social:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Razao_Social'];?></td>
 	</tr>
    <tr>
  

       	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Endereco:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Endereco'];?></td>
 	</tr>
    <tr>
    
    
    
           	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Bairro:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Bairro'];?></td>
 	</tr>
    <tr>
  
  
             	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Número:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Numero'];?></td>
 	</tr>
    <tr>
  
  
  
<tr>
       <td style=" text-align:right; width:150px;"><strong>Estado:</strong></td>
       <td style=" text-align:left; width:250px;">

			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
						
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
 if ($row ["cod_estados"] == $dado_adm['estado']){  
 echo $row ["sigla"]; }
 ?>
         </td>
    </tr>
  





<tr>
       <td style=" text-align:right; width:150px;"><strong>Cidade:</strong></td>
       <td style=" text-align:left; width:250px;">
              
                   <?php
				   
				  
				  
				$sql = "SELECT cod_cidades, nome
						FROM cidades
						ORDER BY nome";
						
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) )
					

				
 if ($row ["cod_cidades"] == $dado_adm['Cidade']){  
echo $row['nome']; }
 ?>
          </td>	
              </tr> 






       	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>CEP:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['CEP'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Telefone:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Telefone'];?></td>
 	</tr>
    <tr>
    
    
    
           	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Email:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['email'];?></td>
 	</tr>
    <tr>
  
  
  
       	<tr>
    
 		<td style=" text-align:right; width:150px;"><strong>Preposto:</strong></td>
        <td style=" text-align:left; width:250px;"><?php echo $dado_adm['Preposto'];?></td>

  
  
       	
        
        
        <td style=" text-align:right; width:500px;">
		
		
		
		
		<?php     
        if($_SESSION["Acesso"] == 'Consulta' ){
		
		echo "<a href='"; 
		echo "../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php";
		echo "'>";
		echo " IR para Consultas  ";  echo "</a>";
	}
	

	 if($_SESSION["Acesso"] == 'Terceirizados' and  $dado_adm['vinculo'] == $_SESSION["Acesso"]){
		 
		echo "<a href='"; 
		echo "../../sistema/Empresas/edit_empresa.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";
	}
	
	
	
		 if($_SESSION["Acesso"] == 'Mapa' and  $dado_adm['vinculo'] == $_SESSION["Acesso"] or $dado_adm['vinculo'] =='Estagiarios' ){

		echo "<a href='"; 
		echo "../../sistema/Empresas/edit_empresa.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";
		

	}

	
				 if($_SESSION["Master"] == 's' ){
					 
		echo "<a href='"; 
		echo "../../sistema/Empresas/edit_empresa.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";
	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' and  $dado_adm['vinculo'] == $_SESSION["Acesso"]){
						 
		echo "<a href='"; 
		echo "../../sistema/Empresas/edit_empresa.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";
		

	
	}
	
?>
</td>
    </tr>


  </table>


</form>

</body>
</html>
