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
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
					
							
						
							
							$sql="INSERT INTO tab_empresa SET empresa='$empresa',CNPJ='$CNPJ',Razao_Social='$Razao_Social',Endereco='$Endereco',Cidade='$Cidade',estado='$estado',CEP='$CEP',Telefone='$Telefone',Preposto='$Preposto',vinculo='$vinculo',email='$email',Numero='$Numero',Bairro='$Bairro'";

							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
						
{

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<span style="font-size:20px; color:#060;">'; 
echo "Empresa inserida com sucesso";
echo '</span>';



echo "<label>";
echo '<input type="submit"   value="OK" onclick="opener.location.reload();window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>";
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
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							

							
							$sql="UPDATE tab_empresa SET 
empresa='$empresa',CNPJ='$CNPJ',Razao_Social='$Razao_Social',Endereco='$Endereco',Cidade='$Cidade',estado='$estado',CEP='$CEP',Telefone='$Telefone',Preposto='$Preposto',email='$email',Numero='$Numero',Bairro='$Bairro' WHERE id=$id";

				
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
