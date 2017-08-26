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

				
			//ATUALIZAR	
			case 'atualizar':


$id_adm = $_POST['Id'];
$login = $_POST['Login'];
$senha = $_POST['Senha'];
$nome_adm = $_POST['Nome_Adm'];
$master = $_POST['Master'];
$Acesso = $_POST['Acesso'];
$Acesso2 = $_POST['Acesso2'];
$Acesso3 = $_POST['Acesso3'];
$Acesso4 = $_POST['Acesso4'];
$email = $_POST['email'];

  
 $sql = "UPDATE admin SET Nome = '$nome_adm', Login = '$login ', Senha = '$senha', Master = '$master',Acesso = '$Acesso', Acesso2 = '$Acesso2', Acesso3 = '$Acesso3', Acesso4 = '$Acesso4',email='$email'  WHERE Id = '$id_adm'";



 $cadastro_adm = "UPDATE renovacao_01 SET

 email='$email'
 ,id_fiscal='$id_adm'
WHERE renovacao_01.id_fiscal = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm);


 $cadastro_adm2 = "UPDATE renovacao_02 SET

 email='$email'
 ,id_fiscal='$id_adm'
WHERE renovacao_02.id_fiscal = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm2);

 $cadastro_adm3 = "UPDATE renovacao_03 SET 

 email='$email'
 ,id_fiscal='$id_adm'
WHERE renovacao_03.id_fiscal = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm3);


 $cadastro_adm4 = "UPDATE renovacao_04 SET

 email='$email'
 ,id_fiscal='$id_adm'
WHERE renovacao_04.id_fiscal = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm4);


 $cadastro_adm5 = "UPDATE contratos SET

 email='$email'

WHERE contratos.n_contrato = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm4);




 $cadastro_adm5 = "UPDATE contratos SET

 email='$email'
 ,id_fiscal='{$_SESSION['id_fiscal']}'
WHERE contratos.id_fiscal = '{$_SESSION['id_fiscal']}'";
mysql_query($cadastro_adm5);

				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
				
				{
					$Nome_fiscal=$_SESSION['Nome_fiscal'];
 	echo "<script type=\"text/javascript\">
           alert('Usuario $Nome_fiscal atualizado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

		default:		
			}
		}
	}
?>
