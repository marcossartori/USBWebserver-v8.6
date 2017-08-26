<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/funcao_Fun.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 



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
type="text/css"href="../../sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/> 

</head>
<body link="##063" vlink="##063" alink="##063">
<p>



<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
	
$nome = $_SESSION["nome"]; echo "<br>";

$_SESSION["fiscal_sub_1"]; echo "<br>";
$_SESSION["fiscal_sub_2"]; echo "<br>";
$_SESSION["fiscal_sub_3"]; echo "<br>";
$_SESSION["fiscal_sub_4"]; echo "<br>";
	
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


	
        <tr>

    	<td colspan="2" bgcolor="#D6D6D6" style="font-size:15px; color:#FF0000; ">
        <hr style=" width:750px; text-align:center;">
         <b>Edição Funcionário<b>
        <p style=" margin:10px; text-align:justify; ">
        <b>

                                                                
        <hr style=" width:750px; text-align:center;">
        </p></td>


    </tr>
		
		
		
		
		
		
		
		
		
		
		

<form id="form1" name="form1" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">




  <p>&nbsp;</p>
  <table width="750" border="0" align="center">

    <tr>
    	<td colspan="2" style="font-size:12px; color:#000;">
        
        <p style=" margin:15px; text-align:justify; "> Funcionário (a): <b><?php 
			echo "<a href='"; 
			echo "../../sistema/Contratos/visualizar_edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $_SESSION["id_fun"];
			echo "'>";
			echo $_SESSION['nome_funcionario']; echo "</a>"; ?></b>
        <span style=" margin:15px; text-align:justify; ">Contrato: <b><?php echo $n_contrato = $_SESSION["n_contrato"];?></b></span>        
        <p style=" margin:15px; text-align:justify; ">   Empresa: <b>
        
        <?php
		
						 if($dado_adm['Ativo'] == 'Nao' ){
	echo "Indefinida";
	}
	
	
	
	
	
	$linha_adm3 = "SELECT * FROM tab_empresa where id='{$dado_adm['ID_empresa']}'";
			
			 			include('..\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			
	
			echo "<a href='"; 
			echo "../Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm3['id'];
			echo "'>";
			echo $dado_adm3['empresa']; echo "</a>";
			
			
						 }
	
?>
<br />
<br />

      <?php include('..\..\sistema\validacao\menu\funcionarios\menu_visualiza_fun_rodape.php');?>  
          <input name="empresa" type="hidden" id="empresa" size="25" value="<?php $dado_adm['ID_empresa']; ?>" maxlength="25" readonly="readonly"/>

        
        </b>       
   
<td colspan="2" style="font-size:12px; color:#000;"></td>
	</tr>

  
  	<tr>
      <th align="right" scope="row">&nbsp;</th>
      <td><label for="id"></label>
      <input name="id" type="hidden" id="id" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr>


    
    
    
    
    
            <tr>
      <th align="right" scope="row">Contrato: </th>
      <td><label for="n_contrato"></label>
      <input name="n_contrato" type="text" id="n_contrato" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['n_contrato'];?>" readonly="readonly" /></td>
    </tr>
    
                <tr>
      <th align="right" scope="row">Vínculo: </th>
      <td><label for="tipo_contrato"></label>
      <input name="tipo_contrato" type="text" id="tipo_contrato" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['tipo_contrato'];?>" readonly="readonly" /></td>
    </tr>
    
  
  
  
                  <tr>
      <th align="right" scope="row">Salario Base R$: </th>
      <td><label for="sal_base"></label>
      <input name="sal_base" type="text" id="sal_base"  value="<?php echo $dado_adm['sal_base'];?>" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
    </tr>  
    
    
            <tr align="right">
      <td>

      <?php 
	  
	  
	  {
	  
	   if($_SESSION["tipo_contrato"] == 'Terceirizados') {
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Terceirizados_edicao.php');  
	}
	
		 if($_SESSION["tipo_contrato"] == 'Mapa' ){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Mapa_edicao.php');  
	}

					 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Bolsista_edicao.php');  
	}
	
	
	
						 if($_SESSION["tipo_contrato"] == 'Estagiarios'){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Estagiario_edicao.php');  
	}
	  
	  
	  }

	  ?>
      </td>
     </tr>


   
    <tr>
      <th align="right" scope="row">Nome do Funcionário: </th>
      <td><label for="nome_funcionario"></label>
      <input name="nome_funcionario" type="text" id="nome_funcionario" size="30" value="<?php echo $dado_adm['nome_funcionario'];?>" /></td>
    </tr>
    
    
    
        <tr>
      <th align="right" scope="row">CPF: </th>
      <td><input name="cpf" type="text" id="cpf" onKeyPress="MascaraCPF(form1.cpf);" value="<?php echo $dado_adm['cpf'];?>" style="color: #999; background: #CCC;" maxlength="14" readonly="readonly"/></td>
    </tr>
    
    

            <tr>
<th width="226" align="right" scope="row" >Unidade Gestora*</th>

				<td><select id="cod_ug" name="cod_ug">
					
					
					<?php
						$sql = "SELECT cod_ug,id_ug FROM unidade_ges WHERE cod_ug <> 'null'  ORDER BY cod_ug ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg['cod_ug'];
					?>
