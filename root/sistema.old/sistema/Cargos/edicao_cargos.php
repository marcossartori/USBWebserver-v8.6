<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 

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
		$sql = "select * from tab_empresa where id=$idGet";

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



<form id="form1" name="form1" method="post" action="processa_edicao2_empresa.php">
  <p>&nbsp;</p>
  <table width="524" border="0" align="center">
  
  
  
      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#333;">
        <hr style=" width:490px; text-align:center;">
        <p style="margin:15px; text-align:justify;"> Edição empresa: <b><?php echo $dado_adm['empresa'];?><b>
        															<?php $empresa=$_SESSION['empresa'] = $dado_adm['empresa'];?>
                                                                   
        <hr style=" width:490px; text-align:center;"></p>        </td>
        
 
	</tr>
  
  
  	<tr>
      <th align="left" scope="row">ID</th>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr> 
   
    <tr>
      <th align="left" scope="row">Empresa</th>
		<td><select name="empresa" id="empresa">
					
					
					<?php
						$sql = "SELECT empresa FROM tab_empresa WHERE empresa <> 'null' ORDER BY empresa ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["empresa"];
					?>
<option value="<?php echo $reg["empresa"];?>" <?php if ($reg["empresa"] == $dado_adm['empresa']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["empresa"];?></option>
					<?php
					}
					?>
		</select> </td>
    </tr>
    
    
    
                      <tr>
      <th align="left" scope="row">Razao_Social</th>
      <td><input name="Razao_Social" type="text" id="Razao_Social" value="<?php echo $dado_adm['Razao_Social'];?>" /></td>
    </tr>
    
    
    <tr>
      <th align="left" scope="row">CNPJ</th>
      <td><label for="CNPJ"></label>
      <input name="CNPJ" type="text" id="CNPJ" onKeyPress="MascaraCNPJ(form1.CNPJ);" 
maxlength="18" onBlur="ValidaCNPJ(form1.CNPJ);" value="<?php echo $dado_adm['CNPJ'];?>" /></td>
    </tr>
    
    <tr>
      <th align="left" scope="row">Telefone</th>
      <td><input name="Telefone" type="text" id="Telefone" onKeyPress="MascaraTelefone(form1.Telefone);" 
maxlength="14"  onBlur="ValidaTelefone(form1.Telefone);" value="<?php echo $dado_adm['Telefone'];?>" /></td>
    </tr>
    

    
        <tr>
      <th align="left" scope="row">Endereco</th>
      <td><input name="Endereco" type="text" id="Endereco" value="<?php echo $dado_adm['Endereco'];?>" /></td>
    </tr>
    
    
            <tr>
      <th align="left" scope="row">CEP</th>
      <td><input name="CEP" type="text" id="CEP" onKeyPress="MascaraCep(form1.CEP);"
 maxlength="10" onBlur="ValidaCep(form1.CEP)" value="<?php echo $dado_adm['CEP'];?>" /></td>
    </tr>
    
    
    
                <tr>
      <th align="left" scope="row">Preposto</th>
      <td><input name="Preposto" type="text" id="Preposto" value="<?php echo $dado_adm['Preposto'];?>" /></td>
    </tr>
    
    
    
                  <tr>
      <th align="left" scope="row">Nome_Fantasia</th>
      <td><input name="Nome_Fantasia" type="text" id="Nome_Fantasia" value="<?php echo $dado_adm['Nome_Fantasia'];?>" /></td>
    </tr>
    
    
    
                                           <tr>
      <th align="left" scope="row"><span class="style4"><div class="style4" >Cidade<span class="style2">*</span></div></th>

			  <td><select id="Cidade" name="Cidade">
					
					
					<?php
						$sql = "SELECT Cidade FROM tab_cidade WHERE Cidade <> 'null' ORDER BY Cidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Cidade"];
					?>
<option value="<?php echo $reg["Cidade"];?>" <?php if ($reg["Cidade"] == $dado_adm['Cidade']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Cidade"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                  
                   
                   
                   
                   
              
                   
                   
                   
                   
                   
                   <tr>
      <th align="left" scope="row"><span class="style4"><div class="style4" >Estados<span class="style2">*</span></div></th>

			  <td><select id="estado" name="estado">
					
					
					<?php
						$sql = "SELECT estado FROM tab_estado WHERE estado <> 'null' ORDER BY estado ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["estado"];
					?>
<option value="<?php echo $reg["estado"];?>" <?php if ($reg["estado"] == $dado_adm['estado']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["estado"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
                   
                   
                   
             
                   
                   
        
   
    
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="Salvar">
  </label>
    <label>

   
   
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
