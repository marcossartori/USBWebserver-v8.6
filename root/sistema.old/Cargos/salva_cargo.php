<?php


include('..\..\sistema\validacao\testa_adm.php');
	

 
	
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


$id_cargo=$_SESSION["id_cargo"];
$cargo = $_POST['cargo'];
$quant=$_POST['quant'];

							$valor_cargo=$_POST['valor_cargo'];

							
							$sql="UPDATE tab_cargo SET  valor_cargo='$valor_cargo', cargo= '$cargo',quant='$quant' WHERE id = '$id_cargo'";

				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else

					
				
				{
					
echo "Enviado com sucesso";


echo "<label>";
echo '<input type="submit"   value="OK" onclick="window.close()" >';


//echo '<input type="submit"   value="OK" onclick="window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>";
					
}
	
			}
		}
	}
?>