<option value="<?php echo $reg["id_ug"];?>" <?php if ($reg["id_ug"] == $dado_adm['cod_ug']) { echo "SELECTED"; } else { echo ""; }; ?>><?php echo $reg['cod_ug'];?></option>
					<?php
					}
					?>
				</select>  </td>
    </tr>


           <tr>
      <th align="right" scope="row">Data de Nascimento: </th>
      <td>
      
        <label for="data_nasc"></label>
        <input name="data_nasc" type="Text" id="data_nasc" maxlength="25" size="25" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['data_nasc'];?>" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_nasc','yyyyMMdd')" style="cursor:pointer"/>
      
      </td>
	
           <tr>
      <th align="right" scope="row">Inicio no LANAGRO: </th>
      <td>
      
        <label for="ini_lanagro"></label>
        <input name="ini_lanagro" type="Text" id="ini_lanagro" maxlength="25" size="25" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['ini_lanagro'];?>" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('ini_lanagro','yyyyMMdd')" style="cursor:pointer"/>
      
      </td>
    </tr>
   
   
   
   
              <tr>
      <th align="right" scope="row">Data de admissão: </th>
      <td>
      
        <label for="data_adm"></label>
        <input name="data_adm" type="Text" id="data_adm" maxlength="25" size="25" style="color: #999; background: #CCC;" value="<?php echo $dado_adm['data_adm'];?>" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_adm','yyyyMMdd')" style="cursor:pointer"/>
      
      </td>
    </tr>
   
   
    
    <tr>
      <th align="right" scope="row">Telefone: </th>
      <td><input name="telefone" type="text" id="telefone" value="<?php echo $dado_adm['telefone'];?>" onKeyPress="MascaraTelefone(form1.telefone);" maxlength="14" /></td>
    </tr>
    
    
    
        <tr>
      <th align="right" scope="row">Celular: </th>
      <td><input name="celular" type="text" id="celular" value="<?php echo $dado_adm['celular'];?>" onKeyPress="MascaraTelefone(form1.celular);" maxlength="14" /></td>
    </tr>
    
    
       <tr>
      <th align="right" scope="row">Email: </th>
      <td><label for="email"></label>
      <input name="email" type="text" id="email" size="30" value="<?php echo $dado_adm['email'];?>" /></td>
    </tr>
    
    
        <tr>
      <th align="right" scope="row">Endereco: </th>
      <td><input name="endereco" type="text" id="endereco" size="30" value="<?php echo $dado_adm['endereco'];?>" /></td>
    </tr>
    
    
          <tr>
      <th align="right" scope="row">Número: </th>
      <td><input name="Numero" type="text" id="Numero" value="<?php echo $dado_adm['Numero'];?>" /></td>
    </tr>
    
    
    
    
              <tr>
      <th align="right" scope="row">Complemento: </th>
      <td><input name="Complemento" type="text" id="Complemento" value="<?php echo $dado_adm['Complemento'];?>" /></td>
    </tr>
    
    
                  <tr>
      <th align="right" scope="row">Bairro: </th>
      <td><input name="Bairro" type="text" id="Bairro" value="<?php echo $dado_adm['Bairro'];?>" /></td>
    </tr>


                  <tr>
      <th align="right" scope="row">Naturalidade: </th>
      <td><input name="natura" type="text" id="natura" value="<?php echo $dado_adm['natura'];?>" /></td>
    </tr>




      
      <?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('..\..\sistema\Contratos\forumularios\form_mapa_edicao.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('..\..\sistema\Contratos\forumularios\form_ciee_edicao.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('..\..\sistema\Contratos\forumularios\form_terceirizado_edicao.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('..\..\sistema\Contratos\forumularios\form_cnpq_edicao.php');  

 					}
				}
 					
					?>	                                
         </td>                                
    </tr>                                
                             

       <tr>
      <th align="right" scope="row">Observações: </th>
      <td><label for="obs"></label>
      
      
      <textarea name="obs"  id="obs" cols="45" rows="5" value="obs"><?php echo $dado_adm['obs'];?></textarea>
      </td>
    </tr>



       <?php
 $_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];
 $_SESSION['Cidade'] = $dado_adm['Cidade'];	
 $_SESSION['n_contratoF'] = $dado_adm['n_contrato'];	
 $_SESSION['Estado'] = $dado_adm['Estado'];
 $_SESSION['celular'] = $dado_adm['celular'];		 
 $_SESSION['formacao'] = $dado_adm['formacao'];
 $_SESSION["telefone"] = $dado_adm['telefone'];
 $_SESSION["data_nasc"] = $dado_adm['data_nasc'];
 $_SESSION["ini_lanagro"] = $dado_adm['ini_lanagro'];
 $_SESSION["email"] = $dado_adm['email'];
 $_SESSION["nome"];
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



    <tr>
    <td align="right" >&nbsp;</td>
     
     
         <td align="right" >
    <label>
     <input type="submit" name="atualizar" id="atualizar" value="Salvar">
    <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
    </label>
     </td>
    <tr>
 
 

 

  </table>


</form>

</body>
</html>
