<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/desativa_Fun.js"></script> 


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
		echo "nao consegui selecionar o banco de ";
	} else {
		
			$idGet = $_GET['id'];
		$sql = "select * from funcionarios where id=$idGet";

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
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_Inativo_mapa_bolsista_estagiarios.php">
  <p class="style3">&nbsp;</p>
  
  


<table width="750" height="257"   border="0" align="center">
          <tr>
<th width="226" align="right" scope="row" ><label for="nome_funcionario">Funcionário</label></th> 
      <td width="287" align="left" valign="middle" ><input name="nome_funcionario" type="text" disabled="disabled" class="input-p" id="nome_funcionario" onblur="ValidarContrato(form1.nome_funcionario);" onkeypress="MascaraContrato(form1.nome_funcionario);"  value="<?php echo $dado_adm['nome_funcionario'];?>
       <?php $n_contrato=$_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];?>" size="25" 
maxlength="25" readonly="readonly"/></td>
    </tr>

          <tr>
<th width="226" align="right" scope="row" ><label for="Data">Data de Ativação*</label></th> 

      <td align="left">
<input name="Data" type="Text" class="input-p" id="Data" size="25" maxlength="25" readonly="readonly" 
value="<?php echo  $data = date("d-m-y")?>" input></td>


          <tr>
<th width="226" align="right" scope="row" ><label for="data_saida">Data de Inicio</label></th>
<td>
        <label for="data_saida"></label>
        <input name="data_saida" type="Text" id="data_saida" size="25" maxlength="25" readonly="readonly"/>
        <img src="http://localhost/sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_saida','ddMMyyyy')" style="cursor:pointer"/>
 </td>
    </tr>      


          <tr>
<th width="226" align="right" scope="row" ><label for="Hora">Hora de Ativação*</label></th> 
      <td align="left" valign="middle">
<input name="Hora" type="Text" class="input-p" id="Hora" size="25" maxlength="25" readonly="readonly" 
value=" <?php date_default_timezone_set('America/Sao_Paulo');
echo $hora = date('H:i:s'); ?>" input></td>





        	<td>&nbsp;</td>
        
        	<td width="49">&nbsp;</td>
    </tr>



  
  
  
  
  
          <tr>
<th width="226" align="right" scope="row" ><label for="usuario">Ativado por *</label></th> 
      <td align="left">
<input name="usuario" type="Text" class="input-p" id="usuario" size="25" maxlength="25" readonly="readonly" 
value="<?php echo "$nome";?>" input></td>

    </tr>



          <tr>
<th width="226" align="right" scope="row" ><label for="n_contrato">Empresa</label></th> 
      <td align="left"> 
<select onchange="document.getElementById('n_contrato').value=this.value">
      <option value="">Selecione
					<?php
						$sql = "SELECT n_contrato, empresa FROM contratos WHERE n_contrato <> 'null' ORDER BY n_contrato ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id2 = $reg["n_contrato"];
							$id = $reg["empresa"];
					?>
		  <option value= "<?php print ("$id2");?>"><?php print("$id");?> 
		  </option>
					<?php
					}	
					?>
		</select>
Contrato
 <input name="n_contrato" type="Text" class="input-p"  id="n_contrato" size="10" maxlength="25" readonly="readonly"    input>
	      <span class="style4"></span></td>
    </tr>


 <tr>
<th width="226" align="right" scope="row" ><label for="unidade">Unidade *</label></th> 

	  <td><select id="unidade" name="unidade">
      <option value="">Selecione
					
					
					<?php
						$sql = "SELECT unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["unidade"];
					?>
					<option value= "<?php print("$id");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> 
	      <span class="style4"></span></td>
    </tr>








                    
          <tr>
<th width="226" align="right" scope="row" ><label for="descricao2">Descrição *</label></th> 
      <td ><textarea name="descricao2"  id="descricao2" cols="45" rows="5">
      </textarea></td>
    </tr>
    
       
           


  </table>

  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar" onClick="return confirm('Deseja Ativar esse Funcionário no Contrato?')"  style="text-decoration:none" /> <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)"> 
  </p>
  <br />
  
  
  
  
  

  
  
</form>


   
</body>
</html>
