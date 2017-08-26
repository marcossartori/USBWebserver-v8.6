<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/funcao_Fun.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/MascaraValidacao.js"></script> 


<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/validacao/mensagens.css" 
/> 

 
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
		$sql = "select * from contratos where id=$idGet";

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



<form id="form1" name="form1" method="post" action="processa_edicao2_contrato_mapa_bolsista_estagiarios.php">
  <p>&nbsp;</p>
  <table width="555" border="0" align="center">
  
  
  
  
      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:490px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Edição contrato: <b><?php echo $dado_adm['n_contrato'];?><b>
        															<?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
        <hr style=" width:490px; text-align:center;"></p>        </td>
        
 
	</tr>
  
  
  
  
  
  	<tr>
      <th align="left" scope="row">ID</th>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" size="5" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr> 
   
    <tr>
      <th align="left" scope="row">Número do Processo</th>
      <td><label for="n_processo"></label>
      <input name="n_processo" type="text" id="n_processo" size="22" value="<?php echo $dado_adm['n_processo'];?>" readonly="readonly" /></td>
    </tr>
    

<?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('C:\wamp\www\sistema\Empresas\select_empresas\empresa_mapa.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('C:\wamp\www\sistema\Empresas\select_empresas\empresa_ciee.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('C:\wamp\www\sistema\Empresas\select_empresas\empresa_terceirizado.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('C:\wamp\www\sistema\Empresas\select_empresas\empresa_cnpq.php');  

 					}
				}
 					
					?>	


    <tr>
      <th align="left" scope="row">Vinculo</th>
      <td><label for="tipo_contrato"></label>
      <input name="tipo_contrato" type="text" id="tipo_contrato" value="<?php echo $dado_adm['tipo_contrato'];?>" readonly="readonly" /></td>
    </tr>
    
    
    
    
    
    
    
    
    
    <tr>
      <th align="left" scope="row">Contrato</th>
      <td><input name="n_contrato" type="text" id="n_contrato" value="<?php echo $dado_adm['n_contrato'];?>" readonly="readonly" /></td>
    </tr>
    
    
       <tr>
      <th align="left" scope="row">Descrição</th>
      <td><label for="descricao"></label>
      
      
      <textarea name="descricao"  id="descricao" cols="45" rows="5" value="descricao"><?php echo $dado_adm['descricao'];?></textarea>
      </td>
    </tr>
    
    
    
    
    
    
       <tr>
      <th align="left" scope="row">Valor mensal</th>
      <td><label for="valor_mensal"></label>
      <input name="valor_mensal" type="text" id="valor_mensal" value="<?php echo $dado_adm['valor_mensal'];?>" />
     
      </td>
    </tr>
    
    
    
           <tr>
      <th align="left" scope="row">Vigencia</th>
      <td>
      
              <label for="vigencia"></label>
        <input name="vigencia" type="Text" id="vigencia" maxlength="25" size="10" value="<?php echo $dado_adm['vigencia'];?>"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('vigencia','yyyyMMdd')" style="cursor:pointer"/>
      
      </td>

    </tr>

    
           <tr>
      <th align="left" scope="row">Valor do contrato</th>
      <td><label for="valor_contrato"></label>
      <input name="valor_contrato" type="text" id="valor_contrato" value="<?php echo $dado_adm['valor_contrato'];?>" /></td>
    </tr>
    

    
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="Salvar" />


    <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
    </label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
