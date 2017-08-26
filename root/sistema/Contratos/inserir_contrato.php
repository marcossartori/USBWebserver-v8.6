<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/funcao.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 




<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/> 


<?php 
 if($_SESSION["Acesso"] == 'Terceirizados' and $_SESSION["Fiscal"] <> 'sim' ){

				{
 	echo "<script type=\"text/javascript\">
           alert('[ Erro ] Acesso não permitido, contate o administrador do sistema!!');
           history.go(-2);
          </script>";	
    exit();	
}
	
	
	}








include('..\..\sistema\validacao\somar_data.php');?>




<?php
$nome = $_SESSION["nome"];
$_SESSION["email"];
$_SESSION["id"];
?>

</head>
<?php
require '..\..\sistema\validacao\class_conexao2.php';

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

<form id="form1" name="form1" method="post" action="processa_edicao2_contrato.php" enctype="multipart/form-data" />
  <p class="style3">&nbsp;</p>
  
  
 

  <table   border="0" align="center" width="578">

<?php 
	  
	  
	  {
	  
	   if($_SESSION["Acesso"] == 'Terceirizados' ){
	include('..\..\sistema\Empresas\select_empresas\select_empresa_Terceirizado.php');  
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	include('..\..\sistema\Empresas\select_empresas\select_empresa_Mapa.php');  
	}

					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	include('select_empresa_Bolsista.php');  
	}
	
	
	
						 if($_SESSION["Acesso"] == 'Mapa' and ($_SESSION['tipo_contrato'] == 'Estagiarios')){
	include('..\..\sistema\Empresas\select_empresas\select_empresa_Estagiario.php');  
	}
	  
	  
	  }

	  ?>

          <tr>
<th width="236" align="right" scope="row" ><label for="n_processo">Numero do Processo*</label></th>
      <td width="332"><input name="n_processo" type="text" id="n_processo" onblur="ValidarProcesso(form1.n_processo);" onkeypress="MascaraProcesso(form1.n_processo);" size="20" 
maxlength="20" /></td>
    </tr>
    
    <tr>
<th width="236" align="right" scope="row" ><label for="n_contrato">Numero do Contrato*</label></th>
      <td width="332"><input name="n_contrato" type="text" id="n_contrato" onblur="ValidarContrato(form1.n_contrato);" onkeypress="MascaraContrato(form1.n_contrato);" size="7" 
maxlength="7" /></td>
    </tr>
    
	 
     
     <tr>
      <th align="right" scope="row">Vínculo<span class="style2">*</th>
      <td ><input name="tipo_contrato" type="text" class="input-p" id="tipo_contrato" style="color: #999; background: #CCC;" value="<?php 
	  
	  
	  {
	  
	   if($_SESSION["Acesso"] == 'Terceirizados' ){
	echo "Terceirizados";
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	echo "Mapa";
	}

					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	echo "Bolsistas";
	}
	  
	  
	  }

	  ?>" readonly="readonly" />
      </td>
    </tr>

    <tr>
<th width="236" align="right" scope="row" ><label for="valor_contrato">Valor do Contrato* R$</label></th>
      <td ><input name="valor_contrato" type="text" class="input-p" id="valor_contrato" onKeyPress="return(MascaraMoeda(this,'.',',',event))"></td>
    </tr>

    <tr>
<th width="236" align="right" scope="row" ><label for="valor_mensal">Valor Total Mensal* R$</label></th>      
      <td ><input name="valor_mensal" type="text" class="input-p" id="valor_mensal"  onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
    </tr>


          <tr>
<th width="236" align="right" scope="row" ><label for="vigencia">Início do Contrato*</label></th>
<td>
    <label for="vigencia"></label>
        <input name="vigencia" type="Text" id="vigencia" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('vigencia','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr>


   <tr> 
      <th align="right"  scope="row">Fiscal Responsavel*</th>

      <?php
	  $cormas = "#00F";
	  echo "<td style=\" color:$cormas; font-size:13; width:200;\">&nbsp;$nome</td>"; 
	  
	  //echo utf8_encode($msg);
	  
	  ?>
    </tr>
<tr>
<th width="236" align="right" scope="row" ><label for="n_processo">Anexar contrato*</label></th>
      <td width="332"><input type="file" name="filecontrato" id="filecontrato" /></td>
    </tr>

    <tr>
<th width="236" align="right" scope="row" ><label for="fiscal_sub_1">Fiscal Substituto *</label></th> 
			  <td><select id="fiscal_sub_1" name="fiscal_sub_1">
					<option value="">Selecione
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'sim' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							
							//$id = utf8_encode($reg['Nome']);
							$id = $reg['Nome'];
							$id2 = $reg['Id'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
    <tr>
<th width="236" align="right" scope="row" ><label for="fiscal_sub_2">Apoio Administrativo 1 :</label></th> 
				<td><select id="fiscal_sub_2" name="fiscal_sub_2">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							//$id = utf8_encode($reg['Nome']);
							$id = $reg['Nome'];
							$id2 = $reg['Id'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
    <tr>
<th width="236" align="right" scope="row" ><label for="fiscal_sub_3">Apoio Administrativo 2 :</label></th> 

				<td><select id="fiscal_sub_3" name="fiscal_sub_3">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							//$id = utf8_encode($reg['Nome']);
							$id = $reg['Nome'];
							$id2 = $reg['Id'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
                   
                   
                   
                   
    <tr>
<th width="236" align="right" scope="row" ><label for="fiscal_sub_4">Apoio Administrativo 3 :</label></th> 

				<td><select id="fiscal_sub_4" name="fiscal_sub_4">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							//$id = utf8_encode($reg['Nome']);
							$id = $reg['Nome'];
							$id2 = $reg['Id'];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   

          <tr>
<th width="236" align="right" scope="row" ><label for="descricao">Descrição do Objeto *</label></th> 
      <td ><textarea name="descricao"  id="descricao" cols="45" rows="5">
      </textarea></td>
    </tr>
    
       
           


  </table>

  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar"  />
  (*) Campos OBRIGATÓRIOS</p>
  <br />
  
</form>


   
</body>
</html>
