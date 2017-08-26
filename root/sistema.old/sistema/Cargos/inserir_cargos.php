<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 

<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="http://localhost/sistema/imput.css" 
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





<form id="form1" name="form1" method="post" action="http://localhost/sistema/Cargos/processa_edicao2_cargos.php">
  <p class="style3">&nbsp;</p>
  
   <b><?php include('C:\wamp\www\sistema\validacao\menu\contratos\menu_contratos_cabecalho.php');?></b>
     <p class="style3">&nbsp;</p>


  <table   border="0" align="center">
  

 
      
   


    <tr>

      <th scope="row"><span class="style4"><div class="style4">Cargo<span class="style2">*</span></div></th>
      <td ><label>
        <input name="cargo" type="text" class="input-p" id="cargo"/>
      </label></td>
    </tr>
    
    
         <tr>
      <th scope="row"><span class="style4"><div class="style4" >Vínculo<span class="style2">*</span></div></th>
      <td ><input name="vinculo" type="text" class="input-p" id="vinculo" value="<?php echo $tipo_contrato = $_SESSION["tipo_contrato"];?>" readonly="readonly" /></td>
    </tr>

  </table>
  
  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar"/>
  (*) Campos OBRIGATÓRIOS</p>
  <br />
  
</form>


   
</body>
</html>
