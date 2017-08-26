<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>



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


<?php include('..\..\validacao\somar_data.php');?>




<?php
$email=$_SESSION['email2'];
$nome = $_SESSION["nome"];
$_SESSION['fim_contrato'];
$_SESSION['empresa'];

$_SESSION["fiscal"];
$_SESSION["fiscal_sub_1"];
$_SESSION["fiscal_sub_2"];
$_SESSION["fiscal_sub_3"];
$_SESSION["fiscal_sub_4"];



?>

</head>
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
<?php
$_SESSION["Fiscal"]


 ?>



</p>
<body link="##063" vlink="##063" alink="##063">

<form id="form1" name="form1" method="post" action="processa_edicao2_Inativo_mapa_bolsista_estagiarios.php">
  <p class="style3">&nbsp;</p>
  
  


<table width="750" height="257"   border="0" align="center">
    <tr>
    <td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:15px; color:#060;
            						">
                                    <p><b>Ativar Funcionário:</b> </p>
                                   <p>&nbsp;</p></td></tr>



          <tr>
<th width="226" align="right" scope="row" ><label for="nome_funcionario">Funcionário</label></th> 
      <td width="287" align="left" valign="middle" ><input name="nome_funcionario" type="text" disabled="disabled" class="input-p" id="nome_funcionario" onblur="ValidarContrato(form1.nome_funcionario);" onkeypress="MascaraContrato(form1.nome_funcionario);"  style="color: #999; background: #CCC;" value="<?php echo $dado_adm['nome_funcionario'];?>
       <?php $n_contrato=$_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];?>" size="25" 
 readonly="readonly"/></td>
    </tr>

          <tr>
<th width="226" align="right" scope="row" ><label for="Data">Data de Ativação*</label></th> 

      <td align="left">
<input name="Data" type="Text" class="input-p" id="Data" size="25" style="color: #999; background: #CCC;" readonly="readonly" 
value="<?php echo  $data = date("d-m-y")?>" input></td>


          
          
          
      <tr>
<th width="218" align="right" scope="row" ><label for="fun_eventual">Colaborador Eventual?: </label></th>
      <td width="464" >
     
        <p>
          <input name="fun_eventual" type="checkbox" value="fun_eventual" id="fun_eventual" onclick="verificaEmpr(this);"/>

        <div id="divfun_eventual" style="display:none" >
        </p>
        <p>Início:</p>
         
          <input name="data_entrada_ev" type="Text" id="data_entrada_ev" size="15" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
          <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_entrada_ev','yyyyMMdd')" style="cursor:pointer"/>
          
          <p>Fim:</p>
          <input name="data_saida_ev" type="Text" id="data_saida_ev" size="15" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
          <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_saida_ev','yyyyMMdd')" style="cursor:pointer"/>
           <div> 
               <tr>        
          
          
          
          
          
          
          <tr>
<th width="226" align="right" scope="row" ><label for="data_adm">Data de admissão</label></th>
<td>
        <label for="data_adm"></label>
        <input name="data_adm" type="Text" id="data_adm" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_adm','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr>      


          <tr>
<th width="226" align="right" scope="row" ><label for="Hora">Hora de Ativação*</label></th> 
      <td align="left" valign="middle">
<input name="Hora" type="Text" class="input-p" id="Hora" size="25" readonly="readonly" 
style="color: #999; background: #CCC;" value=" <?php date_default_timezone_set('America/Sao_Paulo');
echo $hora = date('H:i:s'); ?>" input></td>





        	<td>&nbsp;</td>
        
        	<td width="49">&nbsp;</td>
    </tr>



  
  
  
  
  
          <tr>
<th width="226" align="right" scope="row" ><label for="usuario">Ativado por *</label></th> 
      <td align="left">
<input name="usuario" type="Text" class="input-p" id="usuario" size="25" readonly="readonly" 
style="color: #999; background: #CCC;" value="<?php 

//echo utf8_encode($nome);
echo $nome;

?>" input></td>

    </tr>

<?php 

 if($_SESSION["Acesso"] == 'Terceirizados' ){
	include('..\..\Contratos\lista_fun_inativaos\lista_contrato_terceiro.php');
	}
	
	
	 if($_SESSION["Acesso"] == 'Bolsistas' ){
	include('..\..\Contratos\lista_fun_inativaos\lista_contrato_bolsista.php');
	}
	
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	include('..\..\Contratos\lista_fun_inativaos\lista_contrato_mapa.php');
	}

	?>


 <tr>
<th width="226" align="right" scope="row" ><label for="unidade">Unidade *</label></th> 

	  <td><select id="unidade" name="unidade">
      <option value="">Selecione
					
					
					<?php
						$sql = "SELECT unidade,id_unidade FROM tab_unidade WHERE unidade <> 'null' ORDER BY unidade ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["unidade"];
							$id2 = $reg["id_unidade"];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> 
	      <span class="style4"> <tr>
<th width="226" align="right" scope="row" >Cargo*</th>

				<td><select id="cargo" name="cargo">
                <option value="">Selecione
					
                    
					
					<?php
						$sql = "SELECT cargo,id FROM tab_cargo WHERE cargo <> 'null' and vinculo='{$_SESSION['Acesso']}' ORDER BY cargo ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["cargo"];
							$id2 = $reg["id"];
					?>
					<option value= "<?php print("$id2");?>"><?php 
					
					//echo utf8_decode($id); 
					echo $id; 
					
					?>
					</option>
					<?php
					}
					?>
				</select></td>
    </tr></span></td>
    </tr>




          <tr>
<th width="226" align="right" scope="row" ><label for="vinculo">vinculo</label></th>
<td>
<input name="vinculo" type="text"  size="15" id="vinculo"  style="color: #999; background: #CCC;" value="<?php 

 if($_SESSION["Acesso"] == 'Terceirizados' ){
	echo "Terceirizados";
	}
	
	
	 if($_SESSION["Acesso"] == 'Bolsistas' ){
	echo "Bolsistas";
	}
	
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
	echo "Mapa";
	}

	?>" readonly="readonly" />
</td>
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
