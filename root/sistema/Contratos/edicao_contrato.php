<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 
<script>
function limpa() {
var elemento= document.getElementById('anexo').checked	
 if(elemento==true	) {

     //document.getElementById('fiscal').value="sim";

 document.getElementById("filecontrato").disabled = false;
  document.getElementById('filecontrato').style.visibility='visible';
}

else {
  document.getElementById("filecontrato").disabled = true;
  document.getElementById('filecontrato').style.visibility='hidden';
}

}
</script>

<script>
function desabilita() {

	 document.getElementById('id').style.visibility='hidden'
	var elemento= document.getElementById('anexo').checked;
	 if(elemento==true) {
// document.getElementById('fiscal').value="sim";		 
 //document.getElementById("port").disabled=false;
 //document.getElementById("file").disabled=false;
 }else{
//document.getElementById('fiscal').value="nao";		document.getElementById("por").disabled=true;
  document.getElementById("filecontrato").disabled=true;
  document.getElementById('filecontrato').style.visibility='hidden';}

//document.getElementById("file").disabled = true;	
 

    
 

}
</script>

</head>
<body link="##063" vlink="##063" alink="##063" onload="desabilita();">
<p>




<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
	$_SESSION["email"];
	$_SESSION["id"]
	
	

?>

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




$_SESSION["fiscal"]  = $dado_adm['fiscal'];
$_SESSION["fiscal_sub_1"] = $dado_adm['fiscal_sub_1'];
$_SESSION["fiscal_sub_2"] = $dado_adm['fiscal_sub_2'];
$_SESSION["fiscal_sub_3"] = $dado_adm['fiscal_sub_3'];
$_SESSION["fiscal_sub_4"] = $dado_adm['fiscal_sub_4'];
$_SESSION['empresa']	  = $dado_adm['empresa'];

$_SESSION["n_processo"]  = $dado_adm['n_processo'];
$_SESSION["descricao"] = $dado_adm['descricao'];
$_SESSION["valor_contrato"] = $dado_adm['valor_contrato'];
$_SESSION["valor_mensal"] = $dado_adm['valor_mensal'];
$_SESSION["Ativo"] = $dado_adm['Ativo'];
$_SESSION['vigencia']	  = $dado_adm['vigencia'];

$_SESSION["Ativo"] = $dado_adm['Ativo'];
$_SESSION['id_contrato']	  = $dado_adm['id'];





?>
</p>



<form action="processa_edicao2_contrato.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center">
  
  
  
  
      <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#060;">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:15px; text-align:justify; "> Edição contrato: <b><?php echo $dado_adm['n_contrato'];?><b>
        															<?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>
                                                                   
        <hr style=" width:750px; text-align:center;"></p>        </td>
        
 
	</tr>
  
  
  
  
  
  <tr>
      <th align="right" scope="row"></th>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['id'];?>" readonly="" /></td>
     </tr> 
   
    <tr>
      <th width="259" align="right" scope="row">Número do Processo</th>
      <td width="487"><label for="n_processo"></label>
      <input name="n_processo" type="text" id="n_processo" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['n_processo'];?>" readonly="readonly" onblur="ValidarProcesso(form1.n_processo);" onkeypress="MascaraProcesso(form1.n_processo);"/></td>
    </tr>
    

