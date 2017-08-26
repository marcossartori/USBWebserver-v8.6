<?php


include('C:\wamp\www\sistema\validacao\testa_adm.php');
	
	 
	
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

			






							
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$fiscal = $_SESSION["nome"];
							$Ativo='Sim';
							
						
							
							$sql="INSERT INTO contratos SET
n_processo='$n_processo',n_contrato='$n_contrato',descricao='$descricao',empresa='$empresa',valor_contrato='$valor_contrato', valor_mensal='$valor_mensal',vigencia='$vigencia',Ativo='$Ativo',tipo_contrato='$tipo_contrato'";

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
			
							$id=$_POST['id'];
							
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$fiscal = $_SESSION["nome"];
							

							
							$sql="UPDATE contratos SET 
n_processo='$n_processo',n_contrato='$n_contrato',descricao='$descricao',empresa='$empresa',valor_contrato='$valor_contrato', valor_mensal='$valor_mensal',vigencia='$vigencia',tipo_contrato='$tipo_contrato' WHERE id=$id";

				
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
