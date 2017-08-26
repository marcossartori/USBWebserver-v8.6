<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../validacao/eventual.js"></script>
<script language="JavaScript" type="text/javascript" src="../../validacao/MascaraValidacao.js"></script> 






		<style type="text/css">
			*, html {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				margin: 0px;
				padding: 0px;
				font-size: 12px;
			}

			a {
				color: #064;
			}

			body {
				margin: 10px;
			}
			.carregando{
				color:#666;
				display:none;
			}
		</style>
        
        
        <script>

                        function verificaEmpr(emp){

                                var div = document.getElementById('div'+ emp.id);

                                if (emp.checked == true)                
                                        div.style.display = 'block';
                                else
                                        div.style.display = 'none';
                        }

                </script>


<link rel="stylesheet" 
type="text/css"href="../../validacao/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../validacao/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../validacao/mensagens.css" 
/> 

</head>
<body link="##063" vlink="##063" alink="##063">
<p>



<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

<?php
require '..\..\validacao\class_conexao2.php';

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



<form id="form1" name="form1" method="post" action="processa_edicao_eventual.php">
  <p>&nbsp;</p>
  <table width="524" border="0" align="center">

    <tr>
    	<td colspan="2" style="font-size:12px; color:#000;">
        
        <p style=" margin:15px; text-align:justify; "> Funcionário (a): <b><?php echo $dado_adm['nome_funcionario'];?></b>
     
       
  


    
	<?php  if($dado_adm['data_saida_ev'] == '0000-00-00'){
	include('..\..\Contratos\eventual\exclui_fun_eventual.php');
	} ?> 
    
    
    	<?php  if($dado_adm['data_saida_ev'] <> '0000-00-00'){
	include('..\..\Contratos\eventual\inseri_eventual.php');
	} ?> 

    
    
    
  



       <?php
 $_SESSION['id_fun'] = $dado_adm['id'];	
 $_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];
 $_SESSION['Cidade'] = $dado_adm['Cidade'];	
 $_SESSION['n_contrato'] = $dado_adm['n_contrato'];	
 $_SESSION['Estado'] = $dado_adm['Estado'];
 $_SESSION['celular'] = $dado_adm['celular'];		 
 $_SESSION['formacao'] = $dado_adm['formacao'];
 $_SESSION["telefone"] = $dado_adm['telefone'];
 $_SESSION["data_nasc"] = $dado_adm['data_nasc'];
 $_SESSION["ini_lanagro"] = $dado_adm['ini_lanagro'];
 $_SESSION["email"] = $dado_adm['email'];

 $_SESSION["natura"] = $dado_adm['natura'];
 $_SESSION["endereco"] = $dado_adm['endereco'];
 $_SESSION["Numero"] = $dado_adm['Numero'];
 $_SESSION["Complemento"] = $dado_adm['Complemento'];
 $_SESSION["Bairro"] = $dado_adm['Bairro'];
 $_SESSION["cargo"] = $dado_adm['cargo'];
 $_SESSION["tipo_contrato"] = $dado_adm['tipo_contrato'];
 $_SESSION["sexo"] = $dado_adm['sexo'];
 $_SESSION["escolaridade"] = $dado_adm['escolaridade'];
 $_SESSION["filhos"] = $dado_adm['filhos'];
 $_SESSION["unidade"] = $dado_adm['unidade'];
 $_SESSION["tipo_contrato"] = $dado_adm['tipo_contrato'];
 $_SESSION["obs"] = $dado_adm['obs'];
?> 




  </table>
  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="Enviar" >
    </label>
  </p>





</form>

</body>
</html>
