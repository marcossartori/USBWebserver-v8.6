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
				
							
							$vinculo=$_POST['vinculo'];
							$cargo=$_POST['cargo'];

					
							
						
							
							$sql="INSERT INTO tab_cargo SET vinculo='$vinculo',cargo='$cargo'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
						
{

	 if($vinculo=$_POST['vinculo'] == 'Terceirizados' ){
	header('Location: http://localhost/sistema/Contratos/cadastrar_funcionario.php');
	}
	
		 if($vinculo=$_POST['vinculo'] == 'Mapa' ){
	header('Location: http://localhost/sistema/MAPA/cadastrar_funcionario_mapa_bolsista_estagiarios.php');
	}
	
	
			 if($vinculo=$_POST['vinculo'] == 'Estagiarios' ){
	header('Location: http://localhost/sistema/MAPA/cadastrar_funcionario_mapa_bolsista_estagiarios.php');
	}

	
	
					 if($vinculo=$_POST['vinculo'] == 'Bolsistas' ){
	header('Location: http://localhost/sistema/Bolsistas/cadastrar_funcionario_mapa_bolsista_estagiarios.php');
	}

    exit();	
}				
	
						
						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
				$id=$_POST['id'];

						
							$vinculo=$_POST['vinculo'];
							$cargo=$_POST['cargo'];


							
							$sql="UPDATE tab_cargo SET 
vinculo='$vinculo',cargo='$cargo' WHERE id=$id";

				
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
           alert('Cargo $cargo Inserido com sucesso!!');
           
          </script>";	
    exit();	
}	
					
					
					
					} 
				break;

				
			}
		}
	}
?>
