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
							$id=$_POST['id'];
							$Data=$_POST['Data'];
							$Hora=$_POST['Hora'];
							$usuario=$_POST['usuario'];
							$descricao2=$_POST['descricao2'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$data_saida=$_POST['data_saida'];
							$n_contrato=$_SESSION['n_contrato'];
							$unidade=$_SESSION['unidade'];

							$acao='Desativado';
							$Ativo='Nao';
							

							$sql="INSERT INTO desativa_func SET usuario='{$_SESSION['nome']}',Data='$Data',data_saida='$data_saida',Hora='$Hora',descricao2='$descricao2',nome_funcionario='{$_SESSION['nome_funcionario']}',unidade='$unidade',n_contrato='$n_contrato',acao='$acao'";


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
								
					
			                $sql="UPDATE funcionarios SET Ativo='$Ativo' WHERE nome_funcionario='{$_SESSION['nome_funcionario']}' = nome_funcionario='{$_SESSION['nome_funcionario']}'";
																					
							$atualizarSucesso=$objetoConexao->inserir($sql);
				            if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
						
			break;
			
			
			
				
			//ATUALIZAR	
			case 'atualizar':
			
							$id=$_POST['id'];
							$Data=$_POST['Data'];
							$Hora=$_POST['Hora'];
							$usuario=$_POST['usuario'];
							$descricao2=$_POST['descricao2'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$data_saida=$_POST['data_saida'];
							
							$Ativo='Nao';

							
			$sql="UPDATE desativa_func SET usuario='{$_SESSION['nome']}',Data='$Data',Hora='$Hora',descricao2='$descricao2',nome_funcionario='{$_SESSION['nome_funcionario']}',Ativo='$Ativo',data_saida='$data_saida' 
			WHERE id=$id";

				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
				
				{
 	echo "<script type=\"text/javascript\">
           alert('Funcionário $nome_funcionario desativado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

			}
		}
	}
?>