<?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('..\..\sistema\Empresas\select_empresas\empresa_mapa.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('..\..\sistema\Empresas\select_empresas\empresa_ciee.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('..\..\sistema\Empresas\select_empresas\empresa_terceirizado.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('..\..\sistema\Empresas\select_empresas\empresa_cnpq.php');  

 					}
				}
 					
					?>	
    
    
    
    
    
        <tr>
      <th align="right" scope="row">Vínculo</th>
      <td><input name="tipo_contrato" type="text" id="tipo_contrato" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['tipo_contrato'];?>" readonly="readonly" /></td>
    </tr>

    
    
    
   
    
    <tr>
      <th align="right" scope="row">Número do Contrato R$ </th>
      <td><input name="n_contrato" type="text" id="n_contrato" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['n_contrato'];?>" readonly="readonly" onblur="ValidarContrato(form1.n_contrato);" onkeypress="MascaraContrato(form1.n_contrato);"/></td>
    </tr>
    
    

    
    
    
    
    
    
       <tr>
      <th align="right" scope="row">Valor mensal R$</th>
      <td><label for="valor_mensal"></label>
      <input name="valor_mensal" type="text" id="valor_mensal" value="<?php echo $dado_adm['valor_mensal'];?>" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/>
     
      </td>
    </tr>
    
    
    
           <tr>
      <th align="right" scope="row">Início do contrato</th>
      <td>
      
        <label for="vigencia"></label>
        <input name="vigencia" type="Text" id="vigencia" readonly="readonly" style="color: #999; background: #CCC;" size="25" value="<?php echo $dado_adm['vigencia'];?>"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('vigencia','yyyyMMdd')" style="cursor:pointer"/>
      
      </td>

    </tr>

    
           <tr>
      <th align="right" scope="row">Valor do contrato</th>
      <td><label for="valor_contrato"></label>
      <input name="valor_contrato" type="text" id="valor_contrato" value="<?php echo $dado_adm['valor_contrato'];?>" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
    </tr>
    
    
    
        
                   
                   
                   
                       <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Fiscal Substituto<span class="style2">*</span></div></th>

			  <td><select id="fiscal_sub_1" name="fiscal_sub_1"> 
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'sim' and Master <> 's'
						 
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
							
					?>
<option value="<?php echo $reg["Id"];?>" <?php if ($reg["Id"] == $dado_adm['fiscal_sub_1']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Nome"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>                
                   
                
                   
                   
                   
                    <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Apoio Administrativo 1<span class="style2">*</span></div></th>

			  <td><select id="fiscal_sub_2" name="fiscal_sub_2">
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
<option value="<?php echo $reg["Id"];?>" <?php if ($reg["Id"] == $dado_adm['fiscal_sub_2']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Nome"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
                                       <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Apoio Administrativo 2</div></th>

			  <td><select id="fiscal_sub_3" name="fiscal_sub_3">
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
<option value="<?php echo $reg["Id"];?>" <?php if ($reg["Id"] == $dado_adm['fiscal_sub_3']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Nome"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr> 
                   
                   
                   
                   
                   
                   
                   
                   
                    <tr>
      <th align="right" scope="row"><span class="style4"><div class="style4" >Apoio Administrativo 3</div></th>

			  <td><select id="fiscal_sub_4" name="fiscal_sub_4">
			  <option value="">Selecione
					
					
					<?php
						$sql = "SELECT Nome,Id FROM admin WHERE Nome <> 'null' 
						
						and '{$_SESSION['id']}' <> Id and Fiscal = 'nao' and Master <> 's'
						
						
						ORDER BY Nome ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Nome"];
					?>
<option value="<?php echo $reg["Id"];?>" <?php if ($reg["Id"] == $dado_adm['fiscal_sub_4']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg["Nome"];?></option>
					<?php
					}
					?>
				</select> </td>
                   </tr>            
                   
                   
                   
     
     
     
            <tr>
      <th align="right" scope="row">Descrição</th>
      <td><label for="descricao"></label>
      
      
      <textarea name="descricao"  id="descricao" cols="45" rows="5" value="descricao"><?php echo $dado_adm['descricao'];?></textarea>
      </td>
    </tr>
     
                   
                   
                   
    
                    <tr>
      <th align="right" scope="row"><span class="style4">
      <div class="style4" >Ativo<span class="style2">*</span></div></th>

<td><select id="Ativo" name="Ativo">
					
					
					<?php
						$sql = "SELECT Ativo FROM tab_ativo WHERE Ativo <> 'null'";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["Ativo"];
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
      <th align="right" scope="row">Anexar nova copia do contrato</th>
      <td><label for="valor_contrato"></label>
      <input type="checkbox" name="anexo" id="anexo"  onclick="limpa();"/></td>
    </tr>  
     <tr>
      <th align="right" scope="row"></th>
      <td><label for="valor_contrato">
        <input type="file" name="filecontrato" id="filecontrato" />
      </label></td>
    </tr>                         
                   
        
   
    
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="atualizar" />
  </label>
    <label>

   
   
    <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
    </label>
  </p>

</form>

</body>
</html>
