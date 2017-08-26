

<?php     
        if($_SESSION["Acesso"] == 'Consulta' 
		or $_SESSION["Acesso"] == 'Terceirizados' 
		or $_SESSION["Acesso"] == 'Mapa' 
		or $_SESSION["Acesso"] == 'Bolsistas'){
		
		echo "<a href='"; 
		echo "../../sistema/contratos/adicionar_detalhes/link2_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Detalhes de alterações do contrato" >'; echo '<img src="../../sistema/imagens/detalhes.png" width="100" border="0" height="50" />'; echo'</span>';
		echo "</a>";
	}

	
	
//================ Adiciona permissoes especiais para Fiscais	
//======================================================== Terceirizados  ========================================================
	
		  if( $_SESSION['id'] == $dado_adm["fiscal"]
		   
		or($_SESSION['id'] == $dado_adm["fiscal_sub_1"]) 
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_2"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_3"])
		or ($_SESSION['id'] == $dado_adm["fiscal_sub_4"])
		
		  
		 and( $dado_adm["tipo_contrato"] == 'Terceirizados')
		 
		 
		 
		 
		 
		 
		 ){
			
			
			
		echo "<a href='"; 
		echo "../validacao/filtros/extras/relatorios/lista_funcionarios.php";
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Lista todos os funcionários desse contrato" >'; echo '<img src="../../sistema/imagens/listar_fun.png" width="100" border="0" height="50" />'; echo'</span>';
		
		echo "</a>";
		

			
			
/*		echo "<a href='"; 
		echo "../../../sistema/Contratos/adicionar_detalhes/cadastrar_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Adiciona delhes ao contrato contrato" >'; echo '<img src="../../sistema/imagens/adicionar_detalhes.png" width="100" border="0" height="50" />'; echo'</span>';
		
		echo "</a>";
		*/
		
			
			
		echo "<a href='"; 
		echo "../../../sistema/Contratos/edit_contrato.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="edição do contrato" >'; echo '<img src="../../sistema/imagens/editar.png" width="100" border="0" height="50" />'; echo'</span>';	
			
		}

//======================================================== MAPA ========================================================		

		if($_SESSION["Acesso"] == 'Mapa'
		

		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 
			or $dado_adm["tipo_contrato"] == 'Estagiarios')){


		echo "<a href='"; 
		echo "../validacao/filtros/extras/relatorios/lista_funcionarios.php";
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Lista todos os funcionários desse contrato" >'; echo '<img src="../../sistema/imagens/listar_fun.png" width="100" border="0" height="50" />'; echo'</span>';
		echo "</a>";	
			
			
		echo "<a href='"; 
		echo "../../../sistema/Contratos/adicionar_detalhes/cadastrar_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Adiciona delhes ao contrato contrato" >'; echo '<img src="../../sistema/imagens/adicionar_detalhes.png" width="100" border="0" height="50" />'; echo'</span>';
		
		echo "</a>";
			
			
		/*echo "<a href='"; 
		echo "../../../sistema/MAPA/edit_contrato_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo "| Editar  ";  echo "</a>";	*/
		
		
		
		
			
		}	
		
		
		
//======================================================== Bolsistas ========================================================		
		
		
		if($_SESSION["Acesso"] == 'Bolsistas'
		
		and ($_SESSION['Acesso2'] == $dado_adm["tipo_contrato"] 
		
		    or $_SESSION['Acesso3'] == $dado_adm["tipo_contrato"] 
		    or $_SESSION['Acesso4'] == $dado_adm["tipo_contrato"] 

		
		
		)){
			
			
		echo "<a href='"; 
		echo "../validacao/filtros/extras/relatorios/lista_funcionarios.php";
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Lista todos os funcionários desse contrato" >'; echo '<img src="../../sistema/imagens/listar_fun.png" width="100" border="0" height="50" />'; echo'</span>';
		echo "</a>";	
			
			
		echo "<a href='"; 
		echo "../../../sistema/Contratos/adicionar_detalhes/cadastrar_aditivo.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo '<span data-tooltip class="has-tip" title="Adiciona delhes ao contrato contrato" >'; echo '<img src="../../sistema/imagens/adicionar_detalhes.png" width="100" border="0" height="50" />'; echo'</span>';
		echo "</a>";
			
			
		/*echo "<a href='"; 
		echo "../../../sistema/Bolsistas/edit_contrato_mapa_bolsista_estagiarios.php?id=";
		echo $dado_adm['id'];
		echo "'>";
		echo " Editar  ";  echo "</a>";	*/
			
		}			

?>