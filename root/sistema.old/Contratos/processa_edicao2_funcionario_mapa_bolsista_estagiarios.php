<?php


include('..\..\sistema\validacao\testa_adm.php');
	
include('..\..\sistema\validacao\somar_data.php');
 
$nome = $_SESSION["nome"];


	
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
			
			//INSERIR
			case 'inserir':
			
							$ID_empresa=$_SESSION['empresa'];
							$cpf=$_POST['cpf'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
							$sexo=$_POST['sexo'];
							$filhos=$_POST['filhos'];
							$Complemento=$_POST['Complemento'];
							$telefone=$_POST['telefone'];
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							$Cidade=$_POST['cod_cidades'];
							$Estado=$_POST['cod_estados'];
							$formacao=$_POST['formacao'];
							$n_contrato=$_POST['n_contrato'];
							$data_nasc=$_POST['data_nasc'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$ini_lanagro=$_POST['ini_lanagro'];
							$natura=$_POST['natura'];
							$celular=$_POST['celular'];
							$data_adm=$_POST['data_adm'];
							$sal_base=$_POST['sal_base'];
							$cod_ug=$_POST['cod_ug'];
							$cargo_chefia=@$_POST['cargo_chefia'];
							$bolsista=@$_POST['bolsista'];
							
							$fim_contrato=$_SESSION["fim_contrato"];
							
							
							
							
							$obs=$_POST['obs'];
							$data_entrada_ev=$_POST['data_entrada_ev'];
							$data_saida_ev=$_POST['data_saida_ev'];

							$Ativo='Sim';
							
							date_default_timezone_set('America/Sao_Paulo');
                            $Hora = date('H:i:s');
							
							$Data=date("Y-m-d"); 
							
							$descricao2='Log do Sistema';
							$data_saida='1° Ativação';
							$acao='Ativado';




 $buscar_CPF = "SELECT cpf FROM funcionarios WHERE cpf = '$cpf'";
 
 $resultado = mysql_query($buscar_CPF); 
 
 if(mysql_num_rows($resultado) != 0){
	 $msg="O CPF digitado já existe na base de dados";
	 $msgT=utf8_decode($msg);			
 	echo "<script type=\"text/javascript\">
           alert('$msgT');
           history.go(-1);
          </script>";
    exit();										
 }



							
							
							$sql="INSERT INTO funcionarios SET
ini_lanagro='$ini_lanagro',
nome_funcionario='$nome_funcionario',
telefone='$telefone',
unidade='$unidade',
cargo='$cargo',
endereco='$endereco',
escolaridade='$escolaridade',
sexo='$sexo',
filhos='$filhos',
Complemento='$Complemento',
email='$email',
Numero='$Numero',
Bairro='$Bairro',
Cidade='$Cidade',
Estado='$Estado',
Ativo='$Ativo',
n_contrato='$n_contrato',
formacao='$formacao',
tipo_contrato='$tipo_contrato',
data_nasc='$data_nasc',
obs='$obs',
natura='$natura',
data_adm='$data_adm',
sal_base='$sal_base',
cod_ug='$cod_ug',
cpf='$cpf',
data_entrada_ev='$data_entrada_ev',
data_saida_ev='$data_saida_ev',
cargo_chefia='$cargo_chefia',
bolsista='$bolsista',
ID_empresa='$ID_empresa',

fiscal='{$_SESSION['id']}',
fiscal_sub_1='{$_SESSION['fiscal_sub_1']}',
fiscal_sub_2='{$_SESSION['fiscal_sub_2']}',
fiscal_sub_3='{$_SESSION['fiscal_sub_3']}',
fiscal_sub_4='{$_SESSION['fiscal_sub_4']}',
fim_contrato='$fim_contrato',

celular='$celular'";



							 $log_insercao = "INSERT INTO desativa_func SET 
usuario='$nome',
Data='$Data',
data_adm='$data_adm',
Hora='$Hora',
descricao2='$descricao2',
unidade='$unidade',
n_contrato='$n_contrato',
acao='$acao',
nome_funcionario='$nome_funcionario',

cargo='$cargo'";
mysql_query($log_insercao);



							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
							{
 	echo "<script type=\"text/javascript\">
           alert('Funcionrio $nome_funcionario inserido com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}				
							
						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
			
							$id=$_POST['id'];
							$cpf=$_POST['cpf'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$endereco=$_POST['endereco'];
							$escolaridade=$_POST['escolaridade'];
							$sexo=$_POST['sexo'];
							$formacao=$_POST['formacao'];
							$filhos=$_POST['filhos'];
							$Complemento=$_POST['Complemento'];
							$telefone=$_POST['telefone'];
							$email=$_POST['email'];
							$Numero=$_POST['Numero'];
							$Bairro=$_POST['Bairro'];
							$Cidade=$_POST['cod_cidades'];
							$Estado=$_POST['cod_estados'];
							$n_contrato=$_POST['n_contrato'];
							$data_nasc=$_POST['data_nasc'];
							$ini_lanagro=$_POST['ini_lanagro'];
							$natura=$_POST['natura'];
							$celular=$_POST['celular'];
							$obs=$_POST['obs'];
							$data_adm=$_POST['data_adm'];
							$Ativo='Sim';
							$sal_base=$_POST['sal_base'];
							$cod_ug=@$_POST['cod_ug'];
							$cargo_chefia=@$_POST['cargo_chefia'];
							$bolsista=@$_POST['bolsista'];
							$fim_contrato=$_SESSION["fim_contrato"];


							//$data_entrada_ev=$_POST['data_entrada_ev'];
							//$data_saida_ev=$_POST['data_saida_ev'];
							
							date_default_timezone_set('America/Sao_Paulo');
                            $Hora = date('H:i:s');
							
							$Data=date("Y-m-d"); 
							
							$descricao2='Ocorreu uma Atualização';
							$data_saida='Log do Sistema';
							$acao='Atualização';
							
							
							include('..\..\sistema\validacao\conecta_id_fun.php');
							
							
							


							
							$sql="UPDATE funcionarios SET 
ini_lanagro='$ini_lanagro',
nome_funcionario='$nome_funcionario',
telefone='$telefone',
unidade='$unidade',
cargo='$cargo',
endereco='$endereco',
escolaridade='$escolaridade',
sexo='$sexo',
filhos='$filhos',
Complemento='$Complemento',
email='$email',
Numero='$Numero',
Bairro='$Bairro',
Cidade='$Cidade',
Estado='$Estado',
n_contrato='$n_contrato',
formacao='$formacao',
n_contrato='$n_contrato',
data_nasc='$data_nasc',
obs='$obs',
celular='$celular',
data_adm='$data_adm',
sal_base='$sal_base',
cod_ug='$cod_ug',
cpf='$cpf',
cargo_chefia='$cargo_chefia',
bolsista='$bolsista',

fiscal_sub_1='{$_SESSION['fiscal_sub_1']}',
fiscal_sub_2='{$_SESSION['fiscal_sub_2']}',
fiscal_sub_3='{$_SESSION['fiscal_sub_3']}',
fiscal_sub_4='{$_SESSION['fiscal_sub_4']}',
fim_contrato='$fim_contrato',

natura='$natura' WHERE id=$id";

		 if($_POST['nome_funcionario'] <> $dado_adm['nome_funcionario']){

 $nome_fun1 = "UPDATE log_eventual SET 

nome_funcionario='$nome_funcionario' WHERE nome_funcionario='{$_SESSION['nome_funcionario']}' and '{$_SESSION['nome_funcionario']}' = '{$dado_adm['nome_funcionario']}'";

mysql_query($nome_fun1);
	}	
	
	
	
		 if($_POST['nome_funcionario'] <> $dado_adm['nome_funcionario']){

 $nome_fun = "UPDATE desativa_func SET 

nome_funcionario='$nome_funcionario' WHERE nome_funcionario='{$_SESSION['nome_funcionario']}' and '{$_SESSION['nome_funcionario']}' = '{$dado_adm['nome_funcionario']}'";

mysql_query($nome_fun);
	}


include('..\..\sistema\validacao\inseri_logs.php');




				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
					
				{
					
 	echo "<script type=\"text/javascript\">
           alert('Funcionrio $nome_funcionario atualizado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

				
		
			}
		}
	}
?>
