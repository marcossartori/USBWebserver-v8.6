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
type="text/css"href="../../forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../imput.css" 
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

$_SESSION['id_fun'] = $dado_adm['id'];	
$_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];	
$_SESSION['n_contrato'] = $dado_adm['n_contrato'];

?>
</p>



<form id="form1" name="form1" method="post" action="processa_edicao_eventual.php">
  <p>&nbsp;</p>
<table width="524" border="0" align="center">

      <tr>

    	<td colspan="2" style="font-size:20px; color:#060;">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:15px; text-align:justify; ">
        <b>Incluir afastamento

                                                                
        <hr style=" width:750px; text-align:center;">
        </p></td>


    </tr>
    
    
          <tr>

    	<td colspan="2" bgcolor="#D6D6D6" style="font-size:10px; color:#FF0000; ">
        <hr style=" width:750px; text-align:center;">
        <p style=" margin:15px; text-align:justify; ">
        <b>No campo OBS descreva o motivo do afastamento.

                                                                
        <hr style=" width:750px; text-align:center;">
        </p></td>


    </tr>
    
    
         <tr>

    	<td colspan="2" style="font-size:15px; color:#060;">

        <p style=" margin:15px; text-align:justify; ">Funcionário (a): <b><?php echo $dado_adm['nome_funcionario'];?></b>

                                                                
        <hr style=" width:750px; text-align:center;"></p>        </td>

    </tr>
    

      <td>
      Inicio:
        <p>
          <label for="data_entrada_ev"></label>
          <input name="data_entrada_ev" type="Text" id="data_entrada_ev" maxlength="25" size="15" style="color: #999; background: #CCC;"  readonly="readonly"/>
      <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_entrada_ev','yyyyMMdd')" style="cursor:pointer"/></p>
</td>
	
           <tr>
      <td>
      Fim
        <p>
          <label for="data_saida_ev"></label>
          <input name="data_saida_ev" type="Text" id="data_saida_ev" maxlength="25" size="15" style="color: #999; background: #CCC;"  readonly="readonly"/>
       <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_saida_ev','yyyyMMdd')" style="cursor:pointer"/></p>
     <p>OBS:</p></td>
      
                <tr>

      <td ><textarea name="descricao2"  id="descricao2" cols="60" rows="7">
      </textarea></td>
    </tr>
    




  </table>
  <p align="center">
    <label>
      <input type="submit"  value="Enviar" >
    </label>
  </p>





</form>

</body>
</html>    
    
