<?php

//----------------------------------------------Log do Historico --------------------------------------------------------------------------
if($_POST['cargo'] <> $dado_adm['cargo'] or $_POST['unidade'] <> $dado_adm['unidade']){
 $cadastro_adm = "INSERT INTO desativa_func SET  
 usuario='$nome',
 descricao2='$descricao2',
 Data='$Data',
 Hora='$Hora',
 data_adm='$data_adm',
 unidade='$unidade',
 n_contrato='$n_contrato',
 acao='$acao',
 id_fun='$id',
 
 cargo='$cargo'";
mysql_query($cadastro_adm);
}

	

		 if($_POST['n_contrato'] <> $dado_adm['n_contrato']){

 $log_contrato = "INSERT INTO desativa_func SET 
 
 usuario='$nome',
 descricao2='$descricao2',
 Data='$Data',
 Hora='$Hora',
 data_adm='$data_adm',
 unidade='$unidade',
 n_contrato='$n_contrato',
 acao='$acao',
 id_fun='$id',
 
 cargo='$cargo'";

mysql_query($log_contrato);
	}	











//----------------------------------------------Tabelas de Logs --------------------------------------------------------------------------

		 if($_POST['celular'] <> $dado_adm['celular']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log1 = "INSERT INTO tab_celular SET celular='{$_SESSION['celular']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log1);
	}



		 if($_POST['nome_funcionario'] <> $dado_adm['nome_funcionario']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log02 = "INSERT INTO tab_nome_funcionario SET nome_funcionario='{$_SESSION['nome_funcionario']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log02);
	}




		 if($_POST['ini_lanagro'] <> $dado_adm['ini_lanagro']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log2 = "INSERT INTO tab_ini_lanagro SET ini_lanagro='{$_SESSION['ini_lanagro']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log2);
	}



		 if($_POST['telefone'] <> $dado_adm['telefone']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log3 = "INSERT INTO tab_telefone SET telefone='{$_SESSION['telefone']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log3);
	
}



		 if($_POST['cargo'] <> $dado_adm['cargo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log4 = "INSERT INTO tab_cargo SET cargo='{$_SESSION['cargo']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log4);
	
}


		 if($_POST['escolaridade'] <> $dado_adm['escolaridade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log5 = "INSERT INTO tab_escolaridade SET escolaridade='{$_SESSION['escolaridade']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log5);
	
}



		 if($_POST['sexo'] <> $dado_adm['sexo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log6 = "INSERT INTO tab_sexo SET sexo='{$_SESSION['sexo']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log6);
	
}


		 if($_POST['Complemento'] <> $dado_adm['Complemento']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log7 = "INSERT INTO tab_Complemento SET Complemento='{$_SESSION['Complemento']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log7);
	
}


		 if($_POST['email'] <> $dado_adm['email']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log8 = "INSERT INTO tab_email SET email='{$_SESSION['email']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log8);
	
}


		 if($_POST['Bairro'] <> $dado_adm['Bairro']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log9 = "INSERT INTO tab_Bairro SET Bairro='{$_SESSION['Bairro']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log9);
	
}


		 if($_POST['cod_cidades'] <> $dado_adm['Cidade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log10 = "INSERT INTO tab_Cidade SET Cidade='{$_SESSION['Cidade']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log10);
	
}


		 if($_POST['cod_estados'] <> $dado_adm['Estado']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log11 = "INSERT INTO tab_Estado SET Estado='{$_SESSION['Estado']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log11);
	
}


		 if($_POST['n_contrato'] <> $dado_adm['n_contrato']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log12 = "INSERT INTO tab_n_contrato SET n_contrato='{$_SESSION['n_contrato']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log12);
	
}


		 if($_POST['formacao'] <> $dado_adm['formacao']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log13 = "INSERT INTO tab_formacao SET formacao='{$_SESSION['formacao']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log13);
	
}




		 if($_POST['data_nasc'] <> $dado_adm['data_nasc']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log14 = "INSERT INTO tab_data_nasc SET data_nasc='{$_SESSION['data_nasc']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log14);
	
}


		 if($_POST['obs'] <> $dado_adm['obs']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log15 = "INSERT INTO tab_obs SET obs='{$_SESSION['obs']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log15);
	
}


		 if($_POST['natura'] <> $dado_adm['natura']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log16 = "INSERT INTO tab_natura SET natura='{$_SESSION['natura']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log16);
	
}


		 if($_POST['endereco'] <> $dado_adm['endereco']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log17 = "INSERT INTO tab_endereco SET endereco='{$_SESSION['endereco']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log17);
	
}


		 if($_POST['filhos'] <> $dado_adm['filhos']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log18 = "INSERT INTO tab_filhos SET filhos='{$_SESSION['filhos']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log18);
	
}



		 if($_POST['Numero'] <> $dado_adm['Numero']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log19 = "INSERT INTO tab_Numero SET Numero='{$_SESSION['Numero']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log19);
	
}



		 if($_POST['unidade'] <> $dado_adm['unidade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log20 = "INSERT INTO tab_unidade SET unidade='{$_SESSION['unidade']}',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log20);
	
}


			 if($_POST['data_adm'] <> $dado_adm['data_adm']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log21 = "INSERT INTO tab_data_adm SET data_adm='$data_adm',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log21);
	}
	
	
	
				 if($_POST['sal_base'] <> $dado_adm['sal_base']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log22 = "INSERT INTO tab_sal_base SET sal_base='$sal_base',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log22);
	}

//----------------------------------------------------------------Inseri historico dos valores Atuais --------------------------------------------------------------------------



		 if($_POST['nome_funcionario'] <> $dado_adm['nome_funcionario']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log1 = "INSERT INTO tab_nome_funcionario2 SET nome_funcionario='$nome_funcionario',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log1);
	}




		 if($_POST['ini_lanagro'] <> $dado_adm['ini_lanagro']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log2 = "INSERT INTO tab_ini_lanagro2 SET ini_lanagro='$ini_lanagro',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log2);
	}



		 if($_POST['telefone'] <> $dado_adm['telefone']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log3 = "INSERT INTO tab_telefone2 SET telefone='$telefone',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log3);
	
}



		 if($_POST['cargo'] <> $dado_adm['cargo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log4 = "INSERT INTO tab_cargo2 SET cargo='$cargo',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log4);
	
}


		 if($_POST['escolaridade'] <> $dado_adm['escolaridade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log5 = "INSERT INTO tab_escolaridade2 SET escolaridade='$escolaridade',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log5);
	
}



		 if($_POST['sexo'] <> $dado_adm['sexo']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log6 = "INSERT INTO tab_sexo2 SET sexo='$sexo',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log6);
	
}


		 if($_POST['Complemento'] <> $dado_adm['Complemento']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log7 = "INSERT INTO tab_Complemento2 SET Complemento='$Complemento',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log7);
	
}


		 if($_POST['email'] <> $dado_adm['email']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log8 = "INSERT INTO tab_email2 SET email='$email',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log8);
	
}


		 if($_POST['Bairro'] <> $dado_adm['Bairro']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log9 = "INSERT INTO tab_Bairro2 SET Bairro='$Bairro',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log9);
	
}


		 if($_POST['cod_cidades'] <> $dado_adm['Cidade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log10 = "INSERT INTO tab_Cidade2 SET Cidade='$Cidade',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log10);
	
}


		 if($_POST['cod_estados'] <> $dado_adm['Estado']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log11 = "INSERT INTO tab_Estado2 SET Estado='$Estado',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log11);
	
}


		 if($_POST['n_contrato'] <> $dado_adm['n_contrato']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log12 = "INSERT INTO tab_n_contrato2 SET n_contrato='$n_contrato',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log12);
	
}


		 if($_POST['formacao'] <> $dado_adm['formacao']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log13 = "INSERT INTO tab_formacao2 SET formacao='$formacao',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log13);
	
}




		 if($_POST['data_nasc'] <> $dado_adm['data_nasc']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log14 = "INSERT INTO tab_data_nasc2 SET data_nasc='$data_nasc',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log14);
	
}


		 if($_POST['obs'] <> $dado_adm['obs']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log15 = "INSERT INTO tab_obs2 SET obs='$obs',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log15);
	
}


		 if($_POST['natura'] <> $dado_adm['natura']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log16 = "INSERT INTO tab_natura2 SET natura='$natura',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log16);
	
}


		 if($_POST['endereco'] <> $dado_adm['endereco']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log17 = "INSERT INTO tab_endereco2 SET endereco='$endereco',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log17);
	
}


		 if($_POST['filhos'] <> $dado_adm['filhos']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log18 = "INSERT INTO tab_filhos2 SET filhos='$filhos',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log18);
	
}



		 if($_POST['Numero'] <> $dado_adm['Numero']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log19 = "INSERT INTO tab_Numero2 SET Numero='$Numero',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log19);
	
}



		 if($_POST['unidade'] <> $dado_adm['unidade']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log20 = "INSERT INTO tab_unidade2 SET unidade='$unidade',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log20);
	
}


		 if($_POST['celular'] <> $dado_adm['celular']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log1 = "INSERT INTO tab_celular2 SET celular='$celular',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log1);
	}
	
	
	
	
			 if($_POST['data_adm'] <> $dado_adm['data_adm']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log01 = "INSERT INTO tab_data_adm2 SET data_adm='$data_adm',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log01);
	}
	
	
	
				 if($_POST['sal_base'] <> $dado_adm['sal_base']){
include('C:\wamp\www\sistema\validacao\dbconexao_log.php');
 $cadastro_adm_log02 = "INSERT INTO tab_sal_base2 SET sal_base='$sal_base',id_funcionario='$id',usuario='$nome',Data='$Data',Hora='$Hora'";
mysql_query($cadastro_adm_log02);
	}

?>