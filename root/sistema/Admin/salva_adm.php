<?php


include('..\..\sistema\validacao\testa_adm.php');
	
include('..\..\sistema\validacao\somar_data.php');
 
	
?>
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
$n_port= $_POST['n_port'];
$fiscal=@$_POST['fiscal'];
$maxsize=$_POST['MAX_FILE_SIZE'];		
$size=$_FILES['file']['size'];
$imgdetails= getimagesize($_FILES['file']['tmp_name']);
$mime_type = $imgdetails['mime']; 
$filename=$_FILES['file']['name'];	
$imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));
 
 if (!isset($fiscal)){
	 
	 $fiscal="nao";
	 
	 
	 } 
$sql = "UPDATE admin SET Fiscal='$fiscal', Nome = '$nome_adm', Login = '$login ', Senha = '$senha', Master = '$master',Acesso = '$Acesso', Acesso2 = '$Acesso2', Acesso3 = '$Acesso3', Acesso4 = '$Acesso4',email='$email' WHERE Id = '$id_adm'"; 
 mysql_query($sql) or die(mysql_error());	 
	 


	$sql = "SELECT * FROM admin  WHERE Id= '$id_adm'";
						$executar = mysql_query($sql);
						$reg = mysql_fetch_array($executar);
	if($n_port <> $reg['n_port'] or $reg['n_port']== "null"  ){
	
	$sql = "UPDATE admin SET  n_port= '$n_port',name_port='$filename', portaria='$imgData',type_port='$mime_type', size_port='$size' WHERE Id = '$id_adm'";
	
	
	}
	
	    

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
					
		header('Location:http:../../sistema/Admin/Administrador.php?pagina=1');
					
}

		default:		
			}
		}
	}
?>
