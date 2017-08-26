<?php


							$ID_empresa=$_SESSION['empresa'];
							$cpf=$_POST['cpf'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
							$sexo=$_POST['sexo'];
							$filhos=$_POST['filhos'];
							$Complemento=$_POST['Complemento'];
							$telefone=$_POST['telefone'];
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							$Cidade=$_POST['cod_cidades'];
							$Estado=$_POST['cod_estados'];
							$formacao=$_POST['formacao'];
							$n_contrato=$_POST['n_contrato'];
							$data_nasc=$_POST['data_nasc'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$ini_lanagro=$_POST['ini_lanagro'];
							$natura=$_POST['natura'];
							$celular=$_POST['celular'];
							$data_adm=$_POST['data_adm'];
							$sal_base=$_POST['sal_base'];
							$cod_ug=$_POST['cod_ug'];
							$cargo_chefia=@$_POST['cargo_chefia'];
							$bolsista=@$_POST['bolsista'];
							$obs=$_POST['obs'];
						
							$fim_contrato=$_SESSION["fim_contrato"];
							$data_entrada_ev=$_POST['data_entrada_ev'];
							$data_saida_ev=$_POST['data_saida_ev'];


include("dbconexao.php");

// ATRIBUIÇÃO PARA AS CONSULTAS
$consulta_cpf = "SELECT cpf FROM funcionarios WHERE cpf = '$cpf'";
$resultado_cpf = mysql_query($consulta_cpf);



	$consulta_id = "SELECT id FROM funcionarios ORDER BY- id";
$resultado_id = mysql_query($consulta_id, $conexao);
$maior_id = mysql_fetch_array($resultado_id);
$id = $maior_id['id'];
$id++;


// TESTES NO BANCO
if ( mysql_num_rows($resultado_cpf) == 1){
	$cpf = "CPF já cadastrado, por favor digite outro";
	$erro = 's';}
	
	
	


?>



<center>
 
<table cellpadding="0" cellspacing="0" border="0" style=" background-image:url(imagens/fundo_cadastro.png); width:450px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">

	<tr>
    
    	<td colspan="2" style="background-image:url(imagens/fundo_cadastro_topo.png); height:25;">&nbsp;        </td>
	</tr>
    
    
    <tr>
    
    	<td colspan="2">
        <hr style=" width:430px; text-align:center;">
        <p style=" margin:15px; text-align:justify; ">Relatório de cadastro,  não se esqueça da sua ID e da sua SENHA, elas são necessárias para o acesso no site.
        <hr style=" width:430px; text-align:center;"></p>        </td>
	</tr>
 	<tr>
    
 		<td style=" text-align:right; width:150px;">SUA ID : </td>
        <td style=" text-align:left; width:250px;"><?php echo $id; ?></td>
 	</tr>
   
    <tr>
         
 		<td style=" text-align:right;">Empresa : </td>
        <td style=" text-align:left; "><?php echo $ID_empresa; ?></td>
    </tr> 
    
    <tr>
    
    	<td style=" text-align:right;">CPF : </td>
        <td style=" text-align:left;"><?php echo $cpf; ?></td>
    </tr>
    
    <tr>
        
        <td style=" text-align:right;">Nome: </td>
        <td style=" text-align:left;"><?php echo $nome_funcionario; ?></td>
    </tr>
    <tr>
    	<td style=" text-align:right;">Unidade : </td>
      <td ><span style=" text-align:left;"><?php echo $unidade; ?></span></td>
	</tr>
	
    <tr>
  
		<td style=" text-align:right;">Cargo: </td>
		<td><?php echo $cargo; ?></td>
	</tr>
   
    <tr>
    
    	<td style=" text-align:right;">Endereço : </td>
        <td><?php echo $endereco; ?></td>
    </tr>
    
    <tr>
    
    	<td style=" text-align:right;">Escolaridade : </td>
        <td><?php echo $escolaridade; ?></td>
    </tr>
    
    <tr>
    
    	<td style=" text-align:right;">Sexo : </td>
        <td><?php echo $sexo; ?></td>
    </tr>
    
    <tr>
    
    	<td style=" text-align:right;">Filhos: </td>
        <td><?php echo $filhos; ?></td>
    </tr>
    
    <tr>
    
    	<td style=" text-align:right;">Complemento: </td>
        <td><?php echo $Complemento; ?></td>
    </tr>
    
   	<tr>
    
    	<td colspan="2" style=" text-align:center;">
        
        <hr style=" width:430px; text-align:center;">

  <?php if ($erro == 's') {
	
	echo "<p style=\" padding:10px;\">Houve um erro no cadastro, clique <a href=javascript:history.back(-1)>VOLTAR</a> para corrigir.</p>";
	
} else {
	

	



						
							$_SESSION['cpf_Funcionario'] = $cpf=$_POST['cpf'];
							$_SESSION['nome_funcionario_Funcionario'] = $nome_funcionario=$_POST['nome_funcionario'];
							$_SESSION['unidade_Funcionario']=$_POST['unidade'];
							$_SESSION['cargo_Funcionario']=$_POST['cargo'];
							$_SESSION['endereco_Funcionario']=$_POST['endereco'];
							$_SESSION['escolaridade_Funcionario']=$_POST['escolaridade'];
							
							$_SESSION['sexo_Funcionario']=$_POST['sexo'];
							$_SESSION['filhos_Funcionario']=$_POST['filhos'];
							$_SESSION['Complemento_Funcionario']=$_POST['Complemento'];
							$_SESSION['telefone_Funcionario']=$_POST['telefone'];
							$_SESSION['email_Funcionario']=$_POST['email'];
							$_SESSION['Numero_Funcionario']=$_POST['Numero'];
							$_SESSION['Bairro_Funcionario']=$_POST['Bairro'];
							$_SESSION['cod_cidades_Funcionario']=$_POST['cod_cidades'];
							$_SESSION['cod_estados_Funcionario']=$_POST['cod_estados'];
							$_SESSION['formacao_Funcionario']=$_POST['formacao'];
							$_SESSION['n_contrato_Funcionario']=$_POST['n_contrato'];
							$_SESSION['data_nasc_Funcionario']=$_POST['data_nasc'];
							$_SESSION['ini_lanagro_Funcionario']=$_POST['ini_lanagro'];
							$_SESSION['natura_Funcionario']=$_POST['natura'];
							$_SESSION['celular_Funcionario']=$_POST['celular'];
							$_SESSION['data_adm_Funcionario']=$_POST['data_adm'];
							$_SESSION['sal_base_Funcionario']=$_POST['sal_base'];
							$_SESSION['cod_ug_Funcionario']=$_POST['cod_ug'];
							@$_SESSION['cargo_chefia_Funcionario']=@$_POST['cargo_chefia'];
							@$_SESSION['bolsista_Funcionario']=@$_POST['bolsista'];
							$_SESSION['obs_Funcionario']=$_POST['obs'];
						








	echo "<p style=\" padding:10px;\">Dados corretos, <a href=processa_edicao2_funcionario_mapa_bolsista_estagiarios.php>Clique aqui</a> para enviar, ou clique <a href=javascript:history.back(-1)>VOLTAR</a> para corrigir.</p>";
	
}

?>

		<hr style=" width:430px; text-align:center;">
		</td>
    
    </tr>
    
    <tr>
    
    	<td colspan="2" style="background-image:url(imagens/fundo_cadastro_rodape.png); height:25;">&nbsp;</td>
	
    </tr>
    
</table>

</center>

</form>

<?php include("baixo.php")?>