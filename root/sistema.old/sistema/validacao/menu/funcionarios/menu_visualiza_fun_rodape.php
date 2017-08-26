<?php
 
 
	        
			

   
        if($_SESSION["Acesso"] == 'Consulta' ){
		
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Historico  |";  echo "</a>";

	}
	
	
	
	 if($_SESSION["Acesso"] == 'Terceirizados'){
		 
		 
		 
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Historico  |";  echo "</a>";

	}
	
	
	
	
		 if($_SESSION["Acesso"] == 'Mapa'){
			 
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Historico  |";  echo "</a>";
	}

	
				 if($_SESSION["Master"] == 's' ){
					 
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Historico  ";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Desativar Funcionario  |";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Editar  ";  echo "</a>";

	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas'){
						 
						 
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/link2_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Historico  |";  echo "</a>";

	}
	
	
	
//================ Adiciona permissoes especiais para Fiscais	
	
	
		 				if($_SESSION["Acesso"] == 'Terceirizados' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){
			

			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Desativar Funcionario  |";  echo "</a>";

			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
            echo " Editar ";
			echo "</td>";
			
		}	
	
	
	
	
		 				if($_SESSION["Acesso"] == 'Mapa' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){
			

			echo "<a href='"; 
			echo "http://localhost/sistema/MAPA/Desativar_Fun_MAPA/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Desativar Funcionario  |";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Editar  ";  echo "</a>";
			
		}	
	
	
	
	
	
		 				if($_SESSION["Acesso"] == 'Bolsistas' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){
			

			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/desativa_Fun/cadastrar_Inativo_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Desativar Funcionario  |";  echo "</a>";
			
			
			echo "<a href='"; 
			echo "http://localhost/sistema/Contratos/edit_funcionario_mapa_bolsista_estagiarios.php?id=";
			echo $dado_adm['id'];
			echo "'>";
		    echo " Editar  ";  echo "</a>";
			
		}		
	
	
	
	
	
	
?>