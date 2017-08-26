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


<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/lib/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/jquery-validation/dist/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/sample/datetimepicker_css.js"></script> 
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/funcao_Fun.js"></script>
<script language="JavaScript" type="text/javascript" src="../../sistema/validacao/MascaraValidacao.js"></script> 


<link rel="stylesheet" 
type="text/css"href="../../sistema/forme.css" 
/> 
<link rel="stylesheet" 
type="text/css"href="../../sistema/imput.css" 
/> 

<link rel="stylesheet" 
type="text/css"href="../../sistema/validacao/mensagens.css" 
/> 

<?php
$nome = $_SESSION["nome"];

@$_SESSION["fiscal"]; 
@$_SESSION["fiscal_sub_1"]; 
@$_SESSION["fiscal_sub_2"]; 
@$_SESSION["fiscal_sub_3"]; 
@$_SESSION["fiscal_sub_4"]; 
@$_SESSION["id"];









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

<form id="form1" name="form1" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">
<?php  $_SESSION["fim_contrato"] ?>


  <table   border="0" align="center" width="677">

  
  
  
        <tr>
	  
	      		 <td colspan="2" style="text-align:center;
            						background-color:#FFF;
                                    font-size:20px; color:#060;
            						width:750;
            						">
                                    <p>&nbsp;</p>
                                   <b>Cadastro de Funcionários </b>
								    <p>&nbsp;</p>
    	 </td>
		 </tr> 
  
  
  
  
  
  
  <tr>
  <td height="60" colspan="2" align="center" style="font-size:15px; color:#060;">
  
		<p>Empresa: <b><?php
		
		

			
			
			$linhaid=$_SESSION['empresa'];
			$linha_adm3 = "SELECT * FROM tab_empresa where id='$linhaid'";
			
			 			include('..\..\sistema\validacao\dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {
	
			echo "<a href='"; 
			echo "../../sistema/Empresas/visualizar_edit_empresa.php?id=";
			echo $dado_adm3['id'];
			echo "'>";
			  
			//echo utf8_decode($dado_adm3['empresa']); echo "</a>";
			
			echo $dado_adm3['empresa']; echo "</a>";
			echo "</td>";
			
						 }
			 
								}

		
		?>
        
         <input name="empresa" type="hidden" id="empresa" size="25" value="<?php echo $_SESSION['empresa']; ?>" maxlength="25" readonly="readonly"/>
    </p>
    <p>&nbsp;</p></td><tr>





            <tr>
<th width="205" align="right" scope="row" ><label for="data_adm">Data de admissão*</label></th>
<td>
        <label for="data_adm"></label>
        <input name="data_adm" type="Text" id="data_adm" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_adm','yyyyMMdd')" style="cursor:pointer"/>
 </td>
    </tr> 


		  
		
  <?php 
	  
	  
	  {
	  
	   if($_SESSION["tipo_contrato"] == 'Terceirizados') {
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Terceirizados.php');  
	}
	
		 if($_SESSION["tipo_contrato"] == 'Mapa' ){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Mapa.php');  
	}

					 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Bolsista.php');  
	}
	
	
	
						 if($_SESSION["tipo_contrato"] == 'Estagiarios'){
	include('..\..\sistema\Contratos\select_cargos_terceiros\select_cargos_Estagiario.php');  
	}
	  
	  
	  }

	  ?>



    <tr>
<th width="205" align="right" scope="row" ><label for="fun_eventual">Colaborador Eventual?: </label></th>
      <td width="462" >
     
        <p>
          <input name="fun_eventual" type="checkbox" value="fun_eventual" id="fun_eventual" onclick="verificaEmpr(this);"/>

        <div id="divfun_eventual" style="display:none" >
        </p>
        <p>Início:</p>
         
          <input name="data_entrada_ev" type="Text" id="data_entrada_ev" size="15" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
          <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_entrada_ev','yyyyMMdd')" style="cursor:pointer"/>
          
          <p>Fim:</p>
          <input name="data_saida_ev" type="Text" id="data_saida" size="15" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
          <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_saida','yyyyMMdd')" style="cursor:pointer"/>
           <div> 
               <tr>





          <tr>
<th width="205" align="right" scope="row" ><label for="nome_funcionario">Nome do funcionário:*</label></th>
      <td >
        <input name="nome_funcionario" type="text" class="input-p" id="nome_funcionario"/>
      </td>
    </tr>
    
    
          <tr>
<th width="205" align="right" scope="row" ><label for="cpf">CPF:*</label></th>
      <td >
        <input name="cpf" type="text" class="input-p" id="cpf" onKeyPress="MascaraCPF(form1.cpf);" maxlength="14"/>
      </td>
    </tr>


               <tr>
<th width="205" align="right" scope="row" ><label for="data_nasc">Data de Nascimento:*</label></th>
 <td>
        <input name="data_nasc" type="Text" id="data_nasc" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('data_nasc','yyyyMMdd')" style="cursor:pointer"/>
 </td>
       </tr>
	   
	   
	   
	                  <tr>
