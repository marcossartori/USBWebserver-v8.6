<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/confirma_renovacao.js"></script>
<script language="JavaScript" type="text/javascript" src="http://localhost/sistema/validacao/MascaraValidacao.js"></script> 



<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
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
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_aditivo_02.php">

  <p class="style3">&nbsp;</p>
  
  
 

  <table width="540" height="257"   border="0">
  
  <tr>
    <td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:15px; color:#060;
            						">
                                    <p>Confirmar Renovação 02: <b><?php echo $_SESSION['renovacao_02'];?></b> </p>
                                   <p>&nbsp;</p></td></tr>
  
  
  
    
    <tr>

      <th width="209" align="right" class="style4" scope="row">Contrato</th>
      <td width="287" ><input name="n_contrato" type="text" disabled="disabled" class="input-p" id="n_contrato" onblur="ValidarContrato(form1.n_contrato);" onkeypress="MascaraContrato(form1.n_contrato);"  value="<?php echo $dado_adm['n_contrato'];?>
       <?php $n_contrato=$_SESSION['n_contrato'] = $dado_adm['n_contrato'];?>" size="25" 
maxlength="25" readonly="readonly"/></td>
    </tr>
    
    
    
     <tr>
     <th align="right" scope="row"><span class="style4">
     <div class="style4" >Data<span class="style2">*</span></div></th>
      <td>
<input name="Data" type="Text" class="input-p" id="Data" size="25" maxlength="25" readonly="readonly" 
value="<?php echo  $data = date("d-m-y")?>" input></td>

     <tr>
     <th align="right" scope="row"><span class="style4">
     <div class="style4" >Hora<span class="style2">*</span></div></th>
      <td>
<input name="Hora" type="Text" class="input-p" id="Hora" size="25" maxlength="25" readonly="readonly" 
value=" <?php date_default_timezone_set('America/Sao_Paulo');
echo $hora = date('H:i:s'); ?>" input></td>





        	<td>&nbsp;</td>
        
        	<td>&nbsp;</td>
    </tr>



  
  
  
  
  
       <tr>
     <th align="right" scope="row"><span class="style4">
     <div class="style4" >Usuário<span class="style2">*</span></div></th>
      <td>
<input name="usuario" type="Text" class="input-p" id="usuario" size="25" maxlength="25" readonly="readonly" 
value="<?php echo "$nome";?>" input></td>

    </tr>
    
  <tr>
      <th height="102" align="right" scope="row"><div class="style4" >Descrição<span class="style2">*</div></th>
      <td ><textarea name="descricao2"  id="descricao2" cols="45" rows="5">
      </textarea></td>
    </tr>
    
       
           


  </table>

  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar" onClick="return confirm('Deseja confirmar a renovação 02 do contrato ?')"  style="text-decoration:none"/> <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
  </p>
  <br />
  
  
  
  
  

  
  
</form>


   
</body>
</html>
