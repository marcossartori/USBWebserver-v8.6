<?php
include("somar_data.php");
// dados comuns de conexão
$host = "localhost";
$usuario = "root";
$senha = "root";
$base = "lanagro_rs";
$tabela = "contratos";


$date = date("Y-m-d"); 



// efetuando a conexão
$con = mysql_connect($host, $usuario, $senha);
mysql_select_db($base);

$aniversario = mysql_query("SELECT * FROM $tabela") 
or die("Não conectou: " . mysql_error());

while ($row = mysql_fetch_array($aniversario)){


	  $n_contrato=$row[3];
	  
	 
	  $ano  = somar_data($row[9], 0, 0, 1); 
	  $ano2 = somar_data($row[9], 0, 0, 2);
	  $ano3 = somar_data($row[9], 0, 0, 3); 
	  $ano4 = somar_data($row[9], 0, 0, 4);
	  
	  
	  $ano_1 = somar_data($ano , 0, -1, 0); 
	  $ano_2 = somar_data($ano2 , 0, -1, 0);
	  $ano_3 = somar_data($ano3 , 0, -1, 0); 
	  $ano_4 = somar_data($ano4 , 0, -6, 0);  
	  
	  
	$date; 
	
if ($date == $ano_1 or $date == $ano_2 or $date == $ano_3 or $date == $ano_4){
	
					 if($date == $ano_1 ){
	echo $ano_1;  echo "- 1  OK <br>";
	}
	
	 					if($date == $ano_2 ){
	echo $ano_2; echo "- 2  OK <br>";
	}
	
		 					 if($date == $ano_3 ){
	echo $ano_3; echo "- 3  OK <br>";
	}
	
			 					if($date == $ano_4 ){
	echo $ano_4; echo "- 4  OK <br>";
	}


	
	

	
	
					$linhaid=$row[10];
			$linha_adm3 = "SELECT * FROM Admin where Id='$linhaid'";
			
			 			include('dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			echo $nome=$dado_adm3['Nome'];}
	
	
	 
	

	
	
	
	
//mail ($row['email'],"Feliz aniversário","$nome, Parabéns pelo seu dia! é o que deseja a Cordenação do LANAGRO/RS");

							
							$title="Controle de renovações LANAGRO/RS";

							$cabecalho="Ministério da Agricultura, Pecuária e Abastecimento";
							$rodape="Equipe de Informática";

							$email=$row['email'];
						
							$ass = "Renovação de contrato";
							
							
							
								if ($date == $ano_1 or $date == $ano_2 or $date == $ano_3 or $date == $ano_4){
	
					 if($date == $ano_1 ){
	$Tano=$ano; 
	}
	
	 					if($date == $ano_2 ){
	$Tano2=$ano2;
	}
	
		 					 if($date == $ano_3 ){
	$Tano3=$ano3;
	}
	
			 					if($date == $ano_4 ){
	 $Tano4=$ano4;
	}}
							
							
							
							
							$texto1="Fique atento aos prazos de vencimento dos contratos!";
							$texto2="o contrato de número:  ".$n_contrato." vercerá dia: " .@$Tano.@$Tano2.@$Tano3.@$Tano4.""; 
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
	<span style="font-size:20px;"> '.utf8_decode($nome).',</span><br>
	<br>
	<br>
	<br>
	<br>
	'.utf8_decode($texto1).'<br>
	<br>
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


}
}



	 
 
?>