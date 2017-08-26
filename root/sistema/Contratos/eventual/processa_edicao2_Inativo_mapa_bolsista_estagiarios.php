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
							
							$data_entrada_ev=$_POST['data_entrada_ev'];
							$data_saida_ev=$_POST['data_saida_ev'];
							$nome_funcionario=$_POST['nome_funcionario'];
							
							
							$n_contrato=$_SESSION['n_contrato'];
							$unidade=$_SESSION['unidade'];
							
							 $id_fun=$_SESSION['id_fun'];

							
														

							$sql="INSERT INTO log_eventual SET usuario='{$_SESSION['nome']}',
							Data='$Data',
							Hora='$Hora',
							descricao2='$descricao2',
							unidade='$unidade',
							n_contrato='$n_contrato',
							data_entrada_ev='$data_entrada_ev',
							data_saida_ev='$data_saida_ev',
							
							id_fun='$id_fun',

							
							nome_funcionario='$nome_funcionario'";


							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
 	echo "<script type=\"text/javascript\">
           alert('Iserido com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
								}				
								


			}
		}
	}
?>
