<?php


include('..\..\validacao\testa_adm.php');
	
	 
	
?>





<?php
require '..\..\validacao\class_conexao2.php';

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

							$Data=$_POST['Data'];
							$Hora=$_POST['Hora'];
							$usuario=$_POST['usuario'];
							$descricao2=$_POST['descricao2'];
							$renovacao_01=$_POST['renovacao_01'];
							$confirmacao_01 = "Sim";




							
							$sql="INSERT INTO renovacao SET usuario='{$_SESSION['nome']}',Data='$Data',Hora='$Hora',descricao2='$descricao2',n_contrato='{$_SESSION['n_contrato']}'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
								echo "Inserido com sucesso";
								header ("location: ../../Contratos/link2_contrato.php?pagina=1"); 
								}				
								
					
			                $sql="UPDATE contratos SET renovacao_01='$renovacao_01' WHERE n_contrato = '{$_SESSION['n_contrato']}'";
																					
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

							
			$sql="UPDATE renovacao SET usuario='{$_SESSION['nome']}',Data='$Data',Hora='$Hora',descricao2='$descricao2' WHERE id=$id";

				
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

			}
		}
	}
?>
