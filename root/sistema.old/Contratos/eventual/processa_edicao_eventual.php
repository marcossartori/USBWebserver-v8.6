<?php
include('C:\wamp\www\sistema\validacao\testa_adm.php');
$nome = $_SESSION["nome"];
include('C:\wamp\www\sistema\validacao\dbconexao.php');


		
		$id_fun=$_SESSION['id_fun'];
		$data_entrada_ev=$_POST['data_entrada_ev'];
		$data_saida_ev=$_POST['data_saida_ev'];	
		
		
		
							date_default_timezone_set('America/Sao_Paulo');
                            $Hora = date('H:i:s');
							
							$Data=date("Y-m-d"); 
							
							$descricao2=$_POST['descricao2'];		
							$data_saida='Log do Sistema';
							$acao='Atualização';
							
							$nome_funcionario=$_SESSION['nome_funcionario'];
							$unidade=$_SESSION["unidade"];	
							$n_contrato=$_SESSION['n_contrato']; 
				

 $cadastro_adm_logZ2xa = "UPDATE funcionarios SET data_entrada_ev='$data_entrada_ev',data_saida_ev='$data_saida_ev' where id='{$_SESSION['id_fun']}'";

mysql_query($cadastro_adm_logZ2xa);






 $cadastro_adm_logZQ = "INSERT INTO log_eventual SET 

					

							Data='$Data',
							usuario='$nome',
							Hora='$Hora',
							descricao2='$descricao2',
							unidade='$unidade',
							n_contrato='$n_contrato',
							data_entrada_ev='$data_entrada_ev',
							data_saida_ev='$data_saida_ev',
							id_fun='$id_fun',
						
							nome_funcionario='$nome_funcionario'"; 



mysql_query($cadastro_adm_logZQ);



echo "Alterado com sucesso";


echo "<label>";
echo '<input type="submit"   value="OK" onclick="opener.location.reload();window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>";

?>