<th width="205" align="right" scope="row" ><label for="data_nasc">Inicio no LANAGRO:*</label></th>
 <td>
        <input name="ini_lanagro" type="Text" id="ini_lanagro" size="25" maxlength="25" style="color: #999; background: #CCC;" readonly="readonly"/>
        <img src="../../sistema/sample/images2/cal.gif" onclick="javascript:NewCssCal ('ini_lanagro','yyyyMMdd')" style="cursor:pointer"/>
 </td>
       </tr>



       
               <tr>
<th width="205" align="right" scope="row" ><label for="tipo_contrato">Vínculo:*</label></th>
      <td ><input name="tipo_contrato" type="text" class="input-p" id="tipo_contrato" style="color: #999; background: #CCC;" value="<?php echo $tipo_contrato = $_SESSION["tipo_contrato"];?>" readonly="readonly" /></td>
    </tr>

               <tr>
<th width="205" align="right" scope="row" ><label for="n_contrato">Contrato:*</label></th>
      <td ><input name="n_contrato" type="text" class="input-p" id="n_contrato" style="color: #999; background: #CCC;" value="<?php echo $n_contrato = $_SESSION["n_contrato"];?>" readonly="readonly" /></td>
    </tr>




 <tr>
 <th width="205" align="right" scope="row" >Unidade Gestora</th>

				<td><select id="cod_ug" name="cod_ug">
              
                <!--<option value="">Selecione-->
			
					
					<?php
						$sql = "SELECT cod_ug,id_ug FROM unidade_ges WHERE cod_ug <> 'null' ORDER BY cod_ug ASC";
						$executar = mysql_query($sql) or die(mysql_error());
						while($reg = mysql_fetch_array($executar))
						{
							$id = $reg["cod_ug"];
							$id2 = $reg["id_ug"];
					?>
					<option value= "<?php print("$id2");?>"><?php print("$id");?>
					</option>
					<?php
					}
					?>
				</select> </td>
                   </tr>
    

               <tr>
<th width="205" align="right" scope="row" ><label for="sal_base">Salario Base:</label></th>
      <td ><input name="sal_base" type="text" class="input-p" id="sal_base" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
    </tr>
    


               <tr>
<th width="205" align="right" scope="row" ><label for="telefone">Telefone:*</label></th>
      <td ><input name="telefone" type="text" class="input-p" id="telefone" onKeyPress="MascaraTelefone(form1.telefone);" 
maxlength="14" /></td>
    </tr>
    
    
    
                   <tr>
<th width="205" align="right" scope="row" ><label for="telefone">Celular:*</label></th>
      <td ><input name="celular" type="text" class="input-p" id="celular" onKeyPress="MascaraTelefone(form1.celular);" 
maxlength="14" /></td>
    </tr>
    
    
    
               <tr>
<th width="205" align="right" scope="row" ><label for="email">Email:*</label></th>
      <td ><input name="email" type="text" class="input-p" id="email" /></td>
    </tr>
    
    
               <tr>
<th width="205" align="right" scope="row" ><label for="endereco">Endereço:*</label></th>
      <td ><input name="endereco" type="text" class="input-p" id="endereco" /></td>
    </tr>
    
               <tr>
<th width="205" align="right" scope="row" ><label for="Numero">Número:*</label></th>
      <td ><input name="Numero" type="text" class="input-p" id="Numero" onkeypress="mascaraInteiro(form1.Numero);" /></td>
    </tr>
    
               <tr>
<th width="205" align="right" scope="row" ><label for="Complemento">Complemento:</label></th>
      <td ><input name="Complemento" type="text" class="input-p" id="Complemento" /></td>
    </tr>
    
    
               <tr>
<th width="205" align="right" scope="row" ><label for="Bairro">Bairro:*</label></th>
      <td ><input name="Bairro" type="text" class="input-p" id="Bairro" /></td>
    </tr>




               <tr>
<th width="205" align="right" scope="row" ><label for="natura">Naturalidade*</label></th>
      <td ><input name="natura" type="text" class="input-p" id="natura" /></td>
    </tr>


 <?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('..\..\sistema\Contratos\forumularios\form_mapa.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('..\..\sistema\Contratos\forumularios\form_ciee.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('..\..\sistema\Contratos\forumularios\form_terceirizado.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('..\..\sistema\Contratos\forumularios\form_cnpq.php');  

 					}
				}
 					
					?>	 
                   

          <tr>
<th width="205" height="154" align="right" scope="row" ><label for="descricao">Observações: </label></th> 
      <td ><textarea name="obs"  id="obs" cols="60" rows="7">
      </textarea></td>
    </tr>

  </table>
  
  <p class="style1" align="center">
    <input type="submit" name="inserir" id="inserir" value="Gravar"/>
  (*) Campos OBRIGATÓRIOS</p>
  <br />
  
</form>


   
</body>
</html>
