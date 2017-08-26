<?php
include('..\..\validacao\testa_adm.php');
$nome = $_SESSION["nome"];
include('..\..\validacao\dbconexao.php');


    	$id_fun=$_SESSION['id_fun']; 
		$data_entrada_ev=$_POST['data_entrada_ev'];
        $data_saida_ev=$_POST['data_saida_ev'];	
		date_default_timezone_set('America/Sao_Paulo');
        $Hora = date('H:i:s');			
		$Data=date("Y-m-d"); 				
		$descricao2=$_POST['descricao2'];		
		$n_contrato=$_SESSION['n_contrato']; 
				

 
 
 
 
 
 
 $cadastro_adm = "INSERT INTO afastamento SET 
 
 data_entrada_ev='$data_entrada_ev',
 data_saida_ev='$data_saida_ev',
 Hora='$Hora',
 Data='$Data',
 descricao2='$descricao2',
 n_contrato='$n_contrato',
 id_fun='$id_fun',
 usuario='$nome'";

mysql_query($cadastro_adm);




echo "Enviado com sucesso";


echo "<label>";
echo '<input type="submit"   value="OK" onclick="opener.location.reload();window.close()" >';


//echo '<input type="submit"   value="OK" onclick="window.close()" >';
//echo '<input type="submit"   value="OK" onclick="window.opener.document.forms[0].submit();">';
echo "</label>";

?>
