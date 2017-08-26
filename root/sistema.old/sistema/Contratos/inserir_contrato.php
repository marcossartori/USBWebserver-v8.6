<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>






<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/funcao.js"></script>
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


<?php include('C:\wamp\www\sistema\validacao\somar_data.php');?>




<?php
$nome = $_SESSION["nome"];
echo $_SESSION["email"];
$_SESSION["id"];
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

<form id="form1" name="form1" method="post" action="processa_edicao2_contrato.php" />
  <p class="style3">&nbsp;</p>
  
  
 

  <table   border="0" align="center" width="559">

<?php 
	  
	  
	  {
	  
	   if($_SESSION["Acesso"] == 'Terceirizados' ){
	include('C:\wamp\www\sistema\Empresas\select_empresas\select_empresa_Terceirizado.php');  
	}
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	include('C:\wamp\www\sistema\Empresas\select_empresas\select_empresa_Mapa.php');  
	}

					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	include('select_empresa_Bolsista.php');  
	}
	
	
	
						 if($_SESSION["Acesso"] == 'Mapa' and ($_SESSION['tipo_contrato'] == 'Estagiarios')){
	include('C:\wamp\www\sistema\Empresas\select_empresas\select_empresa_Estagiario.php');  
	}
	  
	  
	  }

	  ?>

          <tr>
<th width="226" align="right" scope="row" ><label for="n_processo">Numero do Processo*</label></th>
      <td width="323"><input name="n_processo" type="text" id="n_processo" onblur="ValidarProcesso(form1.n_processo);" onkeypress="MascaraProcesso(form1.n_processo);" size="20" 
maxlength="20" /></td>
    </tr>
    
    <tr>
<th width="226" align="right" scope="row" ><label for="n_contrato">Numero do Contrato*</label></th>
      <td width="323"><input name="n_contrato" type="text" id="n_contrato" onblur="ValidarContrato(form1.n_contrato);" onkeypress="MascaraContrato(form1.n_contrato);" size="7" 
maxlength="7" /></td>
    </tr>
    
	 
     
     <tr>
      <th align="right" scope="row">Vínculo<span class="style2">*</th>
      <td ><input name="tipo_contrato" type="text" class="input-p" id="tipo_contrato" value="<?php 
	  
	  
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
<th width="226" align="right" scope="row" ><label for="valor_contrato">Valor do Contrato* R$</label></th>
      <td ><input name="valor_contrato" type="text" class="input-p" id="valor_contrato" onKeyPress="return(MascaraMoeda(this,'.',',',event))"></td>
    </tr>

    <tr>
<th width="226" align="right" scope="row" ><label for="valor_mensal">Valor Mensal</label></th>      
      <td ><input name="valor_mensal" type="text" class="input-p" id="valor_mensal"  onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
    </tr>


          <tr>
<th width="226" align="right" scope="row" ><label for="vigencia">Vigencia</label></th>
<td>
    <label for="vigencia"></label>
        <input name="vigencia" type="Text" id="vigencia" size="25" maxlength="25" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('vigencia','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr>


   <tr> 
      <th align="right"  scope="row">Fiscal Responsavel*</th>

      <?php
	  $cormas = "#00F";
	  echo  "<td style=\" color:$cormas; font-size:13; width:200;\">&nbsp;$nome</td>"; ?>
    </tr>


    <tr>
<th width="226" align="right" scope="row" ><label for="fiscal_sub_1">Fiscal Substituto 1 *</label></th> 
			  <td><select id="fiscal_sub_1" name="fiscal_sub_1">
					<option value="">Selecione
					
					<?php
						$sql = "SELECT Nome FROM admin WHERE Nome <> 'null' ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
    <tr>
<th width="226" align="right" scope="row" ><label for="fiscal_sub_2">Fiscal Substituto 2 *</label></th> 
				<td><select id="fiscal_sub_2" name="fiscal_sub_2">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome FROM admin WHERE Nome <> 'null' ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
    <tr>
<th width="226" align="right" scope="row" ><label for="fiscal_sub_3">Fiscal Substituto 3 *</label></th> 

				<td><select id="fiscal_sub_3" name="fiscal_sub_3">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome FROM admin WHERE Nome <> 'null' ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
                   
                   
                   
                   
    <tr>
<th width="226" align="right" scope="row" ><label for="fiscal_sub_4">Fiscal Substituto 4 *</label></th> 

				<td><select id="fiscal_sub_4" name="fiscal_sub_4">
                <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome FROM admin WHERE Nome <> 'null' ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   

          <tr>
<th width="226" align="right" scope="row" ><label for="descricao">Descrição do Objeto *</label></th> 
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
