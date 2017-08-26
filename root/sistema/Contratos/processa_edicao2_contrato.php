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
			
			//INSERIR
			case 'inserir':

							$id_fiscal=$_SESSION['id'];
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							$fiscal_sub_1=$_POST['fiscal_sub_1'];
							$fiscal_sub_2=$_POST['fiscal_sub_2'];
							$fiscal_sub_3=$_POST['fiscal_sub_3'];
							$fiscal_sub_4=$_POST['fiscal_sub_4'];
							$tipo_contrato=$_POST['tipo_contrato'];
							$fiscal = $_SESSION['id'];
							$email	= $_SESSION["email"];
							
									//dados do anexo
							//$maxsize=$_POST['MAX_FILE_SIZE'];		
                     @$size=$_FILES['filecontrato']['size'];
                        @$imgdetails= getimagesize($_FILES['filecontrato']['tmp_name']);
                         @$mime_type = $imgdetails['mime']; 
                        @$filename=$_FILES['filecontrato']['name'];	
                            @$imgData =addslashes (file_get_contents($_FILES['filecontrato']['tmp_name']));
							
							
							date_default_timezone_set('America/Sao_Paulo');
							
                            $Hora_log = date('H:i:s');
							$Data_log=date("Y-m-d");
							$usuario_log=$_SESSION['nome']; 
							$descricao_log='Log do Sistema - Contrato Ativado';
							
							
							
							
							
							$Ativo='Sim';




								$fim_contrato = somar_data($vigencia, 0, 0, 5);	
								
								
								 $buscar_contrato = "SELECT n_contrato FROM contratos WHERE n_contrato= '$n_contrato'";
 
 $resultado = mysql_query($buscar_contrato); 
 
 if(mysql_num_rows($resultado) != 0){
	 $msg="O contrato digitado já existe";
	 $msgT=utf8_decode($msg);			
 	echo "<script type=\"text/javascript\">
           alert('$msgT');
           history.go(-1);
          </script>";
    exit();										
 }


							$sql="INSERT INTO contratos SET
fim_contrato='$fim_contrato',n_processo='$n_processo',n_contrato='$n_contrato',descricao='$descricao',empresa='$empresa',valor_contrato='$valor_contrato', valor_mensal='$valor_mensal',vigencia='$vigencia',fiscal_sub_1='$fiscal_sub_1',fiscal_sub_2='$fiscal_sub_2',fiscal_sub_3='$fiscal_sub_3',fiscal_sub_4='$fiscal_sub_4',fiscal='$fiscal',Ativo='$Ativo',tipo_contrato='$tipo_contrato',email='$email',id_fiscal='$id_fiscal', name_arq='$filename', anexo='$imgData',type_arq='$mime_type', size_arq='$size' ";




 $cadastro_adm = "INSERT INTO renovacao SET 
usuario='$usuario_log',Data='$Data_log',descricao2='$descricao_log',n_contrato='$n_contrato',Hora='$Hora_log'";
mysql_query($cadastro_adm);



							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
								echo "Inserido com sucesso";
								header ("location: link2_contrato.php?pagina=1"); 
								}				
								

						
			break;
				
			//ATUALIZAR	
			case 'atualizar':
			
							$id_fiscal=$_SESSION['id'];
							$id=$_POST['id'];
							$n_processo=$_POST['n_processo'];
							$n_contrato=$_POST['n_contrato'];
							$descricao=$_POST['descricao'];
							$empresa=$_POST['empresa'];
							$valor_contrato=$_POST['valor_contrato'];
							$valor_mensal=$_POST['valor_mensal'];
							$vigencia=$_POST['vigencia'];
							
							
							$fiscal_sub_1=$_POST['fiscal_sub_1'];
							$fiscal_sub_2=$_POST['fiscal_sub_2'];
							$fiscal_sub_3=$_POST['fiscal_sub_3'];
							$fiscal_sub_4=$_POST['fiscal_sub_4'];
							
							$tipo_contrato=$_POST['tipo_contrato'];
							
							$email	= $_SESSION["email"];
							$chanexo=@$_POST['anexo'];
							//anexo
							 $size=@$_FILES['filecontrato']['size'];
                            @ $imgdetails= getimagesize($_FILES['filecontrato']['tmp_name']);
                             @$mime_type = $imgdetails['mime']; 
                             $filename=@$_FILES['filecontrato']['name'];	
                              @$imgData =addslashes (file_get_contents($_FILES['filecontrato']['tmp_name']));
							
							
							date_default_timezone_set('America/Sao_Paulo');
							
                            $Hora_log = date('H:i:s');
							$Data_log=date("Y-m-d");
							$usuario_log=$_SESSION['nome']; 
							$descricao_log='Log do Sistema - Contrato Modificado';
							
							
							
							$Ativo=$_POST['Ativo'];
							
							

								$fim_contrato = somar_data($vigencia, 0, 0, 4);									

							include('..\..\sistema\validacao\conecta_id_contrato.php');
							
							$sql="UPDATE contratos SET 
							
fim_contrato='$fim_contrato',
n_processo='$n_processo',
n_contrato='$n_contrato',
descricao='$descricao',
empresa='$empresa',
valor_contrato='$valor_contrato',
valor_mensal='$valor_mensal',
vigencia='$vigencia',
fiscal_sub_1='$fiscal_sub_1',
fiscal_sub_2='$fiscal_sub_2',
fiscal_sub_3='$fiscal_sub_3',
fiscal_sub_4='$fiscal_sub_4',
Ativo='$Ativo',
tipo_contrato='$tipo_contrato',
email='$email',


id_fiscal='$id_fiscal' WHERE id=$id";



	if(isset ($chanexo)  ){
	
	$sql = "UPDATE contratos SET name_arq='$filename', anexo='$imgData',type_arq='$mime_type', size_arq='$size' WHERE id =$id";
	
	
	}







 $cadastro_admF = "UPDATE funcionarios SET

fiscal_sub_1='$fiscal_sub_1',
fiscal_sub_2='$fiscal_sub_2',
fiscal_sub_3='$fiscal_sub_3',
fim_contrato='$fim_contrato',
fiscal_sub_4='$fiscal_sub_4' 

WHERE n_contrato = '{$_SESSION['n_contrato']}'";
mysql_query($cadastro_admF);






 $cadastro_adm5 = "UPDATE contratos SET

 email='$email'
 ,id_fiscal='$id_fiscal'
WHERE contratos.id_fiscal = '{$_SESSION['id']}'";
mysql_query($cadastro_adm5);


include('..\..\sistema\validacao\inseri_logs_contrato.php');




				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
				
				{
header ("location: visualizar_edit_contrato.php?id=$id"); 
}
	
			}
		}
	}
?>
