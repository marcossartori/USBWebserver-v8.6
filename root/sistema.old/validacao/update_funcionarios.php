<?php include("dbconexao.php");
$_SESSION["fim_contrato"] = $data = date("Y-m-d");




				$linha_adm3 = "SELECT * FROM funcionarios WHERE fim_contrato = '{$_SESSION['fim_contrato']}' and ativo='Sim'";
				
				$resultado3 = mysql_query($linha_adm3);
				while ( $dado_adm3 = mysql_fetch_array($resultado3)) {

echo $dado_adm3['fim_contrato'];
echo $dado_adm3['n_contrato'];

if ($dado_adm3['fim_contrato'] == $_SESSION["fim_contrato"]){
	
	include("dbconexao.php");
	
	
	
							date_default_timezone_set('America/Sao_Paulo');
							$hora = date('H:i:s');
							echo $id=$dado_adm3['id'];
							$Data=$_SESSION["fim_contrato"];
							$Hora=$hora;
							$usuario="Sistema";
							$descricao2="Log do sistema";
							echo $nome_funcionario=$dado_adm3['nome_funcionario'];
							$data_adm=$_SESSION["fim_contrato"];
							echo $n_contrato=$dado_adm3['n_contrato'];
							echo $unidade=$dado_adm3['unidade'];
							echo $cargo = $dado_adm3['cargo'];
							
							
							$acao='Desativado';
							

							 $log_insercao = "INSERT INTO desativa_func SET 
usuario='$usuario',
Data='$Data',
data_adm='$data_adm',
Hora='$Hora',
descricao2='$descricao2',
unidade='$unidade',
n_contrato='$n_contrato',
acao='$acao',
nome_funcionario='$nome_funcionario',
id_fun='$id',
cargo='$cargo'";

$query = mysql_query($log_insercao);
	
	
	
	
	
	
	
$sql = "UPDATE funcionarios SET Ativo = 'Nao' WHERE fim_contrato = '{$_SESSION['fim_contrato']}'";
$query = mysql_query($sql)or die(mysql_error()); 


 
				
							
							
							
							
							


}
	}
?>