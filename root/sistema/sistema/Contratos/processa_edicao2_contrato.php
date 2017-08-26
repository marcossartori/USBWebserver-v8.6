<?php


include('C:\wamp\www\sistema\validacao\testa_adm.php');
	
include('C:\wamp\www\sistema\validacao\somar_data.php');
 
	
?>





<?php
require 'C:\wamp\www\sistema\validacao\class_conexao2.php';

function get_post_action($name)
	{
    $params = func_get_args();
        foreach ($params as $name) 
		{
        if (isset($_POST[$name])) 
			{
            return $name;
			}
		}
	}
$objetoConexao = new conexao();

$objetoConexao->defineServidor("localhost");
$objetoConexao->defineUsuario("root");
$objetoConexao->defineSenha("root");

$objetoConexao->abrirConexao();

if ($objetoConexao->estaConectado() == false)
	{
	//echo "Conexao nao realizada!";
	//print "<pre>";
	} 
else 
	{
	//echo "Conexao realizada!";
	//print "<pre>";
	$objetoConexao->defineNomedobanco("lanagro_rs");
	$objetoConexao->selecionaBanco();
	if ($objetoConexao->estaComBancoSelecionado()==false) 
		{
		echo "Nao conseguiu selecionar o banco de dados";
		print "<pre>";
		} 
	else 
		{
		switch (get_post_action('inserir', 'atualizar', 'deletar')) 
			{
			
			//INSERIR
			case 'inserir':

							$id_fiscal=$_SESSION['id'];
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							$fiscal_sub_1=$_POST['fiscal_sub_1'];
							$fiscal_sub_2=$_POST['fiscal_sub_2'];
							$fiscal_sub_3=$_POST['fiscal_sub_3'];
							$fiscal_sub_4=$_POST['fiscal_sub_4'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$fiscal = $_SESSION["nome"];
							$email	= $_SESSION["email"];
							
							$Ativo='Sim';



  							 	$renovacao_01 = somar_data($vigencia, 0, 0, 1);
 								$renovacao_02 = somar_data($renovacao_01, 0, 0, 1);
 								$renovacao_03 = somar_data($renovacao_02, 0, 0, 1); 
 								$renovacao_04 = somar_data($renovacao_03, 0, 0, 1);
								$fim_contrato = somar_data($vigencia, 0, 0, 5);	


							$sql="INSERT INTO contratos SET
fim_contrato='$fim_contrato',n_processo='$n_processo',n_contrato='$n_contrato',descricao='$descricao',empresa='$empresa',valor_contrato='$valor_contrato', valor_mensal='$valor_mensal',vigencia='$vigencia',fiscal_sub_1='$fiscal_sub_1',fiscal_sub_2='$fiscal_sub_2',fiscal_sub_3='$fiscal_sub_3',fiscal_sub_4='$fiscal_sub_4',fiscal='{$_SESSION['nome']}',Ativo='$Ativo',tipo_contrato='$tipo_contrato',email='$email',id_fiscal='$id_fiscal'";


 $cadastro_adm = "INSERT INTO renovacao_01 SET 
 renovacao_01 = '$renovacao_01'
 ,n_contrato='$n_contrato'
 ,email='$email'
 ,id_fiscal='$id_fiscal'
 ";
mysql_query($cadastro_adm);


 $cadastro_adm2 = "INSERT INTO renovacao_02 SET 
 renovacao_02 = '$renovacao_02'
 ,n_contrato='$n_contrato'
 ,email='$email'
 ,id_fiscal='$id_fiscal'
 ";
mysql_query($cadastro_adm2);

 $cadastro_adm3 = "INSERT INTO renovacao_03 SET 
 renovacao_03 = '$renovacao_03'
 ,n_contrato='$n_contrato'
 ,email='$email'
 ,id_fiscal='$id_fiscal'
 ";
mysql_query($cadastro_adm3);


 $cadastro_adm4 = "INSERT INTO renovacao_04 SET 
 renovacao_04 = '$renovacao_04'
 ,n_contrato='$n_contrato'
 ,email='$email'
 ,id_fiscal='$id_fiscal'
 ";
mysql_query($cadastro_adm4);











							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
								echo "Inserido com sucesso";
								header ("location: link2_contrato.php?pagina=1"); 
								}				
								

						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
			
							$id_fiscal=$_SESSION['id'];
							$id=$_POST['id'];
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							
							
							$fiscal_sub_1=$_POST['fiscal_sub_1'];
							$fiscal_sub_2=$_POST['fiscal_sub_2'];
							$fiscal_sub_3=$_POST['fiscal_sub_3'];
							$fiscal_sub_4=$_POST['fiscal_sub_4'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$fiscal = $_SESSION["nome"];
							$email	= $_SESSION["email"];
							
							$Ativo=$_POST['Ativo'];
							
							
								$renovacao_01 = somar_data($vigencia, 0, 0, 1);
 								$renovacao_02 = somar_data($renovacao_01, 0, 0, 1);
 								$renovacao_03 = somar_data($renovacao_02, 0, 0, 1); 
 								$renovacao_04 = somar_data($renovacao_03, 0, 0, 1);
								$fim_contrato = somar_data($vigencia, 0, 0, 5);									

							
							$sql="UPDATE contratos SET 
fim_contrato='$fim_contrato',n_processo='$n_processo',n_contrato='$n_contrato',descricao='$descricao',empresa='$empresa',valor_contrato='$valor_contrato', valor_mensal='$valor_mensal',vigencia='$vigencia',fiscal_sub_1='$fiscal_sub_1',fiscal_sub_2='$fiscal_sub_2',fiscal_sub_3='$fiscal_sub_3',fiscal_sub_4='$fiscal_sub_4',fiscal='{$_SESSION['nome']}',Ativo='$Ativo',tipo_contrato='$tipo_contrato',email='$email',id_fiscal='$id_fiscal' WHERE id=$id";



 $cadastro_adm = "UPDATE renovacao_01 SET
 renovacao_01 = '$renovacao_01'
 ,id_fiscal='$id_fiscal'
WHERE renovacao_01.n_contrato = '$n_contrato'";
mysql_query($cadastro_adm);


 $cadastro_adm2 = "UPDATE renovacao_02 SET
 renovacao_02 = '$renovacao_02'
 ,id_fiscal='$id_fiscal'
WHERE renovacao_02.n_contrato = '$n_contrato'";
mysql_query($cadastro_adm2);

 $cadastro_adm3 = "UPDATE renovacao_03 SET 
 renovacao_03 = '$renovacao_03'
 ,id_fiscal='$id_fiscal'
WHERE renovacao_03.n_contrato = '$n_contrato'";
mysql_query($cadastro_adm3);


 $cadastro_adm4 = "UPDATE renovacao_04 SET
 renovacao_04 = '$renovacao_04'
 ,id_fiscal='$id_fiscal'
WHERE renovacao_04.n_contrato = '$n_contrato'";
mysql_query($cadastro_adm4);


 $cadastro_adm5 = "UPDATE contratos SET

 email='$email'
 ,id_fiscal='$id_fiscal'
WHERE contratos.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm5);


 $cadastro_adm6 = "UPDATE renovacao_01  SET

 email='$email'
WHERE renovacao_01.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm6);



 $cadastro_adm7 = "UPDATE renovacao_02  SET

 email='$email'
WHERE renovacao_02.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm7);


 $cadastro_adm8 = "UPDATE renovacao_03  SET

 email='$email'
WHERE renovacao_03.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm8);


 $cadastro_adm9 = "UPDATE renovacao_04  SET

 email='$email'
