<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../validacao/desativa_Fun.js"></script> 


<link rel="stylesheet" 
type="text/css"href="../../forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../validacao/mensagens.css" 
/>


<?php include('..\..\..\sistema\validacao\somar_data.php');?>




<?php
$nome = $_SESSION["nome"];
$email=$_SESSION['email2'];
?>

</head>
<?php
require '..\..\..\sistema\validacao\class_conexao2.php';

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

$_SESSION["email2"];

?>




</p>
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_Inativo_mapa_bolsista_estagiarios.php">
  <p class="style3">&nbsp;</p>
  
  
 

  <table width="750" height="257"   border="0" align="right">
      <tr>
    <td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:15px; color:#060;
            						">
                                    <p><b>Desativar Funcionário:</b> </p>
                                   <p>&nbsp;</p></td></tr>
  
  
  
          <tr>
<th width="226" align="right" scope="row" ><label for="nome_funcionario">Funcionário</label></th> 
      <td width="287" align="left" valign="middle" ><input name="nome_funcionario" type="text" disabled="disabled" class="input-p" id="nome_funcionario" onblur="ValidarContrato(form1.nome_funcionario);" onkeypress="MascaraContrato(form1.nome_funcionario);"  style="color: #999; background: #CCC;" value="<?php echo $dado_adm['nome_funcionario'];?>
       <?php $n_contrato=$_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];?>" size="25" 
 readonly="readonly"/></td>
    </tr>

          <tr>
<th width="226" align="right" scope="row" ><label for="Data">Data*</label></th> 

      <td align="left">
<input name="Data" type="Text" class="input-p" id="Data" size="25" maxlength="25" readonly="readonly" 
style="color: #999; background: #CCC;" value="<?php echo  $data = date("d-m-y")?>" input></td>


          <tr>
<th width="226" align="right" scope="row" ><label for="data_saida">Data de Saída</label></th>
<td>
        <label for="data_adm"></label>
        <input name="data_adm" type="Text" id="data_adm" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_adm','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr>      


          <tr>
<th width="226" align="right" scope="row" ><label for="Hora">Hora *</label></th> 
      <td align="left" valign="middle">
<input name="Hora" type="Text" class="input-p" id="Hora" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly" 
value=" <?php date_default_timezone_set('America/Sao_Paulo');
echo $hora = date('H:i:s'); ?>" input></td>





        	<td>&nbsp;</td>
        
        	<td width="49">&nbsp;</td>
    </tr>



  
  
  
  
  
          <tr>
<th width="226" align="right" scope="row" ><label for="usuario">Desativado por *</label></th> 
      <td align="left">
<input name="usuario" type="Text" class="input-p" id="usuario" size="25"  style="color: #999; background: #CCC;" readonly="readonly" 
value="<?php 

//echo utf8_encode($nome);
echo $nome;

?>" input></td>

    </tr>


                    
          <tr>
<th width="226" align="right" scope="row" ><label for="descricao2">Motivo *</label></th> 
      <td ><textarea name="descricao2"  id="descricao2" cols="45" rows="5">
      </textarea></td>
    </tr>
    
       
           


  </table>

  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar" onClick="return confirm('Deseja Desativar esse Funcionário do Contrato?')"  style="text-decoration:none" /> <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)"> 
  </p>
  <br />
  
  
  
  
  

  
  
</form>


   
</body>
</html>
