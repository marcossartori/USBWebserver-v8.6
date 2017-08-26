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
				
							
							$empresa=$_POST['empresa'];
							$CNPJ=$_POST['CNPJ'];
							$Razao_Social=$_POST['Razao_Social'];
							$Endereco=$_POST['Endereco'];
							$Cidade=$_POST['cod_cidades'];
							$estado=$_POST['cod_estados'];
							$CEP=$_POST['CEP'];
							$Telefone=$_POST['Telefone'];
							$Preposto=$_POST['Preposto'];
							$vinculo=$_POST['vinculo'];
					
							
						
							
							$sql="INSERT INTO tab_empresa SET empresa='$empresa',CNPJ='$CNPJ',Razao_Social='$Razao_Social',Endereco='$Endereco',Cidade='$Cidade',estado='$estado',CEP='$CEP',Telefone='$Telefone',Preposto='$Preposto',vinculo='$vinculo'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
												{
 	echo "<script type=\"text/javascript\">
           alert('Empresa $empresa cadastrada com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}				
								
						
						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
				$id=$_POST['id'];

						
							$empresa=$_POST['empresa'];
							$CNPJ=$_POST['CNPJ'];
							$Razao_Social=$_POST['Razao_Social'];
							$Endereco=$_POST['Endereco'];
							$Cidade=$_POST['cod_cidades'];
							$estado=$_POST['cod_estados'];
							$CEP=$_POST['CEP'];
							$Telefone=$_POST['Telefone'];
							$Preposto=$_POST['Preposto'];
							

							
							$sql="UPDATE tab_empresa SET 
empresa='$empresa',CNPJ='$CNPJ',Razao_Social='$Razao_Social',Endereco='$Endereco',Cidade='$Cidade',estado='$estado',CEP='$CEP',Telefone='$Telefone',Preposto='$Preposto' WHERE id=$id";

				
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
           alert('Empresa $empresa atualizada com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}	
					
					
					
					} 
				break;

				
			}
		}
	}
?>
