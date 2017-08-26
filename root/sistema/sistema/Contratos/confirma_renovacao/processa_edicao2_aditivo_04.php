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

							$Data=$_POST['Data'];
							$Hora=$_POST['Hora'];
							$usuario=$_POST['usuario'];
							$descricao2=$_POST['descricao2'];

							$confirmacao_04 = "Sim";



							
							$sql="INSERT INTO renovacao SET usuario='{$_SESSION['nome']}',Data='$Data',Hora='$Hora',descricao2='$descricao2',n_contrato='{$_SESSION['n_contrato']}'";




 $cadastro_adm4 = "UPDATE renovacao_04 SET
 confirmacao_04 = '$confirmacao_04'
WHERE renovacao_04.n_contrato = '{$_SESSION['n_contrato']}'";
mysql_query($cadastro_adm4);







							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
				{
 	echo "<script type=\"text/javascript\">
           alert('Contrato atualizado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
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