WHERE renovacao_04.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm9);





				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
				
				{
 	echo "<script type=\"text/javascript\">
           alert('Contrato $n_contrato atualizado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

	
				break;

			//DELETAR
			case 'deletar':
				$id=$_POST['id'];
							$n_processo=$_POST['n_processo'];
							$empresa=$_POST['empresa'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$bolsista=$_POST['bolsista'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
							$vinculo=$_POST['vinculo'];
							$sexo=$_POST['sexo'];
							$filhos=$_POST['filhos'];
							$Complemento=$_POST['Complemento'];
							$cargo_chefia=$_POST['cargo_chefia'];
							$telefone=$_POST['telefone'];
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							$Cidade=$_POST['Cidade'];
							$Estado=$_POST['estado'];
							$fiscal=$_POST['fiscal'];
							$fiscal_sub_1=$_POST['fiscal_sub_1'];
							$Ativo=$_POST['Ativo'];
							
							$sql="INSERT INTO funcionarios_inativos SET
n_processo='$n_processo',empresa='$empresa',telefone='$telefone',unidade='$unidade',cargo='$cargo',bolsista='$bolsista',endereco='$endereco',fiscal='$fiscal',fiscal_sub_1='$fiscal_sub_1',escolaridade='$escolaridade',vinculo='$vinculo',sexo='$sexo',filhos='$filhos',Complemento='$Complemento',cargo_chefia='$cargo_chefia',email='$email',Numero='$Numero',Bairro='$Bairro',Cidade='$Cidade',Estado='$Estado',Ativo='$Ativo'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								$sql="DELETE FROM funcionarios WHERE id = $id";
				$deletouSucesso=$objetoConexao->deletar($sql);
				if ($deletouSucesso == false)
					{
					echo "Erro ao deletar".$sql;
					}
				else
					{
					echo "Deletado com sucesso";
					header ("location: link2_contrato.php?pagina=1"); 
					}
								
											
			
			break;
		default:		
			}
		}
	}
?>
