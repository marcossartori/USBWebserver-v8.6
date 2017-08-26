<?php


include('..\..\validacao\testa_adm.php');
	
	 
	
?>





<?php
require '..\..\validacao\class_conexao2.php';

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
							$nome_funcionario = $_SESSION['nome_funcionario'];
							
							$data_adm=$_POST['data_adm'];
							$unidade=$_POST['unidade'];
							$cargo=$_POST['cargo'];
							$n_contrato=$_POST['n_contrato'];
							$acao='Ativado';
							$Ativo='Sim';
							$vinculo=$_POST['vinculo'];
							$data_entrada_ev=$_POST['data_entrada_ev'];
							$data_saida_ev=$_POST['data_saida_ev'];
							
							$fim_contrato=$_SESSION['fim_contrato'];
							$empresa=$_SESSION['empresa'];
							
							
							
							$fiscal=$_SESSION["fiscal"];
							$fiscal_sub_1=$_SESSION["fiscal_sub_1"];
							$fiscal_sub_2=$_SESSION["fiscal_sub_2"];
							$fiscal_sub_3=$_SESSION["fiscal_sub_3"];
							$fiscal_sub_4=$_SESSION["fiscal_sub_4"];


							
							
							$sql = "INSERT INTO desativa_func SET usuario='{$_SESSION['nome']}',
							id_fun='{$_SESSION['id_fun']}',
							Data='$Data',
							data_adm='$data_adm',
							Hora='$Hora',
							descricao2='$descricao2',
							unidade='$unidade',
							n_contrato ='$n_contrato',
							acao='$acao',
							cargo='$cargo'";





							$title="Funcionário Ativado - LANAGRO/RS";

							$cabecalho="Ministério da Agricultura, Pecuária e Abastecimento";
							$rodape="Equipe de Informática";

							$email=$_SESSION['email2'];
						
							$ass = "Funcionário Ativado - LANAGRO/RS";
							
							
							$texto1="O funcionário: ";
							$texto2=" foi ativado no contrato N°: ".$n_contrato.""; echo "<br>";
							
							
							
							$texto3="acesse o sistema atraves do link: http://10.51.24.158/sistema/tela_login.php";
							
							
							$assinatura1="Coordenação";
							$assinatura2="Laboratório Nacional Agropecuário";
							
							
							




         
		 $mes = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <title>'.utf8_decode($title).'</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="description" content='.utf8_decode($title).'>
    <style type="text/css">
      body,td{font-size:14px;font-family:Arial, sans-serif; word-wrap: break-word;}
      p{margin: 0; padding: 0}
    </style>
  </head>
  <body style="width: 100%; margin: 0 auto; text-align: left; font-family: Arial;">
    <style type="text/css">.ReadMsgBody{width:100%;}.ExternalClass{width:100%;}span.yshortcuts{color:#000;background-color:none;border:none;}span.yshortcuts:hover,span.yshortcuts:active,span.yshortcuts:focus{color:#000;background-color:none;border:none;}p{margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;}*{-webkit-text-size-adjust:none;}</style>
    <table style="border-collapse:collapse;background:#ddd;min-width:620px;table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%"><tbody>
    <tr>
    <td style="padding-right:10px;padding-top:10px;padding-bottom:10px;padding-left:10px;" align="center"><div style="width:auto;margin-right:auto;margin-left:auto;margin-top:0;margin-bottom:0;color:#000;font-family:Arial;font-size:12px;line-height:150%;">
    <table style="width:100%;border-collapse:separate;table-layout:fixed;" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
    <td align="center">
    <table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;width:600px;background:#FFFFFF;" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr>
    <td>
    <table style="width:600px;border-collapse:collapse;table-layout:fixed;" cellpadding="0" cellspacing="0"><tbody>
    <tr>
    <td style="vertical-align:top;" width="100%"><div>
    <table style="width:100%;border-collapse:separate;table-layout:fixed;" cellpadding="0" cellspacing="0"><tbody>
    <tr>
    <td style="background:#ffffcf;"><table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
    <tr>
    <td style="vertical-align:middle;padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:0;"><div style="word-wrap:break-word;line-height:140%;text-align:left;">
      <p style="text-align:center;font-size:11px;margin:0;">'.utf8_decode($cabecalho).'</p>
    </div></td></tr>
    </tbody>
    </table>
    </td></tr>
    </tbody></table></div><div>
    <table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="5" cellspacing="5">
    <tbody><tr><td></td></tr></tbody></table><table style="width:100%;border-collapse:separate;table-layout:fixed;" cellpadding="0" cellspacing="0">
    <tbody><tr><td style="background:#FFFFFF;"><table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr><td style="vertical-align: top;" align="center"><div><img style="border:medium none;width:600px;height:161px;resize:none;position:relative;display:block;top:0px;left:0px;" src="https://lh3.googleusercontent.com/-lQv49vAB-kg/UjHPG6S-jCI/AAAAAAAAAEk/DMMshm6ef2U/w426-h237/logo_aniversario.png" height="161" width="600"></div></td></tr>
    </tbody></table></td></tr></tbody></table></div><div><table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="5" cellspacing="5">
    <tbody><tr><td></td></tr></tbody></table>
    
    <table style="width:100%;border-collapse:separate;table-layout:fixed;background:#FFFFFF;" cellpadding="0" cellspacing="15">
    <tbody><tr><td style="background:#FFFFFF;"><table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr><td style="vertical-align:top;"><div style="word-wrap:break-word;line-height:140%;text-align:left;"><p style="color:#000000;font-family:Arial;font-size:12px;line-height:1;margin:0;text-align:left;">
	<br>
	'.utf8_decode($texto1).'
	
	
	<span style="font-size:12px;"> <strong>'.utf8_decode($nome_funcionario).'</strong>,</span>
	'.utf8_decode($texto2).'<br>
	<br>
	'.utf8_decode($texto3).'<br>
	
	&nbsp;<br>
	<br>
	Atenciosamente,<br>
	<br>
	<br>
	LANAGRO/RS<br>
	<strong>'.utf8_decode($assinatura1).'<br>
	'.utf8_decode($assinatura2).'</strong><br>
	<strong><a href="mailto:lanagrors.inf@agricultura.gov.br">lanagrors@agricultura.gov.br</a>&nbsp;&nbsp;&nbsp; </strong><br>
	<strong><span style="background-color:#ffffff;">www.agricultura.gov.br</span></strong><br>
	&nbsp;</p>
</div>
</td></tr></tbody>
</table></td></tr></tbody></table></div><div>
<table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="5" cellspacing="5">
<tbody><tr><td></td></tr></tbody></table>
<table style="width:100%;border-collapse:separate;table-layout:fixed;background:#f1f1f1;" cellpadding="0" cellspacing="15">
<tbody><tr><td style="background:#f1f1f1;">

<table style="border-collapse:separate;border-spacing:0px;table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td style="vertical-align:middle;font-size:11px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;"><div style="word-wrap:break-word;line-height:140%;text-align:left;"><p style="font-size:11px;margin:0px;text-align:left;">'.utf8_decode($rodape).'</p></div></td><td style="vertical-align:middle;font-size:11px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;"><div style="word-wrap:break-word;line-height:140%;text-align:left;"><p style="font-size:11px;margin:0px;text-align:left;">Sistema Informatizado LANAGRO/RS<br>Estrada da Ponta Grossa, 3036, Porto Alegre - RS</p></div></td></tr></tbody>
</table></td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody>
</table>  


</body></html>


';

$headers  = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//endereço do remitente
$headers .= "From: Lanagro/RS <informatica.lanagro-rs@agricultura.gov.br>\r\n";

//endereços que receberão uma copia $headers .= "Cc: manel@desarrolloweb.com\r\n"; 
//endereços que receberão uma copia oculta
$headers .= "Bcc: esaulpires@yahoo.com.br,esaulpires@zipmail.com.br\r\n";

mail($email, utf8_decode($ass), $mes, $headers);


							
							$inserirSucesso=$objetoConexao->inserir($sql);
							if($inserirSucesso == false)
								{
								echo "Erro de insercao" . $sql;
								print "<pre>";
								}
							else
								{
								echo "Inserido com sucesso";
								
								
								
										 if($_SESSION["Acesso"] == 'Mapa' ){
	header('Location: ../../MAPA/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}
								
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
	header('Location: ../../Bolsistas/link2_contrato_mapa_bolsista_estagiarios.php?pagina=1');
	}
	
		 if($_SESSION["Acesso"] == 'Terceirizados' ){
	header('Location: ../../Contratos/link2_contrato.php?pagina=1');
	}
								
								
								
								}	
								
								
								
								
								
								
						 $sql="UPDATE funcionarios SET 
						 
Ativo='$Ativo',
n_contrato ='$n_contrato',
unidade='$unidade',
cargo='$cargo',
data_adm='$data_adm',
data_entrada_ev='$data_entrada_ev',
data_saida_ev='$data_saida_ev',
fim_contrato='$fim_contrato',
ID_empresa='$empresa',
fiscal='$fiscal',
fiscal_sub_1='$fiscal_sub_1',
fiscal_sub_2='$fiscal_sub_2',
fiscal_sub_3='$fiscal_sub_3',
fiscal_sub_4='$fiscal_sub_4',



tipo_contrato='$vinculo' WHERE nome_funcionario='{$_SESSION['nome_funcionario']}' = nome_funcionario='{$_SESSION['nome_funcionario']}'";
																					
							$atualizarSucesso=$objetoConexao->inserir($sql);
				            if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}		

					

						
			break;

				
			//ATUALIZAR	
			case 'atualizar':
			
							$id=$_POST['id'];
							$Data=$_POST['Data'];
							$Hora=$_POST['Hora'];
							$usuario=$_POST['usuario'];
							$descricao2=$_POST['descricao2'];
							$nome_funcionario=$_POST['nome_funcionario'];
							$data_saida=$_POST['data_saida'];
							$Ativo='Nao';

							
			$sql="UPDATE desativa_func SET usuario='{$_SESSION['nome']}',Data='$Data',Hora='$Hora',descricao2='$descricao2',nome_funcionario='{$_SESSION['nome_funcionario']}',Ativo='$Ativo',data_saida='$data_saida'
			WHERE id=$id";

				
				$atualizarSucesso=$objetoConexao->atualizar($sql);
				if($atualizarSucesso == false)
					{
					echo "Erro de atualizacao" . $sql;
					print "<pre>";
					}
				else
				
				{
 	echo "<script type=\"text/javascript\">
           alert('Funcionário $nome_funcionario desativado com sucesso!!');
           history.go(-2);
          </script>";	
    exit();	
}

			}
		}
	}
?>
