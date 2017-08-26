<?php     
        if($_SESSION["Acesso"] == 'Consulta' ){
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/adicionar_detalhes/link2_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Detalhes  ";  echo "</a>";
	}
	
	
	 if($_SESSION["Acesso"] == 'Terceirizados' ){
		 
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/adicionar_detalhes/link2_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Detalhes  |";  echo "</a>";

		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Listar Funcionarios  |";  echo "</a>";

	}
	
	
	
		 if($_SESSION["Acesso"] == 'Mapa' ){
			 
		echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/Adicionar_detalhes_MAPA/link2_aditivo_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Detalhes  |";  echo "</a>";
		
	

		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/visualizar_edit_lista_func2_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo " Listar Funcionarios  |";  echo "</a>";

	}

	
				 if($_SESSION["Master"] == 's' ){
					 
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/adicionar_detalhes/link2_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Detalhes  |";  echo "</a>";
		
	
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/adicionar_detalhes/cadastrar_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Adicionar Detalhes  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/visualizar_edit_lista_func2.php?pagina=1";
		echo "'>";
		echo " Listar Funcionarios  ";  echo "</a>";

	
	}
	
	
					 if($_SESSION["Acesso"] == 'Bolsistas' ){
						 
						 
		echo "<a href='"; 
		echo "http://localhost/sistema/Bolsistas/Adicionar_detalhes_Bolsistas/link2_aditivo_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Detalhes  |";  echo "</a>";
		
	
		echo "<a href='"; 
		echo "http://localhost/sistema/Bolsistas/Adicionar_detalhes_Bolsistas/cadastrar_aditivo_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Adicionar Detalhes  |";  echo "</a>";
		
		
		echo "<a href='"; 
		echo "http://localhost/sistema/Bolsistas/visualizar_edit_lista_func2_mapa_bolsista_estagiarios.php?pagina=1";
		echo "'>";
		echo " Listar Funcionarios  ";  echo "</a>";

	
	}
	
	
//================ Adiciona permissoes especiais para Fiscais	
	
	
		 				if($_SESSION["Acesso"] == 'Terceirizados' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){
			
			
			
			
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/adicionar_detalhes/cadastrar_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Adicionar Detalhes  ";  echo "</a>";	
			
			
		echo "<a href='"; 
		echo "http://localhost/sistema/Contratos/edit_contrato.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo "| Editar  ";  echo "</a>";	
			
		}
		
		
		 				if($_SESSION["Acesso"] == 'Mapa' and ($_SESSION['nome'] == $_SESSION["fiscal_sub_1"] 
		
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_2"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_3"]
		or $_SESSION['nome'] == $_SESSION["fiscal_sub_4"]
		or $_SESSION['nome'] == $_SESSION["fiscal"])){
			
			
			
			
		echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/Adicionar_detalhes_MAPA/cadastrar_aditivo_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Adicionar Detalhes  |";  echo "</a>";
			
			
		echo "<a href='"; 
		echo "http://localhost/sistema/MAPA/edit_contrato_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";	
			
		}		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
?>