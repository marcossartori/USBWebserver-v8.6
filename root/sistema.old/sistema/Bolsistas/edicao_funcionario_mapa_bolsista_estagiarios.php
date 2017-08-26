<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body link="##063" vlink="##063" alink="##063">
<p>





<?php
	//echo "identificador(id):";
	//echo $_GET['id'];
?>

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



<form id="form1" name="form1" method="post" action="processa_edicao2_funcionario_mapa_bolsista_estagiarios.php">
  <p>&nbsp;</p>
  <table width="524" border="0" align="center">
  
  
  <tr>
    
    
    	<td colspan="2" style="font-size:15px; color:#000;">
        <hr style=" width:490px; text-align:center;">
        <p style="margin:15px; text-align:justify;"> Edição funcionário: <b><?php echo $dado_adm['nome_funcionario'];?><b>
        															<?php $nome_funcionario=$_SESSION['nome_funcionario'] = $dado_adm['nome_funcionario'];?>
                                                                   
        <hr style=" width:490px; text-align:center;"></p>        </td>
        

	</tr>
  
  
  	<tr>
      <th align="center" scope="row">ID</th>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" value="<?php echo $dado_adm['id'];?>" readonly="true" /></td>
    </tr> 
    

  <tr align="center">
  <td>

          <?php 
	  
	  
	  {
	  
	   if($_SESSION["tipo_contrato"] == 'Terceirizados') {
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Terceirizados.php');  
	}
	
		 if($_SESSION["tipo_contrato"] == 'Mapa' ){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Mapa.php');  
	}

					 if($_SESSION["tipo_contrato"] == 'Bolsistas' ){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Bolsista.php');  
	}
	
	
	
						 if($_SESSION["tipo_contrato"] == 'Estagiarios'){
	include('C:\wamp\www\sistema\Contratos\select_cargos_terceiros\select_cargos_Estagiario.php');  
	}
	  
	  
	  }

	  ?>
      </td>
   	</tr>
  
    
    
    
  	<tr>
      <th align="center" scope="row">Empresa</th>
      <td><label for="empresa"></label>
      <input name="empresa" type="text" id="empresa" value="<?php echo $dado_adm['empresa'];?>" readonly="readonly" /></td>
    </tr> 

     
     

    <tr>
      <th align="center" scope="row">Contrato</th>
      <td><label for="n_contrato"></label>
      <input name="n_contrato" type="text" id="n_contrato" value="<?php echo $dado_adm['n_contrato'];?>" readonly="readonly" /></td>
    </tr>
   
    <tr>
      <th align="center" scope="row">Nome do Funcionário</th>
      <td><label for="nome_funcionario"></label>
      <input name="nome_funcionario" type="text" id="nome_funcionario" value="<?php echo $dado_adm['nome_funcionario'];?>" /></td>
    </tr>
    
    
        <tr>
      <th align="center" scope="row">Data de Nascimento</th>
      <td><label for="data_nasc"></label>
      <input name="data_nasc" type="text" id="data_nasc" value="<?php echo $dado_adm['data_nasc'];?>" readonly="readonly" /></td>
    </tr>

    
    <tr>
      <th align="center" scope="row">Telefone</th>
      <td><input name="telefone" type="text" id="telefone" value="<?php echo $dado_adm['telefone'];?>" /></td>
    </tr>
    
    
       <tr>
      <th align="center" scope="row">Email</th>
      <td><label for="email"></label>
      <input name="email" type="text" id="email" value="<?php echo $dado_adm['email'];?>" /></td>
    </tr>
    
    
        <tr>
      <th align="center" scope="row">Endereco</th>
      <td><input name="endereco" type="text" id="endereco" value="<?php echo $dado_adm['endereco'];?>" /></td>
    </tr>
    
    
          <tr>
      <th align="center" scope="row">Número</th>
      <td><input name="Numero" type="text" id="Numero" value="<?php echo $dado_adm['Numero'];?>" /></td>
    </tr>
    
    
    
    
              <tr>
      <th align="center" scope="row">Complemento</th>
      <td><input name="Complemento" type="text" id="Complemento" value="<?php echo $dado_adm['Complemento'];?>" /></td>
    </tr>
    
    
                  <tr>
      <th align="center" scope="row">Bairro</th>
      <td><input name="Bairro" type="text" id="Bairro" value="<?php echo $dado_adm['Bairro'];?>" /></td>
    </tr>
    
    
    
                                          
                                          
    <tr>
      <th align="center" scope="row">Vínculo</th>
      <td><label for="tipo_contrato"></label>
      <input name="tipo_contrato" type="text" id="tipo_contrato" value="<?php echo $dado_adm['tipo_contrato'];?>" /></td>
    </tr>
    
    
        <tr align="center">
      <td>

      <?php

				{
 					
					if ($_SESSION['tipo_contrato'] == 'Mapa') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_mapa.php'); 
					}		
					
					if ($_SESSION['tipo_contrato'] == 'Estagiarios') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_ciee.php'); 
				}
				
					if ($_SESSION['tipo_contrato'] == 'Terceirizados') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_terceirizado.php');  
					}
					if ($_SESSION['tipo_contrato'] == 'Bolsistas') {
						include('C:\wamp\www\sistema\Contratos\forumularios\form_cnpq.php');  

 					}
				}
 					
					?>	                                
         </td>                                
    </tr>               

  </table>
  <p align="center">&nbsp;</p>
  <p align="center">
    <label>
      <input type="submit" name="atualizar" id="atualizar" value="Salvar">
  </label>
    <label>

   
   
    <input type="button" name="cancelar"  value="cancelar"  onclick="window.history.go(-1)">
    </label>
  </p>

</form>

</body>
</html>
