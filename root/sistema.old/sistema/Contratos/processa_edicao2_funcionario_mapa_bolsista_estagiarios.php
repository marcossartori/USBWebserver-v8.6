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

							
							$nome_funcionario=$_POST['nome_funcionario'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
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
							$formacao=$_POST['formacao'];
							$n_contrato=$_POST['n_contrato'];
							$data_nasc=$_POST['data_nasc'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$ini_lanagro=$_POST['ini_lanagro'];
							
							
							$Ativo='Sim';
							
						
							
							$sql="INSERT INTO funcionarios SET
ini_lanagro='$ini_lanagro',nome_funcionario='$nome_funcionario',telefone='$telefone',unidade='$unidade',cargo='$cargo',endereco='$endereco',escolaridade='$escolaridade',sexo='$sexo',filhos='$filhos',Complemento='$Complemento',cargo_chefia='$cargo_chefia',email='$email',Numero='$Numero',Bairro='$Bairro',Cidade='$Cidade',Estado='$Estado',Ativo='$Ativo',n_contrato='$n_contrato',formacao='$formacao',tipo_contrato='$tipo_contrato',data_nasc='$data_nasc'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
								echo "Inserido com sucesso";
								header ("location: http://localhost/sistema/Contratos/link2_contrato.php?pagina=1"); 
								}				
							
						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
				$id=$_POST['id'];

							$nome_funcionario=$_POST['nome_funcionario'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
							$sexo=$_POST['sexo'];
							$formacao=$_POST['formacao'];
							$filhos=$_POST['filhos'];
							$Complemento=$_POST['Complemento'];
							$telefone=$_POST['telefone'];
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							$Cidade=$_POST['Cidade'];
							$Estado=$_POST['estado'];
							$n_contrato=$_POST['n_contrato'];
							$data_nasc=$_POST['data_nasc'];
							$ini_lanagro=$_POST['ini_lanagro'];
							
							

							
							$sql="UPDATE funcionarios SET 
ini_lanagro='$ini_lanagro',nome_funcionario='$nome_funcionario',telefone='$telefone',unidade='$unidade',cargo='$cargo',endereco='$endereco',escolaridade='$escolaridade',sexo='$sexo',filhos='$filhos',Complemento='$Complemento',email='$email',Numero='$Numero',Bairro='$Bairro',Cidade='$Cidade',Estado='$Estado',n_contrato='$n_contrato',formacao='$formacao',n_contrato='$n_contrato',data_nasc='$data_nasc' WHERE id=$id";

				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
					{
				{
 	echo "<script type=\"text/javascript\">
           alert('Funcionrio $nome_funcionario atualizado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

					} 
				break;
				
				
				

				
				
				
				
				

			//DELETAR
			case 'deletar':
				$id=$_POST['id'];
							$nome_funcionario=$_POST['nome_funcionario'];
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
nome_funcionario='$nome_funcionario',empresa='$empresa',telefone='$telefone',unidade='$unidade',cargo='$cargo',bolsista='$bolsista',endereco='$endereco',fiscal='$fiscal',fiscal_sub_1='$fiscal_sub_1',escolaridade='$escolaridade',vinculo='$vinculo',sexo='$sexo',filhos='$filhos',Complemento='$Complemento',email='$email',Numero='$Numero',Bairro='$Bairro',Cidade='$Cidade',Estado='$Estado',Ativo='$Ativo'";

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
					header ("location: http://localhost/sistema/Contratos/link2_contrato.php?pagina=1"); 
					}
								
											
			
			break;
		default:		
			}
		}
	}
?>
