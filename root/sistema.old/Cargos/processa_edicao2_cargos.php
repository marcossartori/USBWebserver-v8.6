<?php
require '..\..\sistema\validacao\class_conexao2.php';

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
							$n_contrato=$_POST['n_contrato'];
							$quant=$_POST['quant'];
							
							$valor_cargo=$_POST['valor_cargo'];
							
							
					
							
						
							
							$sql="INSERT INTO tab_cargo SET 
							
							vinculo='$vinculo',
							n_contrato='$n_contrato',
							valor_cargo='$valor_cargo',
							quant='$quant',
							cargo='$cargo'
							
							";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
						
{

echo "Cargo inserido com sucesso";


echo "<label>";
echo '<input type="submit"   value="OK" onclick="window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>";
}				
	
			break;
				
			//ATUALIZAR	
			case 'atualizar':
				$id=$_POST['id'];

						
							$vinculo=$_POST['vinculo'];
							$cargo=$_POST['cargo'];
							$quant=$_POST['quant'];


							
							$sql="UPDATE tab_cargo SET 
vinculo='$vinculo',cargo='$cargo',quant='$quant' WHERE id=$id";

				
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
