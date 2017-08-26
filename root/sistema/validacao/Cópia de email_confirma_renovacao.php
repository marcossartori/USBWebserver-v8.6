<?php

include("somar_data.php");



			//where 
			
			
			$linha_adm3 = "SELECT * FROM contratos where 
			
			renovacao_01 <> '0000-00-00' or 
			renovacao_02 <> '0000-00-00' or 
			renovacao_03 <> '0000-00-00' or
			renovacao_04 <> '0000-00-00'
			
			";
			
			 			include('dbconexao.php');

 			$resultado3 = mysql_query($linha_adm3,$conexao);
			while ( $dado_adm3 = mysql_fetch_array($resultado3)){

			 {

			
			$dado_adm3['renovacao_01'];
			$dado_adm3['renovacao_02'];
			$dado_adm3['renovacao_03'];
			$dado_adm3['renovacao_04'];
		
		echo $date = date("Y-m-d"); echo "</br>";
		
        echo  $renovacao_01= somar_data($dado_adm3['vigencia'], 0, 0, 1); echo "</br>";
		echo  $renovacao_02= somar_data($dado_adm3['vigencia'], 0, 0, 2); echo "</br>";
		echo  $renovacao_03= somar_data($dado_adm3['vigencia'], 0, 0, 3); echo "</br>";
		echo  $renovacao_04= somar_data($dado_adm3['vigencia'], 0, 0, 4); echo "</br>";
			
			
						 }
			 
								}




 //if($dado_adm3['renovacao_01'] == 'Consulta' ){
	//header('Location: ../../sistema/validacao/filtros/extras/relatorios/relatorios_funcionarios.php');
	//}

?>