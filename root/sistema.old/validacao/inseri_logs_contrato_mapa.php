<?php


 $cadastro_adm = "INSERT INTO renovacao SET 
usuario='$usuario_log',Data='$Data_log',descricao2='$descricao_log',n_contrato='$n_contrato',Hora='$Hora_log'";
mysql_query($cadastro_adm);

//----------------------------------------------Tabelas de Logs --------------------------------------------------------------------------




if($_POST['n_processo'] <> $dado_adm['n_processo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm1 = "INSERT INTO contrato_n_processo SET n_processo='{$_SESSION['n_processo']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm1);
}

if($_POST['descricao'] <> $dado_adm['descricao']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm2 = "INSERT INTO contrato_descricao SET descricao='{$_SESSION['descricao']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm2);
}


if($_POST['valor_contrato'] <> $dado_adm['valor_contrato']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm3 = "INSERT INTO contrato_valor_contrato SET valor_contrato='{$_SESSION['valor_contrato']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm3);
}

if($_POST['valor_mensal'] <> $dado_adm['valor_mensal']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm4 = "INSERT INTO contrato_valor_mensal SET valor_mensal='{$_SESSION['valor_mensal']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm4);
}


if($_POST['vigencia'] <> $dado_adm['vigencia']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm5 = "INSERT INTO contrato_vigencia SET vigencia='{$_SESSION['vigencia']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm5);
}




if($_POST['empresa'] <> $dado_adm['empresa']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm8 = "INSERT INTO contrato_empresa SET empresa='{$_SESSION['empresa']}',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm8);
}









//---------------------------------------------- Valor novo --------------------------------------------------------------------------




if($_POST['n_processo'] <> $dado_adm['n_processo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm1 = "INSERT INTO contrato_n_processo2 SET n_processo='$n_processo',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm1);
}

if($_POST['descricao'] <> $dado_adm['descricao']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm2 = "INSERT INTO contrato_descricao2 SET descricao='$descricao',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm2);
}


if($_POST['valor_contrato'] <> $dado_adm['valor_contrato']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm3 = "INSERT INTO contrato_valor_contrato2 SET valor_contrato='$valor_contrato',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm3);
}

if($_POST['valor_mensal'] <> $dado_adm['valor_mensal']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm4 = "INSERT INTO contrato_valor_mensal2 SET valor_mensal='$valor_mensal',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm4);
}


if($_POST['vigencia'] <> $dado_adm['vigencia']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm5 = "INSERT INTO contrato_vigencia2 SET vigencia='$vigencia',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm5);
}




if($_POST['empresa'] <> $dado_adm['empresa']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
$cadastro_adm8 = "INSERT INTO contrato_empresa2 SET empresa='$empresa',id_contrato = '{$_SESSION['id_contrato']}'
,usuario='{$_SESSION['nome']}',Data='$Data_log',Hora='$Hora_log'";
mysql_query($cadastro_adm8);
}





?>














