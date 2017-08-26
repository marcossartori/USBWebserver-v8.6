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

<?php
$nome = $_SESSION["nome"];

?>

</head>
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
		//echo "Nao conseguiu selecionar o banco de dados";
	} else {
	      //echo "Banco selecionado"; 
		
		}
	}

?>
</p>
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">


  <table   border="0" align="center" width="559">
  <tr>
  <td colspan="2" style="font-size:15px; color:#060;" align="center">
		Empresa: <b><?php echo $empresa = $_SESSION['empresa'];?><p class="style3">&nbsp;</p></b></td><tr>

		  
		
       <?php 
	  
	  
	  {
	  
	   if($_SESSION["tipo_contrato"] == 'Terceirizados') {
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Terceirizados.php');  
	}
	
		 if($_SESSION["tipo_contrato"] == 'Mapa' ){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Mapa.php');  
	}

					 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Bolsista.php');  
	}
	
	
	
						 if($_SESSION["tipo_contrato"] == 'Estagiarios'){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Estagiario.php');  
	}
	  
	  
	  }

	  ?>


          <tr>
<th width="226" align="right" scope="row" ><label for="nome_funcionario">Nome do funcionário:*</label></th>
      <td >
        <input name="nome_funcionario" type="text" class="input-p" id="nome_funcionario"/>
      </td>
    </tr>
    
    

               <tr>
<th width="226" align="right" scope="row" ><label for="data_nasc">Data de Nascimento:*</label></th>
 <td>
        <input name="data_nasc" type="Text" id="data_nasc" size="25" maxlength="25" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_nasc','yyyyMMdd')" style="cursor:pointer"/>
 </td>
       </tr>
	   
	   
	   
	                  <tr>
<th width="226" align="right" scope="row" ><label for="data_nasc">Inicio no LANAGRO:*</label></th>
 <td>
        <input name="ini_lanagro" type="Text" id="ini_lanagro" size="25" maxlength="25" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('ini_lanagro','yyyyMMdd')" style="cursor:pointer"/>
 </td>
       </tr>



       
               <tr>
<th width="226" align="right" scope="row" ><label for="tipo_contrato">Vínculo:*</label></th>
      <td ><input name="tipo_contrato" type="text" class="input-p" id="tipo_contrato" value="<?php echo $tipo_contrato = $_SESSION["tipo_contrato"];?>" readonly="readonly" /></td>
    </tr>

               <tr>
<th width="226" align="right" scope="row" ><label for="n_contrato">Contrato:*</label></th>
      <td ><input name="n_contrato" type="text" class="input-p" id="n_contrato" value="<?php echo $n_contrato = $_SESSION["n_contrato"];?>" readonly="readonly" /></td>
    </tr>

    

               <tr>
<th width="226" align="right" scope="row" ><label for="telefone">Telefone:*</label></th>
      <td ><input name="telefone" type="text" class="input-p" id="telefone" onKeyPress="MascaraTelefone(form1.telefone);" 
maxlength="14" /></td>
    </tr>
    
    
    
               <tr>
<th width="226" align="right" scope="row" ><label for="email">Email:*</label></th>
      <td ><input name="email" type="text" class="input-p" id="email" /></td>
    </tr>
    
    
               <tr>
<th width="226" align="right" scope="row" ><label for="endereco">Endereço:*</label></th>
      <td ><input name="endereco" type="text" class="input-p" id="endereco" /></td>
    </tr>
    
               <tr>
<th width="226" align="right" scope="row" ><label for="Numero">Número:*</label></th>
      <td ><input name="Numero" type="text" class="input-p" id="Numero" onkeypress="mascaraInteiro(form1.Numero);" /></td>
    </tr>
    
               <tr>
<th width="226" align="right" scope="row" ><label for="Complemento">Complemento:*</label></th>
      <td ><input name="Complemento" type="text" class="input-p" id="Complemento" /></td>
    </tr>
    
    
               <tr>
<th width="226" align="right" scope="row" ><label for="Bairro">Bairro:*</label></th>
      <td ><input name="Bairro" type="text" class="input-p" id="Bairro" /></td>
    </tr>





 <?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_mapa.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_ciee.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_terceirizado.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_cnpq.php');  

 					}
				}
 					
					?>	 
                   


  </table>
  
  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar"/>
  (*) Campos OBRIGATÓRIOS</p>
  <br />
  
</form>


   
</body>
</html>
