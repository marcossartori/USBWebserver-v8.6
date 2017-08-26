<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Cargos</title>

<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/cargo.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/>

<?php
$nome = $_SESSION["nome"];

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




<form id="form1" name="form1" method="post" action="../../sistema/Cargos/processa_edicao2_cargos.php">



  <table   border="0" align="center">


          <tr>

    	<td height="5" colspan="2" bgcolor="#D6D6D6" style="font-size:11px; color:#FF0000; ">
        <hr style=" width:380px; text-align:center;">
        
        O cargo cadastrato ficara vinculado ao contrato <strong><?php echo $n_contrato = $_SESSION["n_contrato"];?>.</strong>

                                                                
        <hr style=" width:380px; text-align:center;">
        </td>


    </tr>

   
       <tr>

     <td width="200"><span data-tooltip class="has-tip" title="Nome do cargo privisto no contrato">Cargo: <img src="../imagens/info.png" width="16" height="16" /></span></td>
      <td width="316" ><label>
        <input name="cargo" type="text" class="input-p" id="cargo"/>
      </label></td>
    </tr>



       <tr>

     <td width="200"><span data-tooltip class="has-tip" title="Custo do cargo para o LANAGRO">Custo R$: <img src="../imagens/info.png" width="16" height="16" /></span></td>
      <td width="316" ><label>
        <input name="valor_cargo" type="text" class="input-p" id="valor_cargo" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/>
      </label></td>

    </tr>



       <tr>

     <td width="200"><span data-tooltip class="has-tip" title="Quantidade de funcionários que ocuparão esse cargo, nesse contrato?">Quantidade: <img src="../imagens/info.png" width="16" height="16" /></span></td>
      <td width="316" ><label>
        <input name="quant" type="text" class="input-p" id="quant" />
      </label></td>

    </tr>

         <tr>
       <td><span data-tooltip class="has-tip" title="Contrato que o cargo vai ficar vinculado">Contrato: <img src="../imagens/info.png" width="16" height="16" /></span> </td>
      <td ><input name="n_contrato" type="text" class="input-p" id="n_contrato" style="color: #999; background: #CCC;" value="<?php echo $n_contrato = $_SESSION["n_contrato"];?>" readonly="readonly" /></td>
    </tr>



         <tr>
       <td> <span data-tooltip class="has-tip" title="Vinculo do cargo">Vínculo: <img src="../imagens/info.png" width="16" height="16" /></span> </td>
      <td ><input name="vinculo" type="text" class="input-p" id="vinculo" style="color: #999; background: #CCC;" value="<?php echo $tipo_contrato = $_SESSION["tipo_contrato"];?>" readonly="readonly" /></td>
    </tr>

  </table>
  
  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar"/>
  </p>
  <br />
  
              <?php 
           echo "<label>";
echo '<input type="submit"   value="Fechar" onclick="window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>"; ?>   
</form>


   
</body>
</html>
